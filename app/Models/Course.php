<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'course';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function studentCourse(){
        return $this->hasMany(Student_Course::class, 'course_id', 'id');
    }

    public function classes(){
        return $this->hasMany(Classes::class, 'course_id', 'id');
    }

    public function blog(){
        return $this->hasMany(Blog::class, 'course_id', 'id');
    }
}
