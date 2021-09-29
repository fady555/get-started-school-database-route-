<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
  protected $table = 'rooms';

  protected  $fillable = [
        'name',
        'classroom_id',
        'school_id',
  ];

  public function classroom(){
      return $this->belongsTo(Classroom::class);
  }
    public function school(){
        return $this->belongsTo(School::class);
    }

}
