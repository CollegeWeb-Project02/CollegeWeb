<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    protected $table = 'classes';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function course(){
        return $this->belongsTo(Course::class, 'classes_id', 'id');
    }

    public function classesStaff(){
        return $this->hasMany(Classes_Staff::class, 'classes_id', 'id');
    }

    public function studentClasses(){
        return $this->hasMany(Student_Classes::class, 'classes_id', 'id');
    }
}
