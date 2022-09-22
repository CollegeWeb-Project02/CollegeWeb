<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $table = 'subject';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function course(){
        return $this->hasMany(Course::class, 'course_id', 'id');
    }
}
