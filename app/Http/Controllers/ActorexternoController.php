<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Actorexterno;
use App\Models\Cargoexterno;
use App\Models\Organizacion;
use Illuminate\Http\Request;

class ActorexternoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actorexternos = Actorexterno::all();
        return view('actorexterno.index')->with('actorexternos',$actorexternos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $actors = Actor::all();
        $organizacions = Organizacion::all();
        $cargoexternos = Cargoexterno::all();
        return view('actorexterno.create')->with('actors',$actors)->with('organizacions',$organizacions)->with('cargoexternos',$cargoexternos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $actorexterno = new Actorexterno();
        $actorexterno->inclinacionPolitica = $request->get('inclinacionPolitica');
        $actorexterno->relacion = $request->get('relacion');
        $actorexterno->aliadoEstategico = $request->get('aliadoEstategico');
        $actorexterno->influencia = $request->get('influencia');
        $actorexterno->capMovilizacion = $request->get('capMovilizacion');
        $actorexterno->id_actor = $request->get('id_actor');
        $actorexterno->id_organizacion = $request->get('id_organizacion');
        $actorexterno->id_cargoexterno = $request->get('id_cargoexterno');
        $actorexterno->save();
        return redirect('/actorexternos');
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
        $organizacions = Organizacion::all();
        $cargoexternos = Cargoexterno::all();
        $actorexterno = Actorexterno::find($id);
        return view('actorexterno.edit')->with('actorexterno',$actorexterno)->with('actors',$actors)->with('organizacions',$organizacions)->with('cargoexternos',$cargoexternos);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $actorexterno = Actorexterno::find($id);
        $actorexterno->inclinacionPolitica = $request->get('inclinacionPolitica');
        $actorexterno->relacion = $request->get('relacion');
        $actorexterno->aliadoEstategico = $request->get('aliadoEstategico');
        $actorexterno->influencia = $request->get('influencia');
        $actorexterno->capMovilizacion = $request->get('capMovilizacion');
        $actorexterno->id_actor = $request->get('id_actor');
        $actorexterno->id_organizacion = $request->get('id_organizacion');
        $actorexterno->id_cargoexterno = $request->get('id_cargoexterno');
        $actorexterno->save();
        return redirect('/actorexternos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $actorexterno = Actorexterno::find($id);
        $actorexterno->delete();
        return redirect('/actorexternos');
    }
}
