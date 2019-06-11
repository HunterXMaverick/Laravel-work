<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable = [
        'name', 
        'phone',
    ];
    /*relacion de varios a varios
    Un proveedor tiene varios productos */

    public function products(){
        return $this->belongsToMany('App\Produt');
    }
}
