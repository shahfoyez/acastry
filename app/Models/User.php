<?php

namespace App\Models;

use App\Models\Classroom;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = [];
    // protected $with = ['classroomMember'];

    public function classroomMember(){
        return $this->hasMany(Classroom::class, 'added_by');
    }
    public function classroom(){
        return $this->hasMany(Classroom::class, 'added_by');
    }
    // public function post(){
    //     return $this->hasMany(Post::class, 'user_id');
    // }

    //Eloquent Mutator
    public function setPasswordAttribute($password)
    {
        $this->attributes['password']= bcrypt($password);
    }

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
