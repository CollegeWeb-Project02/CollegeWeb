<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_Course extends Model
{
    use HasFactory;

    protected $table = 'stu_course';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function student(){
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    public function course(){
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }
}
