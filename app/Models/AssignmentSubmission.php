<?php

namespace App\Models;

use App\Models\Assignment;
use Illuminate\Database\Eloquent\Model;
use App\Models\AssignmentSubmissionGrade;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AssignmentSubmission extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with=['assignmentSubmissionAttachment', 'grade'];
    public function assignment()
    {
        return $this->belongsTo(Assignment::class, 'assignment_id');
    }
    public function assignmentSubmissionAttachment(){
        return $this->hasMany(AssignmentSubmissionAttachment::class, 'as_id');
    }
    public function grade(){
        return $this->hasOne(AssignmentSubmissionGrade::class, 'assignment_submission_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'added_by');
    }

}
