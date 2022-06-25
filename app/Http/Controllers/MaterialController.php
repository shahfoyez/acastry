<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;
use App\Models\ClassroomPost;
use App\Models\MaterialAttachment;

class MaterialController extends Controller
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
            'instruction'=> 'min:3'
        ]);
        $classroomPost= ClassroomPost::create([
            'classroom_id' => $classroom,
            'type' => 'material',
            'topic_id' => request()->input('topic_id'),
            'added_by'=> $added_by
        ]);
        $material= Material::create([
            'title'=> request()->input('title'),
            'instruction'=> request()->input('instruction'),
            'post_id'=> $classroomPost->id,
            'added_by'=> $added_by,
            'topic_id' => request()->input('topic_id'),
        ]);

        if (request()->has('files')){
            foreach(request()->file('files') as $key => $file)
            {
                $fileName='FILE_'.md5(date('d-m-Y H:i:s')).$file->getClientOriginalName();
                $file->move(public_path('uploads/materialPostAttachments'), $fileName);

                $path = "uploads/materialPostAttachments/".$fileName;
                $type= $file->getClientMimeType();
                // dd($type);
                MaterialAttachment::create([
                    'material_id' => $material->id,
                    'type' => $type,
                    'path' => $path
                ]);
            }
        }
        return  back()->with('message', 'Material Added Successfully');
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
