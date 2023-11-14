<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problematica extends Model
{
    use HasFactory;

    public function actas(){
        return $this->hasMany(Acta::class,'id');
    }
}
