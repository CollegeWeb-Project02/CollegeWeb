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

    public function classes(){
        return $this->hasMany(Classes::class, 'course_id', 'id');
    }

    public function blog(){
        return $this->hasMany(Blog::class, 'course_id', 'id');
    }

    public function subject(){
        return $this->belongsTo(Subject::class, 'subject_id', 'id');
    }

    public function register(){
        return $this->hasMany(Register::class, 'course_id', 'id');
    }

    public function user(){
        return $this->hasMany(User::class, 'course_id', 'id');
    }

    public function feedback(){
        return $this->hasMany(Feedback::class,'course_id', 'id');
    }
}
