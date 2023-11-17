<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;

    public function actas(){
        return $this->belongsTo(Acta::class,'id_acta');
    }

    public function actorexternos(){
        return $this->belongsTo(Actorexterno::class,'id_actorexterno');
    }

    public function actorinternos(){
        return $this->belongsTo(Actorinterno::class,'id_actorinterno');
    }
}
