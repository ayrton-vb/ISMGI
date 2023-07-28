<?php

namespace App\Http\Controllers;

use App\Models\Organizacion;
use Illuminate\Http\Request;

class OrganizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organizaciones = Organizacion::all();
        return view('organizacion.index')->with('organizaciones',$organizaciones);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('organizacion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $organizacion= new Organizacion();
        $organizacion->nombre = $request->get('nombre');
        $organizacion->sigla = $request->get('sigla');
        $organizacion->fundacion = $request->get('fundacion');
        $organizacion->direccion = $request->get('direccion');
        $organizacion->telefono = $request->get('telefono');
        $organizacion->dependencia = $request->get('dependencia');
        $organizacion->save();
        return redirect('/organizacions');
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
        $organizacion = Organizacion::find($id);
        return view('organizacion.edit')->with('organizacion',$organizacion);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $organizacion = Organizacion::find($id);
        $organizacion->nombre = $request->get('nombre');
        $organizacion->sigla = $request->get('sigla');
        $organizacion->fundacion = $request->get('fundacion');
        $organizacion->direccion = $request->get('direccion');
        $organizacion->telefono = $request->get('telefono');
        $organizacion->dependencia = $request->get('dependencia');
        $organizacion->save();
        return redirect('/organizacions');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $organizacion = Organizacion::find($id);
        $organizacion->delete();
        return redirect('/organizacions');
    }
}
