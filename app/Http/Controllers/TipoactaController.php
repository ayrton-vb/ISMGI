<?php

namespace App\Http\Controllers;

use App\Models\Tipoacta;
use Illuminate\Http\Request;

class TipoactaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipoactas = Tipoacta::all();
        return view('tipoacta.index')->with('tipoactas',$tipoactas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tipoacta.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tipoacta = new Tipoacta();
        $tipoacta->nombre = $request->get('nombre');
        $tipoacta->save();
        return redirect('/tipoactas');
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
        $tipoacta = Tipoacta::find($id);
        return view('tipoacta.edit')->with('tipoacta',$tipoacta);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tipoacta = Tipoacta::find($id);
        $tipoacta->nombre = $request->get('nombre');
        $tipoacta->save();
        return redirect('/tipoactas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tipoacta = Tipoacta::find($id);
        $tipoacta->delete();
        return redirect('/tipoactas');
    }
}
