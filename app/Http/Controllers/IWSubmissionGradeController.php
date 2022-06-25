<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IWSubmissionGrade;
use App\Models\IndustryWorkSubmission;
use Illuminate\Support\Facades\Redirect;

class IWSubmissionGradeController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(IndustryWorkSubmission $industryWorkSubmission)
    {
        // dd($industryWorkSubmission);
        // $industryWorkPoints= $industryWorkSubmission->industryWork->points;
        $attributes=request()->validate([
            'points'=> 'required | lte: 100'
        ]);
        if(auth()->user()->role== 'teacher'){
            if($industryWorkSubmission->grade){
                if($industryWorkSubmission->grade->t_grade){
                    IWSubmissionGrade::where('iws_id', $industryWorkSubmission->id)->update([
                        't_grade'=> request()->input('points'),
                        'tg_updated_by' => auth()->user()->id
                    ]);
                    return Redirect::back()->with('message', 'Teacher grade updated!');
                }else{
                    IWSubmissionGrade::where('iws_id', $industryWorkSubmission->id)->update([
                        't_grade'=> request()->input('points'),
                        'tg_added_by' => auth()->user()->id
                    ]);
                    return Redirect::back()->with('message', 'Teacher Grade Submitted!');
                }
            }else{
                $grade= IWSubmissionGrade::create([
                    't_grade' => request()->input('points'),
                    'iws_id'=> $industryWorkSubmission->id,
                    'tg_added_by' => auth()->user()->id
                ]);
                return Redirect::back()->with('message', 'Teacher Grade Submitted!');
            }
        }elseif(auth()->user()->role== 'industry'){
            if($industryWorkSubmission->grade){
                if($industryWorkSubmission->grade->i_grade){
                    IWSubmissionGrade::where('iws_id',$industryWorkSubmission->id)->update([
                        'i_grade'=> request()->input('points')
                    ]);
                    return Redirect::back()->with('message', 'Industry Grade Updated!');
                }else{
                    IWSubmissionGrade::where('iws_id',$industryWorkSubmission->id)->update([
                        'i_grade'=> request()->input('points')
                    ]);
                    return Redirect::back()->with('message', 'Industry Grade Submitted!');
                }
            }else{
                $grade= IWSubmissionGrade::create([
                    'i_grade' => request()->input('points'),
                    'iws_id'=> $industryWorkSubmission->id
                ]);
                return Redirect::back()->with('message', 'Industry Grade Submitted!');
            }
        }
        // if($industryWorkSubmission->grade){
        //     AssignmentSubmissionGrade::where('assignment_submission_id',$assignmentSubmission->id)->update([
        //         'points'=> request()->input('points')
        //     ]);
        //     return Redirect::back()->with('grade', 'Grade Updated!');
        // }else{
        //     $grade= AssignmentSubmissionGrade::create([
        //         'points' => request()->input('points'),
        //         'assignment_submission_id'=> $assignmentSubmission->id,
        //         'added_by' => auth()->user()->id
        //     ]);
        //     return Redirect::back()->with('grade', 'Submission Graded!');
        // }
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
