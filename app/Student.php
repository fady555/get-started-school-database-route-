<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   protected $table = 'students';
   protected $fillable = [
        'name_en',
        'name_ar',
        'number_id',
        'gender',
        'data_of_birth',
        'avatar',
        'parent_id',
        'file',
        'room_id',
        'status',
        'address_id',
   ];

   public function parent(){
       return $this->belongsTo(ParentData::class,'parent_id','id');
   }

    public function address(){
        return $this->belongsTo(Address::class,'address_id','id');
    }
    public function room(){
        return $this->belongsTo(Room::class,'room_id','id');
    }
}
