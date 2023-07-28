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

}
