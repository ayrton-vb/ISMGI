<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargointerno extends Model
{
    use HasFactory;

    public function actorinterno(){
        return $this->hasMany(Actorinterno::class,'id');
    }
}
