<?php

namespace App\Http\Controllers;

use App\Models\Cargointerno;
use Illuminate\Http\Request;

class CargointernoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cargointernos = Cargointerno::all();
        return view('cargointerno.index')->with('cargointernos',$cargointernos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cargointerno.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cargointernos = new Cargointerno();
        $cargointernos->nombre = $request->get('nombre');
        $cargointernos->save();
        return redirect('/cargointernos');
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
        $cargointerno = Cargointerno::find($id);
        return view('cargointerno.edit')->with('cargointerno',$cargointerno);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cargointernos = Cargointerno::find($id);
        $cargointernos->nombre = $request->get('nombre');
        $cargointernos->save();
        return redirect('/cargointernos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cargointernos = Cargointerno::find($id);
        $cargointernos->delete();
        return redirect('/cargointernos');
    }
}
