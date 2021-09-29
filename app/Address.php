<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';
    protected $fillable =[
            'city_id',
            'description_en',
            'description_ar',
    ];


    public function city(){
        return $this->belongsTo(City::class);
    }
}
