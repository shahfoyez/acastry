<?php

namespace App\Models;

use App\Models\ClassroomMember;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\ClassroomPost;

class Classroom extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with=['user','classroomPost'];
    public function user(){
        return $this->belongsTo(User::class, 'added_by');
    }
    public function classroomMember(){
        return $this->hasMany(ClassroomMember::class, 'classroom_id');
    }
    public function classroomPost(){
        return $this->hasMany(ClassroomPost::class, 'classroom_id');
    }
    // public function post(){
    //     return $this->hasMany(Post::class, 'classroom_id')->orderBy('created_at', 'desc');
    // }
    // public function classIndustryWork(){
    //     return $this->hasMany(ClassIndustryWork::class, 'classroom_id');
    // }
}
