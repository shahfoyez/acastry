<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\IndustryWork;
use Illuminate\Http\Request;
use App\Models\ClassroomIndustryWork;
use App\Models\IndustryWorkSubmission;
use App\Models\IWSubmissionAttachment;

class IndustryWorkSubmissionController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(ClassroomIndustryWork $classroomIndustryWork)
    {
        // dd(request()->all());

        $industryWork = $classroomIndustryWork->iw_id;
        $classroom = $classroomIndustryWork->classroom_id;
        // dd($industryWork);
        $attributes=request()->validate([
            "files" => "required"
        ]);
        // if (request()->has('assignment')) {
        //     $pdfName='PDF_'.md5(date('d-m-Y')).'.'.request()->assignment->extension();
        //     // dd($pdfName);
        //     $AssignmentSubmission= AssignmentSubmission::create([
        //         'assignment_id'=> $assignment->id,
        //         'classroom_id'=>  $assignment->post->classroom_id,
        //         'post_id'=>  $assignment->post->id,
        //         'user_id'=> auth()->user()->id
        //     ]);

        //     $AssignmentAttachment = AssignmentAttachment::create([
        //         'submit_id'=> $AssignmentSubmission->id,
        //         'type'=>  'pdf',
        //         'path' => $pdfName
        //     ]);
        //     request()->assignment->move(public_path('uploads/classrooms/assignments'), $pdfName);
        // }
        // dd($assignment->classroomPost->classroom_id );
        if (request()->has('files')){
            $industryWorkSubmission= IndustryWorkSubmission::create([
                'iw_id'=> $industryWork,
                'ciw_id'=> $classroomIndustryWork->id,

                'classroom_id'=>   $classroom,
                'added_by'=> auth()->user()->id,
                'status' => 'original'
            ]);

            foreach(request()->file('files') as $key => $file)
            {
                $fileName='FILE_'.md5(date('d-m-Y H:i:s')).$file->getClientOriginalName();
                $file->move(public_path('uploads/industrySubmissionAttachments'), $fileName);

                $path = "uploads/industrySubmissionAttachments/".$fileName;
                $type= $file->getClientMimeType();
                // dd($type);
                IWSubmissionAttachment::create([
                    'iws_id' => $industryWorkSubmission->id,
                    'type' => $type,
                    'path' => $path
                ]);
            }
        }

        return back()->with('message', 'Assignment Submitted Successfully');
    }

    public function industryAllSubmissionsView(IndustryWork $industryWork)
    {
        // dd($industryWork);
        // dd($members);
        // $members = $members->filter(function ($members ) {
        //     return $members->is_teacher == 0;
        // });
        // dd($classroomIndustryWork->industryWork);
        // $submissions = IndustryWorkSubmission::where('added_by', auth()->user()->id)
        // ->where('classroom_id', $classroom->id)
        // ->where('iw_id', $classroomIndustryWork->iw_id)->first();
        // dd($industryWork);
        return view('industryAllSubmissions', [
            'industryWork' => $industryWork
        ]);
    }

    public function industrySubmissionSingle(User $user, IndustryWork $industryWork, IndustryWorkSubmission $submission)
    {
        // dd($user);
        // dd($members);
        // $members = $members->filter(function ($members ) {
        //     return $members->is_teacher == 0;
        // });
        // dd($classroomIndustryWork->industryWork);
        // $submissions = IndustryWorkSubmission::where('added_by', auth()->user()->id)
        // ->where('classroom_id', $classroom->id)
        // ->where('iw_id', $classroomIndustryWork->iw_id)->first();
        // dd($industryWork);
        return view('industrySubmissionSingle', [
            'industryWork' => $industryWork,
            'sSub' => $submission,
            'user' => $user
        ]);
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
