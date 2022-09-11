<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MajorImage extends Model
{
    use HasFactory;

    protected $table = 'major_image';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function major(){
        return $this->belongsTo(Major::class, 'major_id', 'id');
    }
}
