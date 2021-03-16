<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solicitudCambio extends Model
{
    use HasFactory;

    //relacion uno a uno -user
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
