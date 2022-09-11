<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BenchMark extends Model
{
    use HasFactory;

    protected $table = 'benchmark';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function major(){
        return $this->belongsTo(Major::class, 'major_id', 'id');
    }

    public function unit(){
        return $this->belongsTo(Unit::class, 'unit_id', 'id');
    }
}
