<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use Illuminate\Support\Facades\Cache;
use App\Category;
use App\Post;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $key =  "posts.page." . request('page', 1);

        $posts = Cache::rememberForever($key, function(){
            return Post::with(['user'])->orderBy('id', 'DESC')->where('user_id', auth()->user()->id)->paginate(8);
        });
        return view('admin.posts.index', compact('posts'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categories = Category::orderBy('name' , 'ASC')->get();
        return view('admin.posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {
        $tags = explode(',', $request->tags);
        $post = Post::create($request->all());
        $post->tag($tags);
        // Imagenes
        if ($request->file('file')) {

            $post->file = $request->file('file')->store('public');
            $post->save();
        }

        $post->save();
        Cache::flush();
        return redirect()->route('posts.index')->with('info', 'Artículo creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $post = Cache::rememberForever("post.{$id}", function() use($id){
            return Post::findOrFail($id);
        });
        //$this->authorize('pass', $post);
        $categories = Category::orderBy('name' , 'ASC')->get();
        return view('admin.posts.edit', compact('post', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, $id)
    {   
        $post = Post::findOrFail($id);
        //$this->authorize('pass', $post);
        $tags = explode(',', $request->tags);
        $post->fill($request->all())->save();
        $post->tag($tags);
        // Imagenes
        if ($request->hasFile('file')) {
            $post->file = $request->file('file')->store('public');
            $post->save();
        }
        Cache::flush();
        return redirect()->route('posts.index')->with('info', 'Articulo actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        //$this->authorize('pass', $post);
        $post->delete();
        Cache::flush();
        return redirect()->route('posts.index')->with('info', 'Artículo eliminado correctamente');
    }
}
