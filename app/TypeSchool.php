<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeSchool extends Model
{
    protected $table = "type_schools";
   /* protected $fillable = [
        'type_en',
        'type_ar',
    ];*/

    public function school(){
       return $this->hasMany(School::class);
    }
}
