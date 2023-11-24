<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Cargoexterno;
use App\Models\Actorexterno;
use App\Models\Historialactorexterno;
use App\Models\Organizacion;
use Illuminate\Http\Request;

class HistorialactorexternoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $historialexternos = Historialactorexterno::all();
        return view('historialexterno.index')->with('historialexternos',$historialexternos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $actors = Actor::all();
        $cargos = Cargoexterno::all();
        $organizacions = Organizacion::all();
        return view('historialexterno.create')->with('actors',$actors)->with('cargos',$cargos)
        ->with('organizacions',$organizacions);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $historialactorexterno = new Historialactorexterno();
        $historialactorexterno->id_actor = $request->get('id_actor');
        $historialactorexterno->id_cargoexterno = $request->get('id_cargo');
        $historialactorexterno->id_organizacion = $request->get('id_organizacion');
        $historialactorexterno->fechatermino = $request->get('fechatermino');
        $historialactorexterno->save();
        return redirect('/historialexternos');
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
        $historialactorexterno = Historialactorexterno::find($id);
        $actorexternos = Actorexterno::all();
        $cargos = Cargoexterno::all();
        $organizacions = Organizacion::all();
        return view('historialexterno.create')->with('actorexternos',$actorexternos)->with('cargos',$cargos)
        ->with('organizacions',$organizacions)->with('orghistorialactorexternonizacions',$historialactorexterno);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $historialactorexterno = Historialactorexterno::find($id);
        $historialactorexterno->id_actor = $request->get('id_actor');
        $historialactorexterno->id_cargoexterno = $request->get('id_cargo');
        $historialactorexterno->id_organizacion = $request->get('id_organizacion');
        $historialactorexterno->fechatermino = $request->get('fechatermino');
        $historialactorexterno->save();
        return redirect('/historialexternos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $historialactorexterno = Historialactorexterno::find($id);
        $historialactorexterno->delete();
        return redirect('/historialexternos');
    }
}
