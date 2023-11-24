<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historialactorexterno extends Model
{
    use HasFactory;

    public function actors(){
        return $this->belongsTo(Actor::class,'id_actor');
    }

    public function cargoexternos(){
        return $this->belongsTo(Cargoexterno::class,'id_cargoexterno');
    }

    public function organizacions(){
        return $this->belongsTo(Organizacion::class,'id_organizacion');
    }
}
