<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Actorinterno;
use App\Models\Cargointerno;
use App\Models\Direccion;
use App\Models\Secretaria;
use App\Models\Unidad;
use Illuminate\Http\Request;

class ActorinternoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actorinternos = Actorinterno::all();
        return view('actorinterno.index')->with('actorinternos',$actorinternos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $actors = Actor::all();
        $cargos = Cargointerno::all();
        $secretarias = Secretaria::all();
        $direccions = Direccion::all();
        $unidads = Unidad::all();
        return view('actorinterno.create')->with('actors',$actors)->with('cargos',$cargos)
        ->with('secretarias',$secretarias)->with('direccions',$direccions)->with('unidads',$unidads);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $actorinterno = new Actorinterno();
        $actorinterno->id_actor = $request->get('id_actor');
        $actorinterno->id_cargo = $request->get('id_cargo');
        $actorinterno->id_secretaria = $request->get('id_secretaria');
        $actorinterno->id_direccion = $request->get('id_direccion');
        $actorinterno->id_unidad = $request->get('id_unidad');
        $actorinterno->save();
        return redirect('/actorinternos');
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
        $actors = Actor::all();
        $cargos = Cargointerno::all();
        $secretarias = Secretaria::all();
        $direccions = Direccion::all();
        $unidads = Unidad::all();
        $actorinterno = Actorinterno::find($id);
        return view('actorinterno.edit')->with('actors',$actors)->with('cargos',$cargos)
        ->with('secretarias',$secretarias)->with('direccions',$direccions)->with('unidads',$unidads)
        ->with('actorinterno',$actorinterno);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $actorinterno = Actorinterno::find($id);
        $actorinterno->id_actor = $request->get('id_actor');
        $actorinterno->id_cargo = $request->get('id_cargo');
        $actorinterno->id_secretaria = $request->get('id_secretaria');
        $actorinterno->id_direccion = $request->get('id_direccion');
        $actorinterno->id_unidad = $request->get('id_unidad');
        $actorinterno->save();
        return redirect('/actorinternos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $actorinterno = Actorinterno::find($id);
        $actorinterno->delete();
        return redirect('/actorinternos');
    }
}
