<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    use HasFactory;
    
    //relacion muchos a muchos - canal
    public function canales()
    {
        return $this->belongsToMany('App\Models\Canal');
    }
}
