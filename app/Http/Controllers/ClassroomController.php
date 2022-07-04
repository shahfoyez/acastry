<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Material;
use App\Models\Classroom;
use App\Models\Assignment;
use App\Models\PostComment;
use Illuminate\Support\Str;
use App\Models\IndustryWork;
use Illuminate\Http\Request;
use App\Models\ClassroomPost;
use App\Models\ClassroomStar;
use App\Models\ClassroomMember;
use App\Models\ClassIndustryWork;
use App\Models\AssignmentSubmission;
use App\Models\ClassroomIndustryWork;
use App\Models\IndustryWorkSubmission;


class ClassroomController extends Controller
{
    public function index()
    {
        if(auth()->user()->role == 'industry'){
            $industryWorks = IndustryWork::orderBy('created_at', 'DESC')->get()
                ->where('added_by', auth()->user()->id);
            // dd($industryWorks);
            return view('industryDashboard', [
                'industryWorks' => $industryWorks,
                'user' => auth()->user()
            ]);
        }else{
            $users  = ClassroomMember::orderBy('created_at', 'DESC')->get()->where('member_id', auth()->user()->id);
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

            $stars = ClassroomStar::orderBy('created_at', 'DESC')->get()
                ->where('added_by', auth()->user()->id)->take(3);
            $stars = $stars->each(function($stars) {
            })->unique('star_id');

            $toDos = $users->filter(function($users) {
                return $users->is_teacher == 0;
            });
            $toReviews = $users->filter(function($users) {
                return $users->is_teacher == 1;
            });
            return view('dashboard', [
                'users' => $users,
                'teachings' => $teachings,
                'joins' => $joins,
                'pins' =>$pins,
                'stars' => $stars,
                'toDos' => $toDos,
                'toReviews' => $toReviews
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



    public function classTeaching(User $user){
        // dd($user);

        $memberClassrooms = ClassroomMember::get()
            ->where('member_id', auth()->user()->id)
            ->where('is_teacher', 1);

        return view('classTeaching', [
            'memberClassrooms' => $memberClassrooms
        ]);
    }

    public function classJoined(User $user){
        // dd($user);

        $memberClassrooms = ClassroomMember::get()
            ->where('member_id', auth()->user()->id)
            ->where('is_teacher', 0);

        return view('classJoined', [
            'memberClassrooms' => $memberClassrooms
        ]);
    }


    public function deleteClass($classroom){
        // dd($classroom);
        $userID= auth()->user()->id;
        $deleted = Classroom::where('id', $classroom)->delete();
        return redirect('/')->with('message', 'Classroom has been deleted');
    }


    public function showStream(Classroom $classroom){
        // dd($classroom);
        return view('stream', [
            'classroom' => $classroom
        ]);
    }


    public function showClasswork(Classroom $classroom){
        // dd($classroom->topic);
        // foreach($classroom->topic as $topic){
        //     dd($topic->material);
        // }
        $topics= $classroom->topic;
        $uncategorised = ClassroomPost::orderBy('created_at', 'DESC')->get()
        ->where('topic_id', '')
        ->where('classroom_id', $classroom->id)
        ->where('type', 'assignment');
        // dd($topics);
        return view('classwork', [
            'classroom' => $classroom,
            'topics' => $topics,
            'uncategorised' => $uncategorised
        ]);
    }


    public function showMaterial(Classroom $classroom){
        $topics= $classroom->topic;
        $uncategorised = ClassroomPost::orderBy('created_at', 'DESC')->get()
            ->where('topic_id', '')
            ->where('classroom_id', $classroom->id)
            ->where('type', 'material');
        return view('material', [
            'classroom' => $classroom,
            'topics' => $topics,
            'uncategorised' => $uncategorised
        ]);
    }

    public function showIndustryWork(Classroom $classroom){
        return view('stream', [
            'classroom' => $classroom
        ]);
    }


    public function classroomPeople(Classroom $classroom){
        $members = ClassroomMember::get()->where('classroom_id', $classroom->id);
        $teacher = $members->filter(function($members) {
            return $members->is_teacher == 1;
        })->first();
        $students = $members->filter(function($members) {
            return $members->is_teacher == 0;
        });
        return view('people', [
            'classroom' => $classroom,
            'teacher' =>  $teacher,
            'students' =>  $students
        ]);
    }

    public function classroomStar($user, $assignment, $classroom)
    {
        // dd($classroom);

        $classroomStar= ClassroomStar::create([
            'classroom_id'=> $classroom,
            'assignment_id'=> $assignment,
            'star_id'=> $user,
            'added_by' => auth()->user()->id
        ]);
        return back()->with('star', 'Added star successfully');
    }

    public function classroomStarRemove($user, $assignment, $classroom)
    {
        // dd($classroom);
        $deleted = ClassroomStar::where('classroom_id', $classroom)
            ->where('classroom_id', $classroom)
            ->where('assignment_id', $assignment)
            ->where('star_id', $user)
            ->delete();
        return back()->with('star', 'Star Removed successfully');
    }
    public function teacherStars($user)
    {
        $stars = ClassroomStar::orderBy('created_at', 'DESC')->get()
            ->where('added_by', auth()->user()->id);
        $stars = $stars->each(function($stars) {
        })->unique('star_id');
        return view('teacherStars', [
            'stars' => $stars
        ]);

    }

    public function classIndustryStar($user, $classroomIndustryWork, $classroom)
    {
        // dd($classroom);
        $classroomStar= ClassroomStar::create([
            'classroom_id'=> $classroom,
            'ciw_id'=> $classroomIndustryWork,
            'star_id'=> $user,
            'added_by' => auth()->user()->id
        ]);
        return back()->with('star', 'Added star successfully');
    }

    public function classIndustryStarRemove($user, $classroomIndustryWork, $classroom)
    {
        // dd($classroom);
        $deleted = ClassroomStar::where('classroom_id', $classroom)
            ->where('classroom_id', $classroom)
            ->where('ciw_id', $classroomIndustryWork)
            ->where('star_id', $user)
            ->delete();
        return back()->with('star', 'Star Removed successfully');
    }

    public function assignmentSubmitView(ClassroomPost $post){
        $classroom= Classroom::find($post->classroom_id);
        $comments = $post->postComment;

        $publicComments = $comments->filter(function($comments) {
            return $comments->status == 'public';
        });
        $privateComments = $comments->filter(function($comments) {
            return $comments->status == 'private';
        });
        $submission = AssignmentSubmission::where('added_by', auth()->user()->id)
            ->where('classroom_id', $classroom->id)
            ->where('assignment_id', $post->assignment->id)->first();

        return view('assignmentSubmit', [
            'classroom' => $classroom,
            'assignment' => $post->assignment,
            'publicComments' => $publicComments,
            'privateComments' => $privateComments,
            'submission' => $submission
        ]);
    }


    public function  classIndustrySubmit(ClassroomIndustryWork $classroomIndustryWork){
        $classroom= Classroom::find($classroomIndustryWork->classroom_id);
        $comments = $classroomIndustryWork->ClassIndustryWorkComment;
        // dd($comments);
        $publicComments = $comments->filter(function($comments) {
            return $comments->status == 'public';
        });
        $privateComments = $comments->filter(function($comments) {
            return $comments->status == 'private';
        });
        $submission = IndustryWorkSubmission::where('added_by', auth()->user()->id)
            ->where('classroom_id', $classroom->id)
            ->where('iw_id', $classroomIndustryWork->iw_id)->first();
        // dd($submission);
        return view('classIndustrySubmit', [
            'classroom' => $classroom,
            'industryWork' => $classroomIndustryWork->industryWork,
            'classroomIndustryWork' => $classroomIndustryWork,
            'publicComments' => $publicComments,
            'privateComments' => $privateComments,
            'submission' => $submission
        ]);
    }


    public function assignmentSubmissionView(ClassroomPost $post){
        $classroom= Classroom::find($post->classroom_id);
        $members= $classroom->classroomMembers;
        $members = $members->filter(function ($members ) {
            return $members->is_teacher == 0;
        });



        return view('assignmentSubmissions', [
            'classroom' => $classroom,
            'assignment' => $post->assignment,
            'members' => $members
        ]);
    }

    public function classIndustrySubmissionsView(ClassroomIndustryWork $classroomIndustryWork){
        $classroom= $classroomIndustryWork->classroom;
        $cid=  $classroom->id;
        $members= $classroom->classroomMembers;
        $members = $members->filter(function ($members ) {
            return $members->is_teacher == 0;
        });
        $subs= $classroomIndustryWork->industryWork;
        $sub=  $subs->industryWorkSubmission;
        $submissions = $sub->filter(function ($sub) use ($cid){
            return $sub->classroom_id == $cid;
        });
        return view('classIndustrySubmissions', [
            'classroom' => $classroom,
            'industryWork' => $classroomIndustryWork->industryWork,
            'members' => $members,
            'classroomIndustryWork' => $classroomIndustryWork,
            'submissions' => $submissions
        ]);
    }

    public function assignmentSubmissionSingle(User $user, Assignment $assignment){
        $classroom= Classroom::find($assignment->classroomPost->classroom_id);
        $members= $classroom->classroomMembers;
        $members = $members->filter(function ($members ) {
            return $members->is_teacher == 0;
        });
        $submissions = $assignment->assignmentSubmissions;
        $submission = AssignmentSubmission::where('added_by', $user->id)
            ->where('classroom_id', $classroom->id)
            ->where('assignment_id', $assignment->id)->first();

        return view('assignmentSubmissionSingle', [
            'classroom' => $classroom,
            'assignment' => $assignment,
            'members' => $members,
            'submission' => $submission,
            'user' => $user
        ]);
    }

    public function classIndustrySubmissionSingle(User $user, IndustryWork $industryWork, Classroom $classroom, IndustryWorkSubmission $submission){
        $members= $classroom->classroomMembers;
        $members = $members->filter(function ($members ) {
            return $members->is_teacher == 0;
        });
        return view('classIndustrySubmissionSingle', [
            'classroom' => $classroom,
            'industryWork' => $industryWork,
            'members' => $members,
            'sSub' => $submission,
            'user' => $user
        ]);
    }

    public function relatedWork(Classroom $classroom){
        $industryWorks = IndustryWork::get()->where('subject', $classroom->subject)->sortByDesc("created_at");
        $classroomIndustryWorks = ClassroomIndustryWork::get()->where('classroom_id', $classroom->id);
         return view('classRelatedWork', [
             'industryWorks'   => $industryWorks,
             'classroom'       => $classroom,
             'classroomIndustryWorks' => $classroomIndustryWorks
         ]);
    }
    public function addedWork(Classroom $classroom){
        $classroomIndustryWorks = ClassroomIndustryWork::get()->where('classroom_id', $classroom->id);
         return view('classAddedWork', [
             'classroom'       => $classroom,
             'classroomIndustryWorks' => $classroomIndustryWorks
         ]);
    }


    public function classIndustryAdd(Classroom $classroom, IndustryWork $industryWork)
    {
        $industryWorkAdd= ClassroomIndustryWork::create([
            'iw_id'       => $industryWork->id,
            'classroom_id' => $classroom->id,
            'added_by' => auth()->user()->id
        ]);
        // IndustryWork::find($industryWork->id)->increment('added');

        $added = $industryWork->added + 1;
        $industryWork->update(['added' => $added]);

        return back()->with('message', 'Industry Work Added Successfully');
    }


    public function classIndustryDetails(Classroom $classroom, IndustryWork $industryWork)
    {
        $views = $industryWork->views + 1;
        $industryWork->update(['views' => $views]);
        return view('classIndustryDetails', [
            'classroom' =>$classroom,
            'industryWork' => $industryWork
        ]);
    }



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
        $userId= auth()->user()->id;
        $attributes=request()->validate([
            'name'=> 'required | min:3 | max:255',
            'section'=> 'required | min:1 | max:255',
            'subject'=> ['required', 'min:1', 'max:255'],
            'keywords' => 'required | min:3',
        ]);
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
