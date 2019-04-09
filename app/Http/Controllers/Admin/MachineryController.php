<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Http\Requests\MachineryStoreRequest;
use App\Http\Requests\MachineryUpdateRequest;
use App\Machinery;
use Illuminate\Support\Facades\Cache;

class MachineryController extends Controller
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
    {   
        $machineries = Machinery::orderBy('id', 'DESC')->paginate(8);
        return view('admin.machineries.index', compact('machineries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.machineries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MachineryStoreRequest $request)
    {
        $machinery = Machinery::create($request->all());

        // Imagenes
        if ($request->file('file')) {

            $machinery->file = $request->file('file')->store('public');
            $machinery->save();
        }

        if ($request->file('brand')) {

            $machinery->brand = $request->file('brand')->store('public');
            $machinery->save();
        }

        if ($request->file('data')) {

            $machinery->data = $request->file('data')->store('public');
            $machinery->save();
        }
        
        $machinery->save();

        return redirect()->route('machineries.index', $machinery->id)->with('info', 'Articulo creado correctamente');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $machinery = Machinery::findOrFail($id);
        return view('admin.machineries.edit', compact('machinery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MachineryUpdateRequest $request, $id)
    {
        $machinery = Machinery::findOrFail($id);
        $machinery->fill($request->all())->save();

        // Imagenes
        if ($request->file('file')) {

            $machinery->file = $request->file('file')->store('public');
            $machinery->save();
        }

        if ($request->file('brand')) {

            $machinery->brand = $request->file('brand')->store('public');
            $machinery->save();
        }

        if ($request->file('data')) {

            $machinery->data = $request->file('data')->store('public');
            $machinery->save();
        }

        return redirect()->route('machineries.index', $machinery->id)->with('info', 'Llanta actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $machinery = Machinery::findOrFail($id)->delete();
        return back()->with('info', 'Llanta eliminada correctamente');
    }
}
