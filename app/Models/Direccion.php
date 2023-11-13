<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;

    public function secretaria(){
        return $this->belongsTo(Secretaria::class,'id_secretaria');
    }
    public function unidades(){
        return $this->hasMany(Organizacion::class,'id');
    }

}
