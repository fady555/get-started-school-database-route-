<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table='cities';



    public function trans(){
        return $this->hasMany(City_translation::class);
    }

    public function state(){
        return $this->belongsTo(State::class);
    }
}
