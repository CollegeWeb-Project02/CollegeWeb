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
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    public function register(){
        return $this->hasMany(Register::class, 'classes_id', 'id');
    }

    public function user(){
        return $this->hasMany(User::class, 'classes_id', 'id');
    }
}
