<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Actorexterno;
use App\Models\Cargoexterno;
use Illuminate\Http\Request;
use Nette\Utils\Strings;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function byPalabra($palabra){
        $tramites = Actor::where('nombre','LIKE',"%$palabra%")->get();
        $var = array();

        foreach ($tramites as $tramite) {
            $actorexterno = Actorexterno::where('id_actor',$tramite->id)->get();
            array_push($var,$actorexterno);
        }
        
        $actorexterno = Actorexterno::all();
        $cargos = Cargoexterno::all();

        return   [$tramites, $var];
    }


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
        $actor->sexo = $request->get('sexo');
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
        $actor->sexo = $request->get('sexo');
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
