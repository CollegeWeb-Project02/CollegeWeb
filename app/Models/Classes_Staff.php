<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes_Staff extends Model
{
    use HasFactory;

    protected $table = 'classes_staff';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function classes(){
        return $this->belongsTo(Classes::class, 'classes_id', 'id');
    }

    public function staff(){
        return $this->belongsTo(Staff::class, 'staff_id', 'id');
    }
}
