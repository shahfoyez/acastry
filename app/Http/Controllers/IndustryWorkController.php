<?php

namespace App\Http\Controllers;

use App\Models\IndustryWork;
use Illuminate\Http\Request;
use App\Models\IndustryWorkAttachment;

class IndustryWorkController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store()
    {
         // after_or_equal:today
        // dd(request()->all());
        $added_by= auth()->user()->id;
        $attributes=request()->validate([
            'title'=> 'required | min:3 | max:255',
            'instruction'=> 'nullable | min:3',
            'points'=> 'integer|min:1|max:255',
            'due_date_time'=> 'nullable | after:yesterday',
            'subject'=> 'required | min:3',
            'keyword'=> 'nullable',
        ]);
        $work= IndustryWork::create([
            'title'=> request()->input('title'),
            'instruction'=> request()->input('instruction'),
            'points'=> request()->input('points'),
            'due_date_time'=> request()->input('due_date_time'),
            'subject'=> request()->input('subject'),
            'keyword'=> request()->input('keyword'),
            'added_by'=> $added_by
        ]);

        if (request()->has('files')){
            foreach(request()->file('files') as $key => $file)
            {
                $fileName='FILE_'.md5(date('d-m-Y H:i:s')).$file->getClientOriginalName();
                $file->move(public_path('uploads/industryWorkAttachments'), $fileName);

                $path = "uploads/industryWorkAttachments/".$fileName;
                $type= $file->getClientMimeType();
                // dd($type);
                IndustryWorkAttachment::create([
                    'iw_id' => $work->id,
                    'type' => $type,
                    'path' => $path
                ]);
            }
        }
        return  back()->with('message', 'Industry Work Added Successfully');
    }

    public function industrySubmitView(IndustryWork $industryWork)
    {
        // dd($industryWork);
        // $classroom= Classroom::find($post->classroom_id);
        // $comments = $post->postComment;

        // $publicComments = $comments->filter(function($comments) {
        //     return $comments->status == 'public';
        // });
        // $privateComments = $comments->filter(function($comments) {
        //     return $comments->status == 'private';
        // });
        // $submission = AssignmentSubmission::where('added_by', auth()->user()->id)
        //     ->where('classroom_id', $classroom->id)
        //     ->where('assignment_id', $post->assignment->id)->first();

        return view('industrySubmit', [
             'industryWork' => $industryWork
        ]);
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
