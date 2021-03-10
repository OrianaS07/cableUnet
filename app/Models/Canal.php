<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Canal extends Model
{
    use HasFactory;

    //relacion muchos a muchos - programa
    public function programas()
    {
        return $this->belongsToMany('App\Models\Programa');
    }
    //relacion muchos a muchos - Plan
    public function plans()
    {
        return $this->belongsToMany('App\Models\Plan');
    }
}
