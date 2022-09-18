<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comment';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function blog(){
        return $this->hasMany(Blog::class, 'blog_id', 'id');
    }
}
