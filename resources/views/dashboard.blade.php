@extends('layouts.dashboardMaster')
@section('content')
<!-- Begin Page Content -->
<section class="main-content mb-5">
    <div class="container">
        {{-- @if (session()->has('message'))
            <div x-data="{ show:true }"
                x-init="setTimeout(() => show = false, 4000)"
                x-show="show"
                class="alert alert-success pb-0">
                <p>{{ session('message') }}</p>
            </div>
        @endif --}}
        @if (session()->has('message'))
            <div class="alert mt-5">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                {{ session('message') }}
            </div>
        @endif
        @if($users->count()>0)
            {{-- @foreach ($users as $user) --}}
                <div class="row mt-5">
                    {{-- start:left --}}
                    <div class="col-lg-8">
                        <!-- pinned classes start -->
                        @if($pins->count()>0)
                            <div class="pc d-flex">
                                <div class="d-flex">
                                    <p class="foy-chead">Pinned class</p>
                                    <img class="mx-2 mt-1" src="{{ asset('assets/redPin.png') }}" alt="" width="16" height="16"
                                    />
                                </div>
                            </div>
                            <div class="justify-content-between">
                                <div class="row flex-wrap">
                                    @foreach ($pins as $pin)
                                    <div class="col-sm-12 col-lg-6 col-md-6 p-2">
                                        <div class="st-card d-flex align-items-center p-2 justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <img class="st-img rounded-circle mx-3" src="{{ $pin->classroom->user->image ? asset($pin->classroom->user->image) : asset('assets/defaultProfile.png')}}" alt="" width="52" height="52" />
                                                <div class="course-tn">
                                                    <p class="course-t m-0 oneline">
                                                        <a href="/classroomStream/{{ $pin->classroom->id }}" class="course-t text-decoration-none">{{ $pin->classroom->name }}</a>
                                                    </p>
                                                    <p class="course-n m-0 oneline">
                                                        {{ $pin->classroom->user->name }}
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="more mx-3 dropdown">
                                                <i class="fa-solid fa-ellipsis-vertical" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                <ul class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dd-item dropdown-item py-2 border-bottom" href="#">Edit</a></li>
                                                    <li><a class="dd-item dropdown-item py-2 border-bottom" href="/unpinClass/{{ $pin->classroom->id }}">Unpin</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        <!-- pinned classes end -->

                        <!-- Teaching start -->
                        @if($teachings->count()>0)
                            <div class="pc d-flex">
                                <div class="col-6 d-flex">
                                    <p class="foy-chead">
                                        Teaching<span class="dash-notification badge rounded-pill pb-1 ms-2">{{ $teachings->count() }}</span>
                                    </p>
                                </div>
                                <div class="col-6 text-end">
                                    <p class="as-dt">
                                        <a href="/classTeaching/{{ auth()->user()->id }}" class="foy-see-more">view all</a>
                                    </p>
                                </div>
                            </div>
                            @foreach ($teachings as $teaching)
                                <div class="st-card col-lg-12 d-flex justify-content-between py-3 my-2">
                                    <div class="d-flex align-items-center col position-relative">
                                        <img class="st-img rounded-circle mx-3" src="{{ $teaching->classroom->user->image ? asset($teaching->classroom->user->image) : asset('assets/defaultProfile.png')}}" alt="" width="52" height="52" />
                                        <div class="lvr vr "></div>
                                        <div class="course-tn mx-4">
                                            <p class="m-0">
                                                <a href="/classroomStream/{{ $teaching->classroom->id }}" class="course-t stretched-link text-decoration-none oneline">{{ $teaching->classroom->name }}</a>
                                            </p>
                                            <p class="course-n m-0 oneline">
                                                {{ $teaching->classroom->user->name }}
                                            </p>
                                        </div>
                                    </div>
                                    {{-- dropdown start --}}
                                    <div class="more p-2 mx-4 my-2 dropdown">
                                        <i class="fa-solid fa-ellipsis-vertical" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                        <ul class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton1">
                                            <li>
                                                <a class="dd-item dropdown-item py-2 border-bottom" href="#">Edit</a>
                                            </li>
                                            <li>
                                                <a href="/deleteClassroom/{{ $teaching->classroom->id }}" class="dd-item  dropdown-item py-2 border-bottom foy-dm-trigger" data-bs-toggle="modal"
                                                data-bs-target="#confirmDelete" data-item="{{ '/deleteClassroom/'.$teaching->classroom->id }}">Delete</a>
                                            </li>
                                            @if ($teaching->classroom->pin_status==1)
                                                <li>
                                                    <a class="dd-item dropdown-item py-2 border-bottom foy-dactive pe-none" tabindex="-1" aria-disabled="true">Pined</a>
                                                </li>
                                            @else
                                                <li>
                                                    <a class="dd-item dropdown-item py-2 border-bottom" href="/pinClass/{{ $teaching->classroom->id }}">Pin</a>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                    {{-- dropdown end --}}
                                </div>
                            @endforeach
                        @endif
                        <!-- Teaching end -->

                        <!-- Joined Classes start -->
                        @if($joins->count()>0)
                            <div class="pc d-flex">
                                <div class="col-6 d-flex">
                                    <p class="foy-chead">Joined<span class="dash-notification badge rounded-pill pb-1 ms-2"
                                    >{{ $joins->count() }}</span></p>
                                </div>
                                <div class="col-6 text-end">
                                    <p class="as-dt">
                                        <a href="/classJoined/{{ auth()->user()->id }}" class="foy-see-more">view all</a>
                                    </p>
                                </div>
                            </div>
                            @foreach ($joins as $join)
                                <div class="st-card col-lg-12 d-flex justify-content-between py-3 my-2" >
                                    <div class="d-flex align-items-center col position-relative">
                                        <img class="st-img rounded-circle mx-3" src="{{ $join->classroom->user->image ? asset($join->classroom->user->image) : asset('assets/defaultProfile.png')}}" alt="" width="52" height="52" />
                                        <div class="lvr vr "></div>
                                        <div class="course-tn mx-4">
                                        <p class="m-0 ">
                                            <a href="/classroomStream/{{ $join->classroom->id }}" class="stretched-link course-t text-decoration-none oneline">
                                                {{ $join->classroom->name }}
                                            </a>
                                        </p>
                                        <p class="course-n m-0 oneline">
                                            {{ $join->classroom->user->name }}
                                        </p>
                                        </div>
                                    </div>
                                    {{-- dropdown start --}}
                                    <div class="more p-2 mx-4 my-2 dropdown">
                                        <i class="fa-solid fa-ellipsis-vertical" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                        <ul class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton1">
                                            <li>
                                                <a class="dd-item dropdown-item py-2 border-bottom" href="#">Edit</a>
                                            </li>
                                            <li>
                                                <a href="/leaveClassroom/{{ $join->classroom->id }}" class="dd-item  dropdown-item py-2 border-bottom foy-dm-trigger" data-bs-toggle="modal"
                                                data-bs-target="#confirmDelete" data-item="{{ '/leaveClassroom/'.$join->classroom->id }}">Leave</a>
                                            </li>
                                            @if ($join->classroom->pin_status==1)
                                                <li>
                                                    <a class="dd-item dropdown-item py-2 border-bottom foy-dactive pe-none" tabindex="-1" aria-disabled="true">Pined</a>
                                                </li>
                                            @else
                                                <li>
                                                    <a class="dd-item dropdown-item py-2 border-bottom" href="/pinClass/{{ $join->classroom->id }}">Pin</a>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                    {{-- dropdown end --}}
                                </div>
                            @endforeach
                        @endif
                        <!-- Joined Classes end -->
                        <!-- star-student-start -->
                        @if(auth()->user()->role=='teacher' && $stars->count()>0)
                            <div class="pc d-flex">
                                <div class="col-6 d-flex">
                                    <p class="foy-chead">Star students<span class="dash-notification badge rounded-pill pb-1 ms-2"
                                    >{{ $stars->count() }}</span></p>
                                </div>
                                <div class="col-6 text-end">
                                    <p class="as-dt">
                                        <a href="/teacherStars/{{ auth()->user()->id }}" class="foy-see-more">view all</a>
                                    </p>
                                </div>
                            </div>
                            @foreach($stars as $star)
                                <div class="st-card col-lg-12 d-flex justify-content-between py-3 my-2">
                                    <div class="d-flex align-items-center">
                                        <div class="lvr vr mx-4"></div>
                                        <img
                                        class="st-img rounded-circle"
                                        src="{{ $star->classroomMember->user->image ? asset($star->classroomMember->user->image) : asset('assets/defaultProfile.png') }}"
                                        alt=""
                                        width="52"
                                        height="52"
                                        />
                                        <div class="course-tn mx-4">
                                        <div class="d-flex">
                                            <?php // dd($star->classroomMember); ?>
                                            <p class="course-t m-0 ">{{ $star->classroomMember->user->name }}</p>
                                            <img class="ms-3" src="assets/star1.png" alt=""><span class="dash-notification badge rounded-pill ms-2"
                                            >{{ $star->classroomMember->classroomStars->count() }}</span></>
                                        </div>
                                        <p class="course-n m-0"> {{ $star->classroomMember->user->email }}</p>
                                        </div>
                                    </div>
                                    <!-- dropdown start -->
                                    <div class="more p-2 mx-4 my-2 dropdown">
                                        <i class="fa-solid fa-ellipsis-vertical" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                        <ul class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton1">
                                            <li>
                                                <a class="dd-item dropdown-item py-2 border-bottom" href="/assignmentSubmissions/{{ $star->assignment_id }}">Assignment</a>
                                            </li>
                                            <li><a class="dd-item dropdown-item py-2" href="/unpinClass/">Send Mail</a></li>
                                        </ul>
                                    </div>
                                    <!-- dropdown end -->
                                </div>
                            @endforeach
                        @endif
                         <!-- star-student-end -->
                    </div>
                    {{-- end:left --}}


                    <!-- To-Do & To Review start-->
                    <div class="col-lg-4 col-md-12">
                        {{-- start:to do --}}
                        @php
                            $notSub=0;
                        @endphp
                        @foreach ($toDos as $toDo)
                            @php
                                $classroom= $toDo->classroom;
                            @endphp
                            @foreach ($classroom->classroomPost as $post)
                                @if ($post->assignment)
                                    @php
                                        $assignment= $post->assignment;
                                        $aSub=0;
                                    @endphp
                                    @foreach ($assignment->assignmentSubmission as $submission)
                                        @if($submission->added_by == auth()->user()->id)
                                            @php
                                                $aSub = 1;
                                            @endphp
                                            @break
                                        @endif
                                    @endforeach
                                    @if($aSub != 1)
                                        @php
                                            $notSub++;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        <div class="pc d-flex">
                            <div class="col-6 d-flex">
                                <p class="as-tt">To Do <span class="dash-notification badge rounded-pill pb-1"
                                >{{ $notSub }}</span></p>
                            </div>
                            @if($notSub>3)
                                <div class="col-6 text-end">
                                    <a class="as-dt" href="#">view all</a>
                                </div>
                            @endif
                        </div>

                        <div class="assignment my-2">
                            @if($notSub>0)
                                @php
                                    $unsubCount=0;
                                @endphp
                                @foreach ($toDos as $toDo)
                                    @php
                                        $classroom= $toDo->classroom;
                                    @endphp
                                    {{-- @php
                                        $unsubCount=0;
                                    @endphp --}}
                                    @foreach ($classroom->classroomPost as $post)
                                        @if ($post->assignment)
                                            @php
                                                $assignment= $post->assignment;
                                                $asSub=0;
                                            @endphp
                                            @foreach ($assignment->assignmentSubmission as $submission)
                                                @if($submission->added_by == auth()->user()->id)
                                                    @php
                                                        $asSub=1;
                                                    @endphp
                                                    @break
                                                @endif
                                            @endforeach
                                            @if($asSub !=1 )
                                                <div class="assignment-box p-4 pb-3 position-relative">
                                                    <div class="col-12">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <a href="/assignmentSubmit/{{ $assignment->id }}" class="text-decoration-none"><p class="assignment-title m-0 oneline">{{ $assignment->title }}</p></a>
                                                            <p class="as-sub ms-2 m-0">{{ $assignment->points }} points</p>
                                                        </div>

                                                        <p class="as-sub mt-2 mb-0 oneline">{{ $classroom->name }}</p>
                                                        <p class="as-dt m-0 d-block">
                                                            <?php
                                                                $datetime = new DateTime();
                                                                $curDate =$datetime->format('Y-m-d g:i:s');
                                                            ?>
                                                            @if($assignment->due_date_time)
                                                                @if( $curDate > $assignment->due_date_time)
                                                                    {{ "Exceded ".Carbon\Carbon::parse($assignment->due_date_time)->format('M d, Y')}}
                                                                @elseif(date('Y-m-d') == Carbon\Carbon::parse($assignment->due_date_time)->format('Y-m-d'))
                                                                    {{ "Due Today ".Carbon\Carbon::parse($assignment->due_date_time)->format('g:i A')}}

                                                                @else
                                                                    {{ "Due ".Carbon\Carbon::parse($assignment->due_date_time)->format('D m').", ".Carbon\Carbon::parse($assignment->due_date_time)->format('g:i A') }}
                                                                @endif
                                                            @else
                                                                {{ "No due date" }}
                                                            @endif
                                                        </p>
                                                    </div>
                                                </div>
                                                @php
                                                    $unsubCount++;
                                                @endphp
                                                @if ($unsubCount>2)
                                                    @break
                                                @endif
                                            @endif
                                        @endif
                                    @endforeach
                                    @if ($unsubCount>2)
                                        @break
                                    @endif
                                @endforeach
                            @else
                            <div class="text-center">
                                <div class="col-12">
                                <img src="{{ asset('assets/images/tea.png') }}" class="foy-td-image py-5">
                                </div>
                            </div>
                            @endif
                        </div>
                        {{-- end:to do --}}
                        {{-- start:to review --}}
                        @if(auth()->user()->role == 'teacher')
                            @php
                                $notReview=0;
                            @endphp
                            @foreach ($toReviews as $toReview)
                                @php
                                    $classroom= $toReview->classroom;
                                @endphp
                                @foreach ($classroom->classroomPost as $post)
                                    @if ($post->assignment)
                                        @php
                                            $assignment= $post->assignment;
                                        @endphp
                                        @if($assignment->assignmentSubmission)
                                            @foreach ($assignment->assignmentSubmission as $submission)
                                                @if($submission)
                                                    @if($submission->grade == null )
                                                        @php
                                                            $notReview++;
                                                        @endphp
                                                        @break
                                                    @endif
                                                @endif
                                            @endforeach
                                        @endif
                                    @endif
                                @endforeach
                            @endforeach
                            <div class="pc d-flex mt-5">
                                <div class="col-6 d-flex">
                                    <p class="as-tt">To Review <span class="dash-notification badge rounded-pill pb-1"
                                    >{{ $notReview }}</span></p>
                                </div>
                                @if($notReview>3)
                                    <div class="col-6 text-end">
                                        <a class="as-dt" href="#">view all</a>
                                    </div>
                                @endif
                            </div>
                            <div class="assignment my-2">
                                @if($notReview>0)
                                    @php
                                        $unReviewCount=0;
                                    @endphp
                                    @foreach ($toReviews as $toReview)
                                        @php
                                            $classroom= $toReview->classroom;
                                        @endphp
                                        @foreach ($classroom->classroomPost as $post)
                                            @if ($post->assignment)
                                                @php
                                                    $assignment= $post->assignment;
                                                    $nullReview = 0;
                                                    $graded=0;
                                                @endphp
                                                @if($assignment->assignmentSubmission)
                                                    @foreach ($assignment->assignmentSubmission as $submission)
                                                        @if($submission)
                                                            @if($submission->grade == null)
                                                                @php
                                                                    $nullReview = 1;
                                                                @endphp
                                                            @else
                                                                @php
                                                                    $graded++;
                                                                @endphp
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                @endif
                                                @if($nullReview == 1 )
                                                    <div class="assignment-box p-4 pb-3 position-relative">
                                                        <div class="col-12">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <a href="/assignmentSubmit/{{ $assignment->id }}" class="text-decoration-none stretched-link"><p class="assignment-title m-0 oneline">{{ $assignment->title }}</p></a>
                                                                {{-- <p class="as-sub ms-2 m-0">{{ $assignment->points }} points</p> --}}
                                                                @php
                                                                    $totalSubs = $assignment->assignmentSubmission->count();
                                                                    $gradePercentage = 0;
                                                                    if($graded != 0){
                                                                        $gradePercentage = ($graded/$totalSubs)*100;
                                                                    }
                                                                @endphp
                                                                <div class="progress foy-progress col-md-3 col-sm-4">
                                                                    @if ($gradePercentage <= 1)
                                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"> 0%</div>
                                                                    @elseif($gradePercentage <50)
                                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $gradePercentage }}%" aria-valuenow="{{ $gradePercentage }}" aria-valuemin="0" aria-valuemax="100">{{ intval($gradePercentage) }}%</div>
                                                                    @else
                                                                        <div class="progress-bar bg-success" role="progressbar" style="width: {{ $gradePercentage }}%" aria-valuenow="{{ $gradePercentage }}" aria-valuemin="0" aria-valuemax="100">{{ intval($gradePercentage) }}%</div>
                                                                    @endif
                                                                </div>
                                                            </div>


                                                            <p class="as-sub mt-2 mb-0 oneline">{{ $classroom->name }}</p>
                                                            <p class="as-dt m-0 d-block">
                                                                <?php
                                                                    $datetime = new DateTime();
                                                                    $curDate =$datetime->format('Y-m-d g:i:s');
                                                                ?>
                                                                @if($assignment->due_date_time)
                                                                    @if( $curDate > $assignment->due_date_time)
                                                                        {{ "Exceded ".Carbon\Carbon::parse($assignment->due_date_time)->format('M d, Y')}}
                                                                    @elseif(date('Y-m-d') == Carbon\Carbon::parse($assignment->due_date_time)->format('Y-m-d'))
                                                                        {{ "Due Today ".Carbon\Carbon::parse($assignment->due_date_time)->format('g:i A')}}

                                                                    @else
                                                                        {{ "Due ".Carbon\Carbon::parse($assignment->due_date_time)->format('D m').", ".Carbon\Carbon::parse($assignment->due_date_time)->format('g:i A') }}
                                                                    @endif
                                                                @else
                                                                    {{ "No due date" }}
                                                                @endif
                                                            </p>
                                                        </div>
                                                    </div>
                                                    @php
                                                        $unReviewCount++;
                                                    @endphp
                                                    @if ($unReviewCount>2)
                                                        @break
                                                    @endif
                                                @endif
                                            @endif
                                        @endforeach
                                        @if ($unReviewCount>2)
                                            @break
                                        @endif
                                    @endforeach
                                @else
                                    <div class="text-center">
                                        <div class="col-12">
                                        <img src="{{ asset('assets/images/tea.png') }}" class="foy-td-image py-5">
                                        </div>
                                    </div>
                                @endif

                            </div>
                        @endif
                        {{-- end:to review --}}
                    </div>
                    <!-- To-Do & To Review end-->
                </div>
            {{-- @endforeach --}}
        @else
            <div class="col-12 mt-4">
                <div class="alert alert-primary" role="alert" style="margin-left:0px; margin-right: 35px;">
                    Nothing Available here
                </div>
            </div>
        @endif

    </div>
</section>
<!-- /.container-fluid -->
@endsection
