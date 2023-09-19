<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Codec\OrderedTimeCodec;

class Tipoorganizacion extends Model
{
    use HasFactory;

    public function Organizaciones(){
        return $this->hasMany(Organizacion::class,'id');
    }

}
