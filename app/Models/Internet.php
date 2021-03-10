<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internet extends Model
{
    use HasFactory;

    //relacion uno a muchos
    public function paquetes(){
        return $this->hasMany('App\Models\Paquete');
    }
}
