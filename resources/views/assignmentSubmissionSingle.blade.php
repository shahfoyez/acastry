@extends('layouts.classroomMaster')
@section('content')
{{-- start:main section --}}
<section class="main-content">
    <!-- Begin Page Content -->
    <div class="container">
        @include('components.classHead')

        <!-- classroom nav start-->
        @include('navbar.classNav')
        <!-- classroom nav end-->{{-- start:session message(error) --}}
        @if (session()->has('message'))
            {{-- @include('components.alertBar') --}}
            <div class="alert mt-5">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                {{ session('message') }}
            </div>
        @endif
        {{-- end:session message(error) --}}
        <div class="row">
            <!-- Left -->
            <div class="col-lg-5 pl-2 mt-4">
                <div class="bg-white foy-top-rounded-card sticky-lg-top">
                    <div class="col-lg-12 px-4 py-3 border-bottom foy-acastry-border">
                        <h5 class="d-inline "> All Students <i class="fa fa-users" aria-hidden="true"></i></h5>
                        <a href="/assignmentMark" class='btn btn-primary d-inline float-end foy-exp-btn'> <h6 class=" "><i class="fa-solid fa-cloud-arrow-down"></i> Export</h6></a>
                    </div>
                    <div class="table-wrapper-scroll-y my-custom-scrollbar" style="min-height: 100vh; overflow: scroll;">
                        @php
                            $totalLate=0;
                            $totalGraded=0;
                            $totalSub=0;
                            $totalMissing=0;
                        @endphp
                        @if($members->count()>0)
                            @if (session()->has('grade'))
                                {{-- @include('components.alertBar') --}}
                                <div class="alert m-2">
                                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                                    {{ session('grade') }}
                                </div>
                            @endif
                            @if (session()->has('star'))
                                {{-- @include('components.alertBar') --}}
                                <div class="alert m-2">
                                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                                    {{ session('star') }}
                                </div>
                            @endif
                            @error('points')
                                <div class="alert m-2">
                                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                                    {{ $message }}
                                </div>
                            @enderror
                            <table class="table align-middle table-hover table-borderless foy-table">
                                <thead>
                                    <tr class="foy-acastry-tr">
                                        <th width="50%" scope="col" class="ps-4 foy-th-heading" >Name</th>
                                        <th scope="col"  class="text-center foy-th-heading">Status</th>
                                        <th width="20%" scope="col" class="text-center foy-th-heading">Mark</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                @php
                                    $totalLate=0;
                                    $totalGraded=0;
                                    $totalSub=0;
                                    $totalMissing=0;
                                @endphp
                                @foreach($members as $member)
                                <tbody>
                                    <tr class="{{ $member->user->id == $user->id? "table-active": '' }}">
                                        <td  class="ps-4">
                                            <img src="{{ $member->user->image ? asset( $member->user->image) : asset('assets/defaultProfile.png')}}" width="45" height="45" alt="..." class="foy-table-image rounded-circle border border-2 border-white mr-2 float-start">
                                            <p class="foy-p">{{ $member->user->name }}
                                            @foreach($assignment->stars as $star)
                                                @if($star->star_id == $member->id)
                                                    <img class="foy-tstar" src="{{ asset('assets/star1.png') }}">
                                                @endif
                                            @endforeach
                                            </p>
                                        </td>
                                        @php
                                            $sub=0;
                                        @endphp
                                        @if ($assignment->assignmentSubmission->count()>0)
                                            @foreach ($assignment->assignmentSubmission as $submission)
                                                @if ($submission->added_by == $member->user->id )
                                                    @php
                                                        $sub=1;
                                                    @endphp
                                                    @break
                                                @else
                                                    @php
                                                        $sub=0;
                                                    @endphp
                                                @endif
                                            @endforeach
                                            @if ($sub==1)
                                                <td>
                                                    @if ($submission->grade)
                                                        @php
                                                            $totalGraded++;
                                                        @endphp
                                                    @endif

                                                    @if ($assignment->due_date_time != null && $submission->created_at->format('Y-m-d g:i:s') > $assignment->due_date_time)
                                                        @php
                                                            $totalLate++;
                                                        @endphp
                                                       <h6 class="graded text-center foy-table-status"  style="color: #FFC831 ">Late</h6>
                                                    @elseif($submission->grade)
                                                        @if ($submission->grade->assignment_submission_id==$submission->id)
                                                            <h6 class="graded text-center foy-table-status" style="color: #29A3DA;">Graded</h6>
                                                        @endif
                                                    @else
                                                        <h6 class="graded text-center foy-table-status foy-table-status"  style="color: #2E7D32">Posted</h6>
                                                    @endif
                                                </td>
                                                <form method="post" action="/gradeSubmit/{{ $submission->id }}">
                                                    @csrf
                                                    <td>
                                                        <input name="points" type="number" class="form-control"
                                                            @if ($submission->grade)
                                                                @if ($submission->id == $submission->grade->assignment_submission_id)
                                                                    value="{{ $submission->grade->points }}"
                                                                @else
                                                                    placeholder="{{ '/'.$assignment->points }}"
                                                                @endif
                                                            @else
                                                                placeholder="{{ '/'.$assignment->points }}"
                                                            @endif
                                                        >
                                                    </td>
                                                </form>
                                            @else
                                                <td class="missing">
                                                    <h6 class="graded text-center foy-table-status" style="color: #FF4B3A;">Missing</h6>
                                                </td>
                                                <td>
                                                    <input class="form-control" name="points" type="number" readonly>
                                                </td>
                                            @endif
                                        @else
                                            <td class="missing">
                                                <h6 class="graded text-center foy-table-status" style="color: #FF4B3A;">Missing</h6>
                                            </td>
                                            <td>
                                                <input class="form-control" name="points" type="number" readonly>
                                            </td>
                                        @endif
                                        <td>
                                            <!-- dropdown start -->
                                            <div class="more mx-3 dropdown">
                                                <i class="fa-solid fa-ellipsis-vertical" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                <ul class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton1">
                                                    @php
                                                        $str=0;
                                                    @endphp
                                                    @if($assignment->stars->count()>0)
                                                        @foreach($assignment->stars as $star)
                                                            @if($star->star_id == $member->id)
                                                                @php
                                                                    $str=1;
                                                                @endphp
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                    @if ($str==0)
                                                        <li>
                                                            <a class="dd-item dropdown-item py-2 border-bottom" href="/classroomstar/{{ $member->id }}/{{ $assignment->id }}/{{ $classroom->id }}">Make Star</a>
                                                        </li>
                                                    @else

                                                        <li>
                                                            <a class="dd-item dropdown-item py-2 border-bottom" href="/classroomStarRemove/{{ $member->id }}/{{ $assignment->id }}/{{ $classroom->id }}">Remove Star</a>
                                                        </li>
                                                    @endif

                                                    <li><a class="dd-item dropdown-item py-2" href="/unpinClass/">Send Mail</a></li>
                                                </ul>
                                            </div>
                                            <!-- dropdown end -->
                                        </td>
                                    </tr>
                                </tbody>
                                @php
                                    $totalSub= $assignment->assignmentSubmission->count();
                                    $totalMissing= $members->count()-$totalSub;
                                @endphp
                                @endforeach
                            </table>
                        @else
                        <div class="alert alert-warning m-2" role="alert">
                            No Student Found
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- Left -->
            <!-- Right -->
            <div class="col-lg-7 vl v mt-4 table-wrapper-scroll-y my-custom-scrollbar" >
                <div class="bg-white foy-rounded-card">
                    <div class="col-lg-12 d-flex align-items-center">
                        <img class="foy-at-img me-3" src="{{ asset('assets/min.png') }}">
                        <div>
                            <h3 class="foy-a-title m-0">{{ $assignment->title }}</h3>
                            <p class="foy-at-bottom m-0">  Posted by {{ $assignment->user->name }} <i class="fa-solid fa-circle foy-dot align-item-center"></i> {{ Carbon\Carbon::parse($assignment->created_at)->format('M d, Y') }}</p>
                        </div>
                    </div>

                    <div class="col-lg-12 mt-4 mb-4">
                        <img class="d-inline float-start foy-a-single-img me-3" src="{{ asset('assets/image.jpg') }}">
                        <h6 class="foy-sa-an m-0">{{ $submission->user->name }}
                        @foreach($assignment->stars as $star)
                            @if($star->star_id == $member->id)
                                <img class="foy-tstar" src="{{ asset('assets/star2.png') }}">
                            @endif
                        @endforeach
                        </h6>
                        <p class="foy-sa-ac m-0"> {{ $submission->assignmentSubmissionAttachment->count() }} attachments</p>
                    </div>

                    <div class="row mt-2 mb-3">
                        <hr class="foy-hr">
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            @if($submission->assignmentSubmissionAttachment->count() > 0)
                                @foreach($submission->assignmentSubmissionAttachment as $attachment)
                                    @if($attachment->type=='image/png' || $attachment->type=='image/jpeg')
                                        @include('components.postRearangebox.image')
                                    @elseif($attachment->type=='application/pdf')
                                        @include('components.postRearangebox.pdf')
                                    @elseif($attachment->type=='application/x-zip-compressed')
                                        @include('components.postRearangebox.zip')
                                    @elseif($attachment->type=='application/msword')
                                        @include('components.postRearangebox.doc')
                                    @elseif($attachment->type=='video/mp4')
                                        @include('components.postRearangebox.video')
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>


                </div>
           </div>
           <!-- Right -->
        </div>
        <!-- Row -->
    </div>
    <!-- Container -->
</section>
{{-- end:main section --}}
@endsection
