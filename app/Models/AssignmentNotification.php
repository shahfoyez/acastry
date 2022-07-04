<?php

namespace App\Models;

use App\Models\User;
use App\Models\Classroom;
use App\Models\ClassroomMember;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AssignmentNotification extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with=[];

    public function user(){
        return $this->belongsTo(User::class, 'added_by');
    }
    public function classroomMember(){
        return $this->belongsTo(ClassroomMember::class, 'classroom_id');
    }
    public function classroom(){
        return $this->belongsTo(Classroom::class, 'classroom_id');
    }
}
