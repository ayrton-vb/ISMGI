<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secretaria extends Model
{
    use HasFactory;

    public function direcciones(){
        return $this->hasMany(Direccion::class,'id');
    }

    public function actorinterno(){
        return $this->hasMany(Actorinterno::class,'id');
    }
    
}
