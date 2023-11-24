<?php

namespace App\Http\Controllers;

use App\Models\Actorexterno;
use App\Models\Actorinterno;
use App\Models\Acta;
use App\Models\Historialactorexterno;
use App\Models\Problematica;
use App\Models\Registro;
use App\Models\Tipoacta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Bd2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function registrosByActaGuardar (Request $request)
     {
        $registros = new Registro();
        $registros->id_acta = $request->get('id_acta');
        $registros->id_actorexterno = $request->get('id_actorexterno');
        $registros->id_historialactorexterno = $request->get('id_historialactorexterno');
        $registros->id_actorinterno = $request->get('id_actorinterno');
        $registros->save();
        return redirect("/acta/$registros->id_acta/registros");
     }

     public function registrosByActaCrear($id)
     {
        $acta = Acta::find($id);
        $actorexternos = Actorexterno::all();
        $actorinternos = Actorinterno::all();
        $historialexternos = Historialactorexterno::all();
        return view('bd2.crearregistro')->with('acta',$acta)->with('actorexternos',$actorexternos)
        ->with('actorinternos',$actorinternos)->with('historialexternos',$historialexternos);
     }


    public function registrosByActa($id)
    {
        $registros = Registro::where('id_acta',$id)->get();
        return view('bd2.registro')->with('registros',$registros)->with('id',$id);
    }

    public function index()
    {
        $actas = Acta::all();
        $registros = Registro::all(); 
        return view('bd2.index')->with('actas',$actas)->with('registros',$registros);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipoactas = Tipoacta::all();
        $problematicas = Problematica::all();
        return view('bd2.create')->with('tipoactas',$tipoactas)->with('problematicas',$problematicas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
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
  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $registro = Registro::find($id);
        $registro->delete();
        return redirect("/acta/$registro->id_acta/registros");
    }
}
