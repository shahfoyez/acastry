<?php

namespace App\Models;

use App\Models\User;
use App\Models\Classroom;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClassroomMember extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $with=['user','classroom'];
    protected $with=['user','classroomStars','classroom'];

    public function user(){
        return $this->belongsTo(User::class, 'member_id');
    }
    public function classroom(){
        return $this->belongsTo(Classroom::class, 'classroom_id');
    }
    public function classroomStars(){
        return $this->hasMany(ClassroomStar::class, 'star_id');
    }
}
