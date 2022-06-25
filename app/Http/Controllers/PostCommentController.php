<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\PostComment;
use App\Http\Requests\StorePostCommentRequest;
use App\Http\Controllers\PostCommentController;
use App\Http\Requests\UpdatePostCommentRequest;

class PostCommentController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostCommentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store($post)
    {
        $attributes=request()->validate([
            'comment'=> 'required | min:1 | max:255'
        ]);
        PostComment::create([
            'post_id' => $post,
            'comment' => request()->input('comment'),
            'added_by' => auth()->user()->id
        ]);
        return back();
    }

    public function addAssignmentPublicComment(Assignment $assignment)
    {
        // dd($assignment->post_id);
        $post= $assignment->post_id;
        $attributes=request()->validate([
            'public_comment'=> 'required | min:1 | max:255'
        ]);
        PostComment::create([
            'post_id' => $post,
            'comment' => request()->input('public_comment'),
            'added_by' => auth()->user()->id,
            'status' => 'public'
        ]);
        return back();
    }
    public function addAssignmentPrivateComment(Assignment $assignment)
    {
        // dd($assignment);
        $post= $assignment->post_id;
        $attributes=request()->validate([
            'private_comment'=> 'required | min:1 | max:255'
        ]);
        PostComment::create([
            'post_id' => $post,
            'comment' => request()->input('private_comment'),
            'added_by' => auth()->user()->id,
            'status' => 'private'
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostComment  $postComment
     * @return \Illuminate\Http\Response
     */
    public function show(PostComment $postComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostComment  $postComment
     * @return \Illuminate\Http\Response
     */
    public function edit(PostComment $postComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostCommentRequest  $request
     * @param  \App\Models\PostComment  $postComment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostCommentRequest $request, PostComment $postComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostComment  $postComment
     * @return \Illuminate\Http\Response
     */
    public function destroy($postComment)
    {
        $deletPostComment =  PostComment::where('id', $postComment)->delete();
        return back();
    }
}
