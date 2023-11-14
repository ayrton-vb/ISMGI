<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acta extends Model
{
    use HasFactory;

    public function tipoactas(){
        return $this->belongsTo(Tipoacta::class,'id_tipoacta');
    }

    public function problematicas(){
        return $this->belongsTo(Problematica::class,'id_problematica');
    }
}
