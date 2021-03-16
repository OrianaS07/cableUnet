<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $fillable = [
        'mes', 'year', 'user_id', 'paquete_id', 'monto',
    ];

    //relacion uno a muchos -user (inversa)
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //relacion uno a muchos -user (inversa)
    public function paquete(){
        return $this->belongsTo('App\Models\Paquete');
    }
}
