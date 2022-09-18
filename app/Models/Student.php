<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'student';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function point(){
        return $this->hasMany(Point::class, 'student_id', 'id');
    }

    public function feedback(){
        return $this->hasMany(Feedback::class, 'student_id', 'id');
    }

    public function studentCourse(){
        return $this->hasMany(Student_Course::class, 'student_id', 'id');
    }

    public function studentClasses(){
        return $this->hasMany(Student_Classes::class, 'student_id', 'id');
    }
}
