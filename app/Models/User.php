<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',

        'address',
        'achieve',
        'dob',
        'phone',

        'avatar',
        'level',
        'status',
        'class_id',
        'course_id',
        'description'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

//    protected $table = 'user';
//    protected $primaryKey = 'id';
//    protected $guarded = [];
//
//    public function userCourse(){
//        return $this->hasMany(User_Course::class, 'user_id', 'id');
//    }
//
//    public function classesUser(){
//        return $this->hasMany(Classes_user::class, 'user_id', 'id');
//    }
//
//    public function feedback(){
//        return $this->hasMany(Feedback::class, 'user_id', 'id');
//    }
}
