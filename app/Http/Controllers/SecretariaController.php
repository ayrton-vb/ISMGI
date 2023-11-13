<?php

namespace App\Http\Controllers;

use App\Models\Secretaria;
use Illuminate\Http\Request;

class SecretariaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $secretarias = Secretaria::all();
        return view('secretaria.index')->with('secretarias',$secretarias);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('secretaria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $secretaria = new Secretaria();
        $secretaria->nombre = $request->get('nombre');
        $secretaria->sigla = $request->get('sigla');
        $secretaria->save();
        return redirect('/secretarias');
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
        $secretaria = Secretaria::find($id);
        return view('secretaria.edit')->with('secretaria',$secretaria);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $secretaria = Secretaria::find($id);
        $secretaria->nombre = $request->get('nombre');
        $secretaria->sigla = $request->get('sigla');
        $secretaria->save();
        return redirect('/secretarias');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $secretaria = Secretaria::find($id);
        $secretaria->delete();
        return redirect('/secretarias');
    }
}
