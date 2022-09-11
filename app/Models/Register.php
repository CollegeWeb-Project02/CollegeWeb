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

    public function student_register(){
        return $this->belongsTo(StudentRegister::class, 'student_register_id', 'id');
    }

    public function unit(){
        return $this->belongsTo(Unit::class, 'unit_id', 'id');
    }

    public function major(){
        return $this->hasMany(Major::class, 'major_id', 'id');
    }

    public function status(){
        return $this->hasMany(Status::class, 'status_id', 'id');
    }
}
