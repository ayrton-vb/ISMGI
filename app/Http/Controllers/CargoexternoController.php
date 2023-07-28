<?php

namespace App\Http\Controllers;

use App\Models\Actorexterno;
use Illuminate\Http\Request;
use App\Models\CargoExterno;


class CargoexternoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cargoexternos = Cargoexterno::all();
        return view('cargoexterno.index')->with('cargoexternos',$cargoexternos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cargoexterno.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cargoexterno = new Cargoexterno();
        $cargoexterno->nombre = $request->get('nombre');
        $cargoexterno->save();
        return redirect('/cargoexternos');
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
        $cargoexterno = Cargoexterno::find($id);
        return view('cargoexterno.edit')->with('cargoexterno',$cargoexterno);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cargoexterno = Cargoexterno::find($id);
        $cargoexterno->nombre = $request->get('nombre');
        $cargoexterno->save();
        return redirect('/cargoexternos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cargoexterno = Cargoexterno::find($id);
        $cargoexterno->delete();
        return redirect('/cargoexternos');
    }
}
