<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table = 'schools';
    protected $fillable = [
        'name_schools',
        'address_id',
        'school_code',
        'type_school_id',
    ];

    public function address(){
        return $this->belongsTo(Address::class);
    }

    public function type(){
        return $this->belongsTo(TypeSchool::class,'type_school_id');
    }




}
