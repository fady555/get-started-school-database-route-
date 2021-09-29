<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';
    protected $fillable = [
        'name_en',
        'name_ar',
        'number_id_card',
        'gender',
        'data_of_birth',
        'avatar',
        'degree',
        'address_id',
        'number',
        'email',
    ];

    public function address(){
        return $this->belongsTo(Address::class);
    }


}
