<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\clasificacion;

class ClasificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clasificacions=clasificacion::all();
        return view('admin.clasificacion.index',compact('clasificacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clasificacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required',
            'slug'=>'required|unique:clasificacions'

        ]);
        $clasificacion= clasificacion::create($request->all());
        return redirect()->route('admin.clasificacion.edit', $clasificacion);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(clasificacion $clasificacion)
    {
        return view('admin.clasificacion.show', compact('clasificacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(clasificacion $clasificacion)
    {
        return view('admin.clasificacion.edit', compact('clasificacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, clasificacion $clasificacion)
    {
        $request->validate([
            'nombre'=>'required',
            'slug'=>"required|unique:clasificacions,slug,$clasificacion->id"
        ]);
        $clasificacion->update($request->all());
        return redirect()->route('admin.clasificacion.edit', $clasificacion)->with('info', 'La clasificacion se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(clasificacion $clasificacion)
    {
        //
    }
}
