<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City_translation extends Model
{

    protected $table = 'city_translations';

    public function city(){
        return $this->belongsTo(City::class);
    }



}
