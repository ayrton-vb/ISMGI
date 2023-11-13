<?php

namespace App\Http\Controllers;

use App\Models\Direccion;
use App\Models\Unidad;
use Illuminate\Http\Request;

class UnidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $unidads = Unidad::all();
        return view('unidad.index')->with('unidads',$unidads);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $unidads = Unidad::all();
        $direccions = Direccion::all();
        return view('unidad.create')->with('direccions',$direccions);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $unidad = new Unidad();
        $unidad->nombre = $request->get('nombre');
        $unidad->sigla = $request->get('sigla');
        $unidad->id_direccion = $request->get('id_direccion');
        $unidad->save();
        return redirect('/unidads');
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
        $unidad = Unidad::find($id);
        $direccions = Direccion::all();
        return view('unidad.edit')->with('unidad',$unidad)->with('direccions',$direccions);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $unidad = Unidad::find($id);
        $unidad->nombre = $request->get('nombre');
        $unidad->sigla = $request->get('sigla');
        $unidad->id_direccion = $request->get('id_direccion');
        $unidad->save();
        return redirect('/unidads');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $unidad = Unidad::find($id);
        $unidad->delete();
        return redirect('/unidads');
    }
}
