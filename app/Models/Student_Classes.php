<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_Classes extends Model
{
    use HasFactory;

    protected $table = 'stu_classes';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function student(){
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    public function classes(){
        return $this->belongsTo(Classes::class, 'classes_id', 'id');
    }
}
