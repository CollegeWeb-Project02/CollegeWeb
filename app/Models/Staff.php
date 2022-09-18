<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staff';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function staffCourse(){
        return $this->hasMany(Staff_Course::class, 'staff_id', 'id');
    }

    public function classesStaff(){
        return $this->hasMany(Classes_Staff::class, 'staff_id', 'id');
    }
}
