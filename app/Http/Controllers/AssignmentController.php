<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Assignment;
use Illuminate\Http\Request;
use App\Models\ClassroomPost;
use App\Models\AssignmentAttachment;
use App\Http\Controllers\AssignmentController;
use App\Models\AssignmentNotification;

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
        // dd($members);
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

        //Assignment Notification
        $members = Classroom::get()->where('id', $classroom)->first();
        $members = $members->classroomMembers;
        $members = $members->filter(function($members) {
            return $members->is_teacher == 0;
        });
        foreach($members as $member){
            $notification  = AssignmentNotification::where('member_id', $member->id)
            ->where('added_by', $added_by)
            ->where('classroom_id', $classroom)->first();
            // dd($notification->notifications + 1);
            if($notification){
                AssignmentNotification::where('member_id', $member->id)
                ->where('added_by', $added_by)
                ->where('classroom_id', $classroom)
                ->update([
                    'member_id' => $member->id,
                    'added_by' => $added_by,
                    'classroom_id' => $classroom,
                    'notifications' => $notification->notifications + 1
                ]);
            }else{
                AssignmentNotification::create([
                    'member_id' => $member->id,
                    'added_by' => $added_by,
                    'classroom_id' => $classroom,
                    'notifications' => 1
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
