<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;
use App\Models\AssignmentSubmission;
use App\Models\AssignmentSubmissionAttachment;

class AssignmentSubmissionController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Assignment $assignment)
    {
        // dd(request()->all());
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
            $AssignmentSubmission= AssignmentSubmission::create([
                'assignment_id'=> $assignment->id,
                'classroom_id'=>  $assignment->classroomPost->classroom_id,
                'added_by'=> auth()->user()->id,
                'status' => 'original'
            ]);

            foreach(request()->file('files') as $key => $file)
            {
                $fileName='FILE_'.md5(date('d-m-Y H:i:s')).$file->getClientOriginalName();
                $file->move(public_path('uploads/assignmentSubmissionAttachments'), $fileName);

                $path = "uploads/assignmentSubmissionAttachments/".$fileName;
                $type= $file->getClientMimeType();
                // dd($type);
                AssignmentSubmissionAttachment::create([
                    'as_id' => $AssignmentSubmission->id,
                    'type' => $type,
                    'path' => $path
                ]);
            }
        }

        return back()->with('message', 'Assignment Submitted Successfully');

        // return redirect('/assignmentSubmit/'.$assignment->classroomPost->id)->with('message', 'Assignment Submitted Successfully');
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
