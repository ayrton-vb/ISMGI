<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actors = Actor::all();
        return view('actor.index')->with('actors',$actors);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('actor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $actor = new Actor();
        $actor->nombre = $request->get('nombre');
        $actor->celular = $request->get('celular');
        $actor->carnet = $request->get('carnet');
        $actor->save();
        return redirect('/actors');
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
        $actor = Actor::find($id);
        return view('actor.edit')->with('actor',$actor);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $actor = Actor::find($id);
        $actor->nombre = $request->get('nombre');
        $actor->celular = $request->get('celular');
        $actor->carnet = $request->get('carnet');
        $actor->save();
        return redirect('/actors');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $actor = Actor::find($id);
        $actor->delete();
        return redirect('/actors');
    }
}
