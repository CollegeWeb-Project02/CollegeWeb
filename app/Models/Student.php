<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'blogs';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function studentClass(){
        return $this->belongsTo(StudentClass::class, 'student_class_id', 'id');
    }

    public function major(){
        return $this->belongsTo(Major::class, 'major_id', 'id');
    }
}
