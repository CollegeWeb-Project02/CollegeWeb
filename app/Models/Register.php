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
        'course_id',
    ];

    public function courses(){
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }
}
