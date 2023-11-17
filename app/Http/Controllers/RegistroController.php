<?php

namespace App\Http\Controllers;

use App\Models\Acta;
use App\Models\Actorexterno;
use App\Models\Actorinterno;
use App\Models\Registro;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registros = Registro::all();
        return view('registro.index')->with('registros',$registros);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $actas = Acta::all();
        $actorexternos = Actorexterno::all();
        $actorinternos = Actorinterno::all();
        return view('registro.create')->with('actas',$actas)->with('actorexternos',$actorexternos)
        ->with('actorinternos',$actorinternos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $registros = new Registro();
        $registros->id_acta = $request->get('id_acta');
        $registros->id_actorexterno = $request->get('id_actorexterno');
        $registros->id_actorinterno = $request->get('id_actorinterno');
        $registros->save();
        return redirect('/registros');
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
        $registro = Registro::find($id);
        $actas = Acta::all();
        $actorexternos = Actorexterno::all();
        $actorinternos = Actorinterno::all();
        return view('registro.edit')->with('registro',$registro)->with('actas',$actas)
        ->with('actorexternos',$actorexternos)->with('actorinternos',$actorinternos);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $registro = Registro::find($id);
        $registro->id_acta = $request->get('id_acta');
        $registro->id_actorexterno = $request->get('id_actorexterno');
        $registro->id_actorinterno = $request->get('id_actorinterno');
        $registro->save();
        return redirect('/registros');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $registro = Registro::find($id);
        $registro->delete();
        return redirect('/registros');
    }
}
