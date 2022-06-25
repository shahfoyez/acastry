<?php

namespace App\Models;

use App\Models\Topic;
use App\Models\ClassroomPost;
use App\Models\ClassroomStar;
use App\Models\ClassroomMember;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classroom extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $with=['user','classroomPost','topic','classroomIndustryWork','classroomMembers'];
    protected $with=['user','classroomPost','topic','classroomIndustryWork'];

    public function user(){
        return $this->belongsTo(User::class, 'added_by');
    }
    public function classroomMembers(){
        return $this->hasMany(ClassroomMember::class, 'classroom_id');
    }
    public function classroomPost(){
        return $this->hasMany(ClassroomPost::class, 'classroom_id')->orderBy('created_at', 'desc');
    }
    public function topic(){
        return $this->hasMany(Topic::class, 'classroom_id');
    }
    public function classroomIndustryWork(){
        return $this->hasMany(ClassroomIndustryWork::class, 'classroom_id')->orderBy('created_at', 'desc');
    }
    public function classroomStar(){
        return $this->hasMany(ClassroomStar::class, 'classroom_id');
    }

    // public function post(){
    //     return $this->hasMany(Post::class, 'classroom_id')->orderBy('created_at', 'desc');
    // }
    // public function classIndustryWork(){
    //     return $this->hasMany(ClassIndustryWork::class, 'classroom_id');
    // }
}
