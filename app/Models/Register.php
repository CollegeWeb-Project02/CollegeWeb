<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    protected $table = 'register';
    protected $primaryKey = 'id';
    protected $guarded = [];

    protected $fillable = [
        'name',
        'email',
        'password',

        'address',
        'achieve',
        'dob',
        'phone',

        'avatar',
        'level',
        'status',
        'class_id',
        'course_id',
        'description'
    ];

    public function courses(){
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    public function classes(){
        return $this->belongsTo(Classes::class, 'class_id', 'id');
    }
}
