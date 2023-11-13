<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    use HasFactory;
    public function direccion(){
        return $this->belongsTo(Direccion::class,'id_direccion');
    }
}
