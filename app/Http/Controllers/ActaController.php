<?php

namespace App\Http\Controllers;

use App\Models\Acta;
use App\Models\Problematica;
use App\Models\Tipoacta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actas = Acta::all();
        return view('acta.index')->with('actas',$actas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipoactas = Tipoacta::all();
        $problematicas = Problematica::all();
        return view('acta.create')->with('tipoactas',$tipoactas)->with('problematicas',$problematicas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $acta = new Acta();
        $acta->tema = $request->get('tema');
        $acta->lugar = $request->get('lugar');
        $acta->hora = $request->get('hora');
        $acta->fecha = $request->get('fecha');
        $acta->relevancia = $request->get('relevancia');
        $acta->scan = $request->file('scan');
        $acta->foto = $request->file('foto');

            if ($acta->scan) {
                $archivo=$request->file('scan');
                $archivo->move(public_path().'/Archivos/',$archivo->getClientOriginalName());
                $acta->scan=$archivo->getClientOriginalName();
            }else {
                
            };
            if ($acta->foto) {
                $archivo=$request->file('foto');
                $archivo->move(public_path().'/Archivos/',$archivo->getClientOriginalName());
                $acta->foto=$archivo->getClientOriginalName();
            }else {
                
            };
 
       

        $acta->id_tipoacta = $request->get('id_tipoacta');
        $acta->id_problematica = $request->get('id_problematica');
        $acta->save();
        return redirect('/actas');
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
        $acta = Acta::find($id);
        $tipoactas = Tipoacta::all();
        $problematicas = Problematica::all();

        return view('acta.edit')->with('acta',$acta)->with('tipoactas',$tipoactas)->with('problematicas',$problematicas);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $acta = Acta::find($id);
        $acta->tema = $request->get('tema');
        $acta->lugar = $request->get('lugar');
        $acta->hora = $request->get('hora');
        $acta->fecha = $request->get('fecha');
        $acta->relevancia = $request->get('relevancia');
        $acta->scan = $request->file('scan');
        $acta->foto = $request->file('foto');

            if ($acta->scan) {
                $archivo=$request->file('scan');
                $archivo->move(public_path().'/Archivos/',$archivo->getClientOriginalName());
                $acta->scan=$archivo->getClientOriginalName();
            }else {
                $acta->scan = $request->get('scan2');
            };

            if ($acta->foto) {
                $archivo=$request->file('foto');
                $archivo->move(public_path().'/Archivos/',$archivo->getClientOriginalName());
                $acta->foto=$archivo->getClientOriginalName();
            }else {
                $acta->foto = $request->get('foto2');
            };

        $acta->id_tipoacta = $request->get('id_tipoacta');
        $acta->id_problematica = $request->get('id_problematica');
        $acta->save();
        
        return redirect('/actas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $acta = Acta::find($id);
        $acta->delete();
        return redirect('/actas');
    }
}
