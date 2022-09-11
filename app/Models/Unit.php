<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $table = 'blogs';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function benchmark(){
        return $this->hasMany(BenchMark::class, 'unit_id', 'id');
    }

    public function major(){
        return $this->belongsTo(Major::class, 'major_id', 'id');
    }

    public function register(){
        return $this->belongsTo(Register::class, 'register_id', 'id');
    }
}
