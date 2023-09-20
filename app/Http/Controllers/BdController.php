<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Actorexterno;
use App\Models\Organizacion;
use Illuminate\Http\Request;

class BdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function orgdependiente($id)
    {
        $OrganizacionDependientes = Organizacion::where('id_dependencia',$id)->get();

        return view('bd.index2')->with('OrganizacionDependientes',$OrganizacionDependientes);
    }

    public function actorByOrganizacionFejuve($id)
    {
        
        $organizacionesDependientes = Organizacion::where('id_dependencia',$id)->get();

        $actoresExterno = Actorexterno::all();

        $actoresByOrganizacion = Actorexterno::where('id_organizacion',$id)->get();
        $organizacion = Organizacion::find($id);

        return view('bd.show2')->with('actoresByOrganizacion',$actoresByOrganizacion)->with('organizacion',$organizacion)
        ->with('organizacionesDependientes',$organizacionesDependientes)->with('actoresExterno',$actoresExterno);
        
    }

    public function actorByOrganizacion($id)
    {
        $actoresByOrganizacion = Actorexterno::where('id_organizacion',$id)->get();
        $organizacion = Organizacion::find($id);

        return view('bd.show')->with('actoresByOrganizacion',$actoresByOrganizacion)->with('organizacion',$organizacion);
    }

    public function index()
    {
        $organizacions = Organizacion::all();
        $organizacionsMatrizes = Organizacion::where('id_tipoorganizacion',"1")->get();
        $organizacionsIndependientes = Organizacion::where('id_tipoorganizacion',"2")->get();
        return view('bd.index')->with('organizacions',$organizacions)->with('organizacionsMatrizes',$organizacionsMatrizes)
        ->with('organizacionsIndependientes',$organizacionsIndependientes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bd.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return redirect('/bds');
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
        return view('bd.edit');
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return redirect('/bds');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return redirect('/bds');
    }
}
