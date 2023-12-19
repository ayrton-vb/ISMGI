<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Actorinstitucional;
use App\Models\Cargoinstitucional;
use App\Models\Institucion;
use Illuminate\Http\Request;

class ActorinstitucionalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actorinstitucionals = Actorinstitucional::all();
        return view('actorinstitucional.index')->with('actorinstitucionals',$actorinstitucionals);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $actors = Actor::all();
        $cargoinstitucionals = Cargoinstitucional::all();
        $institucions = Institucion::all();;
        return view('actorinstitucional.create')->with('actors',$actors)->with('cargoinstitucionals',$cargoinstitucionals)
        ->with('institucions',$institucions);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $actorinstitucional = new Actorinstitucional();
        $actorinstitucional->id_actor = $request->get('id_actor');
        $actorinstitucional->id_cargoinstitucional = $request->get('id_cargoinstitucional');
        $actorinstitucional->id_institucion = $request->get('id_institucion');
        $actorinstitucional->save();
        return redirect('/actorinstitucionals');
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
        
        $actorinstitucional = Actorinstitucional::find($id);
        $actors = Actor::all();
        $cargoinstitucionals = Cargoinstitucional::all();
        $institucions = Institucion::all();;
        return view('actorinstitucional.edit')->with('actorinstitucional',$actorinstitucional)->with('actors',$actors)
        ->with('cargoinstitucionals',$cargoinstitucionals)
        ->with('institucions',$institucions);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $actorinstitucional = Actorinstitucional::find($id);
        $actorinstitucional->id_actor = $request->get('id_actor');
        $actorinstitucional->id_cargoinstitucional = $request->get('id_cargoinstitucional');
        $actorinstitucional->id_institucion = $request->get('id_institucion');
        $actorinstitucional->save();
        return redirect('/actorinstitucionals');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $actorinstitucional = Actorinstitucional::find($id);
        $actorinstitucional->delete();
        return redirect('/actorinstitucionals');
    }
}
