<?php

namespace App\Http\Controllers;

use App\Models\Institucion;
use Illuminate\Http\Request;

class InstitucionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $institucions = Institucion::all();
        return view('institucion.index')->with('institucions',$institucions);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('institucion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $institucion = new Institucion();
        $institucion->nombre = $request->get('nombre');
        $institucion->sigla = $request->get('sigla');
        $institucion->direccion = $request->get('direccion');
        $institucion->telefono = $request->get('telefono');
        $institucion->save();
        return redirect('/institucions');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $institucion = Institucion::find($id);
        return view('institucion.edit')->with('institucion',$institucion);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $institucion = Institucion::find($id);
        $institucion->nombre = $request->get('nombre');
        $institucion->sigla = $request->get('sigla');
        $institucion->direccion = $request->get('direccion');
        $institucion->telefono = $request->get('telefono');
        $institucion->save();
        return redirect('/institucions');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $institucion = Institucion::find($id);
        $institucion->delete();
        return redirect('/institucions');
    }
}
