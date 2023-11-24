<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;
    public function actorexternos(){
        return $this->hasMany(Actorexterno::class,'id');
    }

    public function organizaciones(){
        return $this->hasMany(Organizacion::class,'id');
    }

    public function actorinterno(){
        return $this->hasMany(Actorinterno::class,'id');
    }
    
    public function historialexternos(){
        return $this->hasMany(Historialactorexterno::class,'id');
    }

}
