<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $table = 'exams';
    protected $fillable = [
        'subject_id',
        'school_id',
        'room_id',
        'type_id',
        'student_id',
        'result',
    ];

    public function subject(){
        return $this->belongsTo(Subject::class,'subject_id');
    }
    public function school(){
        return $this->belongsTo(School::class,'school_id');
    }
    public function room(){
        return $this->belongsTo(Room::class,'room_id');
    }
    public function typeExam(){
        return $this->belongsTo(Exam_type::class,'type_id')->select([
           'id',
            'type_en',
            'type_ar',
        ]);
    }
    public function student(){
        return $this->belongsTo(Student::class,'student_id');
    }


}
