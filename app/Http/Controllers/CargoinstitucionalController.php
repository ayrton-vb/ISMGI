<?php

namespace App\Http\Controllers;

use App\Models\Cargoinstitucional;
use Illuminate\Http\Request;

class CargoinstitucionalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cargoinstitucionals = Cargoinstitucional::all();
        return view('cargoinstitucional.index')->with('cargoinstitucionals',$cargoinstitucionals);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cargoinstitucional.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cargoinstitucional = new Cargoinstitucional();
        $cargoinstitucional->nombre = $request->get('nombre');
        $cargoinstitucional->save();
        return redirect('/cargoinstitucionals');
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
        $cargoinstitucional = Cargoinstitucional::find($id);
        return view('cargoinstitucional.edit')->with('cargoinstitucional',$cargoinstitucional);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cargoinstitucional = Cargoinstitucional::find($id);
        $cargoinstitucional->nombre = $request->get('nombre');
        $cargoinstitucional->save();
        return redirect('/cargoinstitucionals');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cargoinstitucional = Cargoinstitucional::find($id);
        $cargoinstitucional->delete();
        return redirect('/cargoinstitucionals');
    }
}
