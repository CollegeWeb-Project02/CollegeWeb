<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;

    protected $table = 'major';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function studentClass(){
        return $this->hasMany(StudentClass::class, 'student_class_id', 'id');
    }

    public function majorImage(){
        return $this->hasMany(MajorImage::class, 'major_id', 'id');
    }

    public function benchmark(){
        return $this->belongsTo(BenchMark::class, 'major_id', 'id');
    }

    public function unit(){
        return $this->belongsTo(Unit::class, 'unit_id', 'id');
    }

    public function register(){
        return $this->belongsTo(Register::class, 'register_id', 'id');
    }


}
