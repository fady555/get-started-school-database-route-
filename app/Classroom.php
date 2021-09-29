<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $table = 'classrooms';
    protected $fillable = [
        'name_en',
        'name_en',
    ];

    public function room(){
        return $this->hasMany(Room::class);
    }

}
