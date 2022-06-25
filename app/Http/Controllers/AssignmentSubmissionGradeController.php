<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;
use App\Models\AssignmentSubmission;
use Illuminate\Support\Facades\Redirect;
use App\Models\AssignmentSubmissionGrade;

class AssignmentSubmissionGradeController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(AssignmentSubmission $assignmentSubmission)
    {
        // dd($assignmentSubmission);
        $assignmentPoints= $assignmentSubmission->assignment->points;
        $attributes=request()->validate([
            'points'=> 'required | lte: 100'
        ]);
        if($assignmentSubmission->grade){
            AssignmentSubmissionGrade::where('assignment_submission_id',$assignmentSubmission->id)->update([
                'points'=> request()->input('points')
            ]);
            return Redirect::back()->with('grade', 'Grade Updated!');
        }else{
            $grade= AssignmentSubmissionGrade::create([
                'points' => request()->input('points'),
                'assignment_submission_id'=> $assignmentSubmission->id,
                'added_by' => auth()->user()->id
            ]);
            return Redirect::back()->with('grade', 'Submission Graded!');
        }
    }

    public function show()
    {
        //
    }

    public function edit()
    {
        //
    }

    public function update()
    {
        //
    }

    public function destroy()
    {
        //
    }
}
