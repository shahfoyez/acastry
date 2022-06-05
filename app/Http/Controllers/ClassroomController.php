<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Classroom;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ClassroomMember;
use App\Models\ClassroomPost;


class ClassroomController extends Controller
{
    public function index()
    {   
        $users  = ClassroomMember::orderBy('created_at', 'DESC')->get()->where('member_id', auth()->user()->id);
        // $teachings = ClassroomMember::get()
        //     ->where('member_id', auth()->user()->id)
        //     ->where('is_teacher', 1);
        // $joins = ClassroomMember::get()
        //     ->where('member_id', auth()->user()->id)
        //     ->where('is_teacher', 0);
        // $pins = ClassroomMember::get()
        //     ->where('member_id', auth()->user()->id)
        //     ->where('pin_status', 1);
        $notPins = $users->filter(function($users) {
            return $users->pin_status == 0;
        });

        $teachings = $notPins->filter(function($notPins) {
            return $notPins->is_teacher == 1;
        });
        $teachings = $teachings->take(3);
        // dd($teachings);

        $joins = $notPins->filter(function($notPins) {
            return $notPins->is_teacher == 0;
        });
        $joins = $joins->take(3);

        $pins = $users->filter(function($users) {
            return $users->pin_status == 1;
        });
        $pins = $pins->take(4);

        // dd($pins);
        if(auth()->user()->role == 'teacher'){
            dd("ok");
        }else{
            return view('dashboard', [
                'users' => $users,
                'teachings' => $teachings,
                'joins' => $joins,
                'pins' =>$pins
            ]);
        }
    }
    public function pinClass(Classroom $classroom){
        // dd($classroom->id);
        $userID= auth()->user()->id;
        $users  = ClassroomMember::get()->where('member_id', auth()->user()->id);
        $pins = $users->filter(function($users) {
            return $users->pin_status == 1;
        });

        // dd($pins);
        $classroomID= $classroom->id;
        $alreadyAdded = $pins->filter(function($pins, $classroomID) {
            return $pins->classroom_id == $classroomID;
        });

        if($alreadyAdded->count()>=1){
            return redirect('/')->with('message', 'Classroom already pinned');
        }

        if($pins->count()>=4){
            return redirect('/')->with('message', 'Already added 4');
        }else{
            ClassroomMember::where('classroom_id',$classroom->id)
                ->where('member_id', $userID)
                ->update([
                    'pin_status'=> 1
                ]);
            return redirect('/')->with('message', 'Classroom has been pined');
        }
    }
    public function unpinClass(Classroom $classroom){
        $userID= auth()->user()->id;
        ClassroomMember::where('classroom_id',$classroom->id)
            ->where('member_id', $userID)
            ->update([
                'pin_status'=> 0
            ]);
        return redirect('/')->with('message', 'Classroom has been Unpined');
    }
    public function deleteClass($classroom){
        // dd($classroom);
        $userID= auth()->user()->id;
        $deleted = Classroom::where('id', $classroom)->delete();
        return redirect('/')->with('message', 'Classroom has been deleted');
    }
    public function showStream(Classroom $classroom){
        return view('stream', [
            'classroom' => $classroom
        ]);
    }
    public function showClasswork(Classroom $classroom){
        return view('classwork', [
            'classroom' => $classroom
        ]);
    }
    public function showMaterial(Classroom $classroom){
        return view('stream', [
            'classroom' => $classroom
        ]);
    }
    public function showIndustryWork(Classroom $classroom){
        return view('stream', [
            'classroom' => $classroom
        ]);
    }
    public function showPeople(Classroom $classroom){
        return view('stream', [
            'classroom' => $classroom
        ]);
    }
    public function showDiscussion(Classroom $classroom){
        return view('stream', [
            'classroom' => $classroom
        ]);
    }
    public function showGrades(Classroom $classroom){
        return view('stream', [
            'classroom' => $classroom
        ]);
    }

    // public function show(Classroom $classroom)
    // {
    //     $peoples= ClassroomMember::all()->where('classroom_id', $classroom->id);
    //     // dd($peoples);
    //     $member =ClassroomMember::get()->where('user_id', auth()->user()->id);
    //     return view('people', [
    //         'classroomMember' => $member,
    //         'classroom' => $classroom,
    //         'peoples' => $peoples
    //     ]);
    // }


    public function joinClass(Request $request)
    {
        $attributes=request()->validate([
            'classCode'=> 'required | exists:classrooms,code'
        ]);
        $classroom= Classroom::firstWhere('code', $request->classCode);
        $classroomId=$classroom->id;
        $user= ClassroomMember::where('member_id', '=', auth()->user()->id)
            ->where('classroom_id', '=',  $classroomId)
            ->get()->count();
        // dd($user);
        if($user>0){
            return redirect('/')->with('message', 'You are already a member');
        }else{
            $joinClass= ClassroomMember::create([
                'member_id'=> auth()->user()->id,
                'classroom_id'=> $classroomId,
                'is_teacher'=> 0
            ]);
        }
        return redirect('/')->with('message', 'Joined Class Successfully');
    }


    public function store()
    {
        // dd(request()->all());
        $userId= auth()->user()->id;
        $attributes=request()->validate([
            'name'=> 'required | min:3 | max:255',
            'section'=> 'required | min:1 | max:255',
            'subject'=> ['required', 'min:1', 'max:255'],
            'keywords' => 'required | min:3',
        ]);
        // dd($attributes);
        $class= Classroom::create([
            'name'=> request()->input('name'),
            'section'=> request()->input('section'),
            'subject'=> request()->input('subject'),
            'keywords'=> request()->input('keywords'),
            'added_by'=>  $userId,
            'code' => Str::random(5)
        ]);
        $class= ClassroomMember::create([
            'member_id'=>  $userId,
            'classroom_id'=> $class->id,
            'is_teacher'=> 1
        ]);

        return redirect('/')->with('message', 'Class Added Successfully');
    }


}
