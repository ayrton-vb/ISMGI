<?php

namespace App\Http\Controllers;

use App\Models\Problematica;
use Illuminate\Http\Request;

class ProblematicaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $problematicas = Problematica::all();
        return view('problematica.index')->with('problematicas',$problematicas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('problematica.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $problematica = new Problematica();
        $problematica->nombre = $request->get('nombre');
        $problematica->descripcion = $request->get('descripcion');
        $problematica->estado = $request->get('estado');
        $problematica->save();
        return redirect('/problematicas');
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
        $problematica = Problematica::find($id);
        return view('problematica.edit')->with('problematica',$problematica);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $problematica = Problematica::find($id);
        $problematica->nombre = $request->get('nombre');
        $problematica->descripcion = $request->get('descripcion');
        $problematica->estado = $request->get('estado');
        $problematica->save();
        return redirect('/problematicas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $problematica = Problematica::find($id);
        $problematica->delete();
        return redirect('/problematicas');
    }
}
