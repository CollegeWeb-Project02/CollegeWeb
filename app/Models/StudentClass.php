<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    use HasFactory;

    protected $table = 'student_class';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function student(){
        return $this->hasMany(Student::class, 'student_id', 'id');
    }

    public function major(){
        return $this->belongsTo(Major::class, 'major_id', 'id');
    }
}
