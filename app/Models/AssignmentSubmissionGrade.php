<?php

namespace App\Models;

use App\Models\AssignmentSubmission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AssignmentSubmissionGrade extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function assignmentSubmission()
    {
        return $this->belongsTo(AssignmentSubmission::class, 'assignment_submission_id');
    }
}
