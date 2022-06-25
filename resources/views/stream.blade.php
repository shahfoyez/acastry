@extends('layouts.classroomMaster')
@section('content')
{{-- start:main section --}}
<section class="main-content">
    <div class="container">
        @include('components.classHead')
        <div class="row">
            <div class="col-lg-8 col-md-12">
                @include('navbar.classNav')
                {{-- start:session message(error) --}}
                @if (session()->has('message'))
                     @include('components.alertBar')
                @endif
                {{-- end:session message(error) --}}

                @include('components.classroomAnnouncement')

                @if($classroom->classroomPost->count()>0)
                    @foreach($classroom->classroomPost as $post)
                        @if($post->type =='assignment')
                            @include('components.streamAssignmentCard')
                        @elseif($post->type =='material')
                            @include('components.streamMaterialCard')
                        @elseif($post->type =='general')
                            @include('components.streamGeneralPost')
                        @endif
                    @endforeach
                @endif
            </div>

        <!-- To-Do & To Review start-->
        <div class="col-lg-4 col-md-12">
            {{-- start:to do --}}
            @if(auth()->user()->id != $classroom->user->id)
                @php
                    $notSub=0;
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

                <div class="pc d-flex">
                    <div class="col-6 d-flex">
                        <p class="as-tt">To Do <span class="dash-notification badge rounded-pill pb-1"
                        >{{ $notSub }}</span></p>
                    </div>
                    {{-- @if($notSub>3)
                        <div class="col-6 text-end">
                            <a class="as-dt" href="#">view all</a>
                        </div>
                    @endif --}}
                </div>

                <div class="assignment">
                    @if($notSub>0)
                        @php
                            $unsubCount=0;
                        @endphp
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
                                                <p class="as-sub ms-2 m-0">{{ $assignment->points }}</p>
                                            </div>
                                            {{-- <p class="assignment-title oneline">Assignment 01 check ne line please</p>
                                            <p class="as-sub d-inline float-end">100 points</p> --}}
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
                                    {{-- @if ($unsubCount>2)
                                        @break
                                    @endif --}}
                                @endif
                            @endif
                        @endforeach
                        {{-- @if ($unsubCount>2)
                            @break
                        @endif --}}
                    @else
                        <div class="text-center">
                            <div class="col-12">
                            <img src="{{ asset('assets/images/tea.png') }}" class="foy-td-image py-5">
                            </div>
                        </div>
                    @endif
                </div>
            @endif
            {{-- end:to do --}}

            {{-- start:to review --}}
            @if(auth()->user()->id == $classroom->user->id)
                @php
                    $notReview=0;
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
                <div class="pc d-flex mt-5">
                    <div class="col-6 d-flex">
                        <p class="as-tt">To Review <span class="dash-notification badge rounded-pill pb-1"
                        >{{ $notReview }}</span></p>
                    </div>
                    {{-- @if($notReview>3)
                        <div class="col-6 text-end">
                            <a class="as-dt" href="#">view all</a>
                        </div>
                    @endif --}}
                </div>
                <div class="assignment">
                    @if($notReview>0)
                        @php
                            $unReviewCount=0;
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
                                                {{-- <p class="as-sub ms-2 m-0">{{ $assignment->points }}</p> --}}
                                                @php
                                                    $totalSubs = $assignment->assignmentSubmission->count();
                                                    $gradePercentage = 0;
                                                    if($graded != 0){
                                                        $gradePercentage = ($graded/$totalSubs)*100;
                                                    }
                                                @endphp
                                                <div class="progress col-md-3">
                                                    @if ($gradePercentage <= 1)
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"> 0%</div>
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
                                @endif
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
    </div>
</section>
{{-- end:main section --}}
@endsection
