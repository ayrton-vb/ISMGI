<?php

namespace App\Http\Controllers;

use App\Models\Direccion;
use App\Models\Secretaria;
use Illuminate\Http\Request;

class DireccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $direccions = Direccion::all();
        return view('direccion.index')->with('direccions',$direccions);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $secretarias = Secretaria::all();
        return view('direccion.create')->with('secretarias',$secretarias);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $direccion = new Direccion();
        $direccion->nombre = $request->get('nombre');
        $direccion->sigla = $request->get('sigla');
        $direccion->id_secretaria = $request->get('id_secretaria');
        $direccion->save();
        return redirect('/direccions');
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
        $direccion = Direccion::find($id);
        $secretarias = Secretaria::all();
        return view('direccion.edit')->with('direccion',$direccion)->with('secretarias',$secretarias);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $direccion = Direccion::find($id);
        $direccion->nombre = $request->get('nombre');
        $direccion->sigla = $request->get('sigla');
        $direccion->id_secretaria = $request->get('id_secretaria');
        $direccion->save();
        return redirect('/direccions');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $direccion = Direccion::find($id);
        $direccion->delete();
        return redirect('/direccion');
    }
}
