<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;
use App\Models\ClassroomPost;
use App\Models\AssignmentAttachment;
use App\Http\Controllers\AssignmentController;

class AssignmentController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store($classroom)
    {
        // after_or_equal:today
        // dd(request()->all());
        $added_by= auth()->user()->id;
        $attributes=request()->validate([
            'title'=> 'required | min:3 | max:255',
            'instruction'=> 'required | min:3',
            'points'=> 'integer|min:1|max:255',
            'due_date_time'=> 'nullable|after:yesterday',
        ]);
        $classroomPost= ClassroomPost::create([
            'classroom_id' => $classroom,
            'type' => 'assignment',
            'topic_id' => request()->input('topic_id'),
            'added_by'=> $added_by
        ]);
        $assignment= Assignment::create([
            'title'=> request()->input('title'),
            'instruction'=> request()->input('instruction'),
            'points'=> request()->input('points'),
            'due_date_time'=> request()->input('due_date_time'),
            'post_id'=> $classroomPost->id,
            'added_by'=> $added_by,
            'topic_id' => request()->input('topic_id'),
        ]);

        if (request()->has('files')){
            foreach(request()->file('files') as $key => $file)
            {
                $fileName='FILE_'.md5(date('d-m-Y H:i:s')).$file->getClientOriginalName();
                $file->move(public_path('uploads/assignmentAttachments'), $fileName);

                $path = "uploads/assignmentAttachments/".$fileName;
                $type= $file->getClientMimeType();
                // dd($type);
                AssignmentAttachment::create([
                    'assignment_id' => $assignment->id,
                    'type' => $type,
                    'path' => $path
                ]);
            }
        }
        return  back()->with('message', 'Assignment Added Successfully');
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
