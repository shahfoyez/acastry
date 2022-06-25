<?php

namespace App\Http\Controllers;

use App\Models\ClassroomIndustryWork;
use App\Models\ClassIndustryWorkComment;
use App\Http\Requests\StoreClassIndustryWorkCommentRequest;
use App\Http\Requests\UpdateClassIndustryWorkCommentRequest;

class ClassIndustryWorkCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }



    public function addIndustryPublicComment(ClassroomIndustryWork $classroomIndustryWork)
    {
        // dd($classroomIndustryWork);
        // $post= $assignment->post_id;
        $attributes=request()->validate([
            'public_comment'=> 'required | min:1 | max:255'
        ]);
        ClassIndustryWorkComment::create([
            'ciw_id' => $classroomIndustryWork->id,
            'comment' => request()->input('public_comment'),
            'added_by' => auth()->user()->id,
            'status' => 'public'
        ]);
        return back();
    }
    public function addIndustryPrivateComment(ClassroomIndustryWork $classroomIndustryWork)
    {
        $attributes=request()->validate([
            'private_comment'=> 'required | min:1 | max:255'
        ]);
        ClassIndustryWorkComment::create([
            'ciw_id' => $classroomIndustryWork->id,
            'comment' => request()->input('private_comment'),
            'added_by' => auth()->user()->id,
            'status' => 'private'
        ]);
        return back();
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClassIndustryWorkCommentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClassIndustryWorkCommentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClassIndustryWorkComment  $classIndustryWorkComment
     * @return \Illuminate\Http\Response
     */
    public function show(ClassIndustryWorkComment $classIndustryWorkComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClassIndustryWorkComment  $classIndustryWorkComment
     * @return \Illuminate\Http\Response
     */
    public function edit(ClassIndustryWorkComment $classIndustryWorkComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClassIndustryWorkCommentRequest  $request
     * @param  \App\Models\ClassIndustryWorkComment  $classIndustryWorkComment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClassIndustryWorkCommentRequest $request, ClassIndustryWorkComment $classIndustryWorkComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClassIndustryWorkComment  $classIndustryWorkComment
     * @return \Illuminate\Http\Response
     */
    public function destroy($ClassIndustryWorkComment)
    {
        $deletIndustryComment =  ClassIndustryWorkComment::where('id', $ClassIndustryWorkComment)->delete();
        return back();
    }
}
