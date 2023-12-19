<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actorinstitucional extends Model
{
    use HasFactory;

    public function actors(){
        return $this->belongsTo(Actor::class,'id_actor');
    }

    public function cargoinstitucionals(){
        return $this->belongsTo(Cargoinstitucional::class,'id_cargoinstitucional');
    }

    public function institucions(){
        return $this->belongsTo(Institucion::class,'id_institucion');
    }


}
