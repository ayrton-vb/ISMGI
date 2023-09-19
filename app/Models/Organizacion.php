<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizacion extends Model
{
    use HasFactory;
    public function actorexternos(){
        return $this->hasMany(Actorexterno::class,'id');
    }

    public function organizacionDependiente(){
        return $this->belongsTo(Organizacion::class,'id_dependencia');
    }
    public function tipos(){
        return $this->belongsTo(Tipoorganizacion::class,'id_tipoorganizacion');
    }
}
