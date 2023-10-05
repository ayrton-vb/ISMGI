<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Actorexterno;
use App\Models\Organizacion;
use App\Models\Tipoorganizacion;
use App\Models\Cargoexterno;
use Illuminate\Http\Request;

class OrganizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function deletemiembros($id,$id2)
     {
         $actor = Actor::find($id);
         $actorexterno = Actorexterno::find($id2);
         $idOrganizacion = $actorexterno->id_organizacion;
         $actor->delete();
         $actorexterno->delete();
         return redirect("/organizacions/$idOrganizacion/miembros");
     }

     public function storemiembros(Request $request, $id, $id2)
    {
        $actor = Actor::find($id);
        $actor->nombre = $request->get('nombre');
        $actor->celular = $request->get('celular');
        $actor->carnet = $request->get('carnet');
        $actor->sexo = $request->get('sexo');
        $actor->save();
        $actorexterno = Actorexterno::find($id2);
        $actorexterno->inclinacionPolitica = $request->get('inclinacionPolitica');
        $actorexterno->relacion = $request->get('relacion');
        $actorexterno->aliadoEstategico = $request->get('aliadoEstategico');
        $actorexterno->influencia = $request->get('influencia');
        $actorexterno->capMovilizacion = $request->get('capMovilizacion');
        $actorexterno->id_actor = $request->get('id_actor');
        $actorexterno->id_organizacion = $request->get('id_organizacion');
        $actorexterno->id_cargoexterno = $request->get('id_cargoexterno');
        $actorexterno->save();
        return redirect("/organizacions/$actorexterno->id_organizacion/miembros");
    }

     public function editmiembros(Request $request, $id)
     {
        $actorExterno = Actorexterno::find($id);
        $actor = Actor::find( $actorExterno->id_actor);
        $actors = Actor::all();
        $organizacions = Organizacion::all();
        $cargoexternos = Cargoexterno::all();
        $actorexterno = Actorexterno::find($id);
        return view('organizacion.editmiembro')->with('actor',$actor)->with('actorexterno',$actorexterno)
        ->with('actors',$actors)->with('organizacions',$organizacions)->with('cargoexternos',$cargoexternos)->with('actorExterno',$actorExterno);
     }

     public function savemiembros(Request $request, $id)
     {
        $actor = new Actor();
        $actor->nombre = $request->get('nombre');
        $actor->celular = $request->get('celular');
        $actor->carnet = $request->get('carnet');
        $actor->sexo = $request->get('sexo');
        $actor->save();
        $actorexterno = new Actorexterno();
        $actorexterno->inclinacionPolitica = $request->get('inclinacionPolitica');
        $actorexterno->relacion = $request->get('relacion');
        $actorexterno->aliadoEstategico = $request->get('aliadoEstategico');
        $actorexterno->influencia = $request->get('influencia');
        $actorexterno->capMovilizacion = $request->get('capMovilizacion');
        $actorexterno->id_actor = $actor->id;
        $actorexterno->id_organizacion = $id;
        $actorexterno->id_cargoexterno = $request->get('id_cargoexterno');
        $actorexterno->save();
        return redirect("/organizacions/$id/miembros");
     }

     
    public function createmiembros($id)
    {
        $organizacion = Organizacion::find($id);
        $organizacions = Organizacion::all();
        $cargoexternos = Cargoexterno::all();
        return view('organizacion.createmiembro')->with('organizacions',$organizacions)->with('cargoexternos',$cargoexternos)->with('organizacion',$organizacion);
    }

    public function miembros($id)
    {
        $miembros = Actorexterno::where('id_organizacion',$id)->get();
        $organizacion = Organizacion::find($id);
        return view('organizacion.miembros')->with('organizacion',$organizacion)->with('miembros',$miembros);
    }

    public function index()
    {
        $tipos = Tipoorganizacion::all();
        $organizaciones = Organizacion::all();
        return view('organizacion.index')->with('organizaciones',$organizaciones)->with('tipos',$tipos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $organizacions = Organizacion::all();
        $tipos = Tipoorganizacion::all();
        $actores = Actor::all();
        return view('organizacion.create')->with('tipos',$tipos)->with('organizacions',$organizacions)
        ->with('actores',$actores);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $organizacion= new Organizacion();
        $organizacion->nombre = $request->get('nombre');
        $organizacion->sigla = $request->get('sigla');
        $organizacion->fundacion = $request->get('fundacion');
        $organizacion->direccion = $request->get('direccion');
        $organizacion->telefono = $request->get('telefono');
        $organizacion->id_cabeza = $request->get('id_cabeza');
        $organizacion->id_dependencia = $request->get('id_dependencia');
        $organizacion->id_tipoorganizacion = $request->get('id_tipoorganizacion');
        $organizacion->save();
        return redirect('/organizacions');
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
        $tipos = Tipoorganizacion::all();
        $organizacions = Organizacion::all();
        $organizacion = Organizacion::find($id);
        $actores = Actor::all();
        return view('organizacion.edit')->with('organizacion',$organizacion)->with('organizacions',$organizacions)
        ->with('tipos',$tipos)->with('actores',$actores);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $organizacion = Organizacion::find($id);
        $organizacion->nombre = $request->get('nombre');
        $organizacion->sigla = $request->get('sigla');
        $organizacion->fundacion = $request->get('fundacion');
        $organizacion->direccion = $request->get('direccion');
        $organizacion->telefono = $request->get('telefono');
        $organizacion->id_cabeza = $request->get('id_cabeza');
        $organizacion->id_dependencia = $request->get('id_dependencia');
        $organizacion->id_tipoorganizacion = $request->get('id_tipoorganizacion');
        $organizacion->save();

        return redirect('/organizacions');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $organizacion = Organizacion::find($id);
        $organizacion->delete();
        return redirect('/organizacions');
    }
}
