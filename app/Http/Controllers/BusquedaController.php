<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Actorexterno;
use App\Models\Organizacion;
use Illuminate\Http\Request;

class BusquedaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actorExterno = Actorexterno::all();
        $organizacions = Organizacion::all();
        $organizacionsMatrizes = Organizacion::where('id_tipoorganizacion',"1")->get();
        $organizacionsIndependientes = Organizacion::where('id_tipoorganizacion',"2")->get();
        $organizacionsDependientes = Organizacion::where('id_tipoorganizacion',"3")->get();
        return view('busqueda.index')->with('actorExterno',$actorExterno)->with('organizacions',$organizacions)
        ->with('organizacionsMatrizes',$organizacionsMatrizes)
        ->with('organizacionsIndependientes',$organizacionsIndependientes)
        ->with('organizacionsDependientes',$organizacionsDependientes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
