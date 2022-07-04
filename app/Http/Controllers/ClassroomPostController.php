<?php

namespace App\Http\Controllers;

use App\Models\GeneralPost;
use App\Models\PostComment;
use Illuminate\Http\Request;
use App\Models\ClassroomPost;
use App\Models\GenerealPostAttachment;
use App\Http\Controllers\ClassroomPostController;

class ClassroomPostController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request, $classroom)
    {
        $added_by= auth()->user()->id;
        $attributes=request()->validate([
            'title'=> 'required | min:3 | max:255',
        ]);

        $classroomPost= ClassroomPost::create([
            'classroom_id' => $classroom,
            'type' => 'general',
            'added_by'=> $added_by
        ]);
        $generalPost= GeneralPost::create([
            'title'=> request()->input('title'),
            'post_id'=> $classroomPost->id,
            'added_by'=> $added_by
        ]);

        if ($request->has('files')){

            foreach(request()->file('files') as $key => $file)
            {
                $fileName='FILE_'.md5(date('d-m-Y H:i:s')).$file->getClientOriginalName();
                $file->move(public_path('uploads/generalPostAttachments'), $fileName);

                $path = "uploads/generalPostAttachments/".$fileName;
                $type= $file->getClientMimeType();
                // dd($type);
                GenerealPostAttachment::create([
                    'general_post_id' => $generalPost->id,
                    'type' => $type,
                    'path' => $path
                ]);
            }
        }


        return back()->with('message','Post uploded successfully!');
        // Convert a link into embed
        // if (filter_var($request->title, FILTER_VALIDATE_URL)) {
        //     $path= preg_replace(
        //         "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
        //         "<iframe src=\"//www.youtube.com/embed/$2\" allowfullscreen></iframe>",
        //         $request->title
        //     );
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

    public function destroy($post)
    {
        $deletePost = ClassroomPost::where('id', $post)->delete();
        return back()->with('message', 'Post has been deleted');
    }
}
