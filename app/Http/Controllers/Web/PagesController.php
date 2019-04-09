<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use App\Post;
use App\Tire;
use App\Machinery;

class PagesController extends Controller
{
    public function index()
    {	
        $key =  "post" ;

        $post = Cache::remember($key, now()->addMinutes(10), function(){
            return Post::with(['user'])->orderBy('id', 'DESC')->first();
        });
        return view('index', compact('post'));
    }
    public function posts()
    {
        $key =  "posts.articulos." . request('page', 1);

        $posts = Cache::remember($key, now()->addMinutes(10), function(){
            return Post::with(['user'])->orderBy('id', 'DESC')->paginate(10);
        });

        return view('web.posts', compact('posts'));
    }
    public function post($slug)
    {   $post = Cache::remember("blog.{$slug}", now()->addMinutes(10), function() use($slug){
            return Post::where('slug', $slug)->first();
        } );
        $related= Post::inRandomOrder()
            ->where('category_id', $post->category->id)
            ->where('id', '!=', $post->id)
            ->paginate(3);
        return view('web.post', compact('post', 'related'));
    }

    public function tires()
    {
        
        $camiones = Tire::orderBy('name', 'DESC')->where('category', 'CAMION')->paginate();
        $agricolas = Tire::orderBy('name', 'DESC')->where('category','AGRICOLA')->paginate();
        return view('web.tires', compact('camiones', 'agricolas'));
    }

    public function machinery()
    {
        $machineries = Machinery::orderBy('name', 'DESC')->paginate();
        return view('web.machineries', compact('machineries'));
    }

}
