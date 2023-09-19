<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actorexterno;
use App\Models\Organizacion;

class PDFcontroller extends Controller
{
    public function PDF($id){

        $actoresByOrganizacion = Actorexterno::where('id_organizacion',$id)->get();
        $organizacion = Organizacion::find($id);

        $pdf = \PDF::loadView('pdf.prueba',compact('actoresByOrganizacion','organizacion'));

        return $pdf->stream('pdf.prueba.pdf');

        // return view('prueba')->with('actoresByOrganizacion',$actoresByOrganizacion)->with('organizacion',$organizacion);

    }

    public function PDF2($id){

        $actoresByOrganizacion = Actorexterno::where('id_organizacion',$id)->get();
        $organizacion = Organizacion::find($id);

        $pdf = \PDF::loadView('pdf.prueba2',compact('actoresByOrganizacion','organizacion'));

        return $pdf->stream('pdf.prueba2.pdf');

        // return view('prueba')->with('actoresByOrganizacion',$actoresByOrganizacion)->with('organizacion',$organizacion);

    }
}