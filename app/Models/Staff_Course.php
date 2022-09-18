<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff_Course extends Model
{
    use HasFactory;

    protected $table = 'staff_course';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function staff(){
        return $this->belongsTo(Staff::class, 'staff_id', 'id');
    }

    public function course(){
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }
}
