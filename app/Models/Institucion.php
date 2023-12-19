<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    use HasFactory;

    public function actorinstitucionals(){
        return $this->hasMany(Actorinstitucional::class,'id');
    }
    
}
