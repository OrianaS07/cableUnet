<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internet extends Model
{
    use HasFactory;

    //habilitamos asignacion masiva
    protected $fillable = ['nombre','velocidad','precio'];


    //relacion uno a muchos
    public function paquetes(){
        return $this->hasMany('App\Models\Paquete');
    }

    public function nombre()
    {
        return 'internet';
    }
}
