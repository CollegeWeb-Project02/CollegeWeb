<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes_user extends Model
{
    use HasFactory;

    protected $table = 'classes_user';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function classes(){
        return $this->belongsTo(Classes::class, 'classes_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
