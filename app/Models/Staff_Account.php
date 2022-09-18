<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff_Account extends Model
{
    use HasFactory;

    protected $table = 'staff_account';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function staff(){
        return $this->belongsTo(Staff::class, 'staff_id', 'id');
    }
}
