<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParentData extends Model
{
    protected $table = 'parents';

    protected $fillable = [
        'full_name_en',
        'full_name_ar',
        'id_card',
        'img_card',
        'phone_number_1',
        'phone_number_2',
        'jop',
    ];

    public function students(){
        return $this->hasMany(Student::class,'parent_id');
    }




}
