<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Actorexterno;
use App\Models\Cargoexterno;
use App\Models\Organizacion;
use Illuminate\Http\Request;
use Nette\Utils\Strings;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function byPalabra($palabra){
        $actores = Actor::where('nombre','LIKE',"%$palabra%")->get();
        $var = array();
        $var2 = array();
        $var3 = array();

        foreach ($actores as $actor) {
            $actorexternos = Actorexterno::where('id_actor',$actor->id)->get();
            array_push($var,$actorexternos);

        }

        for($i=0;$i<count($var);$i++){

            $cargos=Cargoexterno::where('id',$var[$i][0]->id_cargoexterno)->get();
            array_push($var2,$cargos);
        }

        for($j=0;$j<count($var);$j++){

            $organizacion=Organizacion::where('id',$var[$j][0]->id_organizacion)->get();
            array_push($var3,$organizacion);
        }
        
        return   [$actores, $var, $var2, $var3];
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
