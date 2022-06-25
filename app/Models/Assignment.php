<?php

namespace App\Models;

use App\Models\User;
use App\Models\Topic;
use App\Models\AssignmentAttachment;
use App\Models\AssignmentSubmission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Assignment extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with=['assignmentAttachment','user','assignmentSubmission','stars'];
    public function classroomPost()
    {
        return $this->belongsTo(ClassroomPost::class, 'post_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'added_by');
    }
    public function topic()
    {
        return $this->belongsTo(Topic::class, 'topic_id');
    }
    public function assignmentAttachment()
    {
        return $this->hasMany(AssignmentAttachment::class, 'assignment_id');
    }
    public function assignmentSubmission()
    {
        return $this->hasMany(AssignmentSubmission::class, 'assignment_id');
    }
    public function stars()
    {
        return $this->hasMany(ClassroomStar::class, 'assignment_id');
    }
}
