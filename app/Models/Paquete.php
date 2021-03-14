<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Paquete extends Model
{
    use HasFactory;

    protected $guarded = ['id','fecha','created_at','update_at'];

    //relacion uno a muchos (inversa)
    public function internet(){
        return $this->belongsTo('App\Models\Internet');
    }
    
    //relacion uno a muchos (inversa)
    public function cable(){
        return $this->belongsTo('App\Models\Cable');
    }

    //relacion uno a muchos (inversa)
    public function telefonia(){
        return $this->belongsTo('App\Models\Telefonia');
    }

    //relacion uno a muchos -factura
    public function factura(){
        return $this->hasMany('App\Models\Factura');
    }
}
