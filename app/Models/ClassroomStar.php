<?php

namespace App\Models;

use App\Models\User;
use App\Models\Classroom;
use App\Models\Assignment;
use App\Models\ClassroomMember;
use App\Models\ClassroomIndustryWork;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClassroomStar extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with=[];
    public function user(){
        return $this->belongsTo(User::class, 'added_by');
    }
    public function assignment(){
        return $this->belongsTo(Assignment::class, 'assignment_id');
    }
    public function classroomIndustryWork(){
        return $this->belongsTo(ClassroomIndustryWork::class, 'ciw_id');
    }
    public function classroom(){
        return $this->belongsTo(Classroom::class, 'classroom_id');
    }
    public function classroomMember(){
        return $this->belongsTo(ClassroomMember::class, 'star_id');
    }
}
