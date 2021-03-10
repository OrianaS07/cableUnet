<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cable extends Model
{
    use HasFactory;

    //relacion uno a uno - plan
    public function plan(){
        return $this->hasOne('App\Models\Plan');
    }
}
