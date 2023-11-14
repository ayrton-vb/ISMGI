<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actorinterno extends Model
{
    use HasFactory;

    public function actors(){
        return $this->belongsTo(Actor::class,'id_actor');
    }

    public function cargointernos(){
        return $this->belongsTo(Cargointerno::class,'id_cargo');
    }

    public function secretarias(){
        return $this->belongsTo(Secretaria::class,'id_secretaria');
    }

    public function direccions(){
        return $this->belongsTo(Direccion::class,'id_direccion');
    }

    public function unidads(){
        return $this->belongsTo(Unidad::class,'id_unidad');
    }
}
