@extends('layouts.classroomMaster')
@section('content')
{{-- start:main section --}}
<section class="main-content mb-5">
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
                                    <tr class="">
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
                                            {{-- <div class="more dropdown pe-3 foy-tm">
                                                <img
                                                src="{{ asset('assets/images/more.png') }}"
                                                alt=""
                                                class="dropdown-toggle"
                                                type="button"
                                                id="dropdownMenuButton1"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false"
                                                />
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <div class="mh">
                                                    <li><P class="dropdown-item" href="#">Email Address:</P></li>
                                                    <li><P class="dropdown-item" href="#">Ryann Rodgers@gmail.com</P></li>
                                                    <li><hr class="dropdown-divider"></li>
                                                </div>
                                                <li><a class="dd-item dropdown-item" href="#">Remove</a></li>
                                                <li><a class="dd-item dropdown-item" href="#">Make host</a></li>
                                                </ul>
                                            </div> --}}
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
                <div class="bg-white foy-rounded-card ">
                    <div class="col-lg-12 d-flex align-items-center">
                        <img class="foy-at-img me-3" src="{{ asset('assets/min.png') }}">
                        <div>
                            <h3 class="foy-a-title m-0">{{ $assignment->title }}</h3>
                            <p class="foy-at-bottom m-0"> Posted by {{ $assignment->user->name }} <i class="fa-solid fa-circle foy-dot align-item-center"></i> {{ Carbon\Carbon::parse($assignment->created_at)->format('M d, Y') }}</p>
                        </div>
                    </div>
                    {{-- <div class='foy-a-head'>
                        <div class="foy-author-imgThumbnail" >
                            <img class="" src="{{ asset('assets/min.png') }}">
                        </div>
                        <div>
                            <!-- <img src="star.png"> -->
                            <a class="text-decoration-none" href="#"><p class='foy-a-an'>Stella Zoe <img class="foy-star-student" src="{{ asset('assets/star.png') }}"></p></a>
                        </div>
                        <div>
                        <a class="text-decoration-none" href="#"><p class='foy-a-attachment'>2 attachments</p></a>
                        </div>
                    </div> --}}

                    <div class="col-sm-12 ms-3 mt-4 foy-s-nav">
                        <ul class="navbar-nav">
                            <div class="row">
                                <div class="col-sm-12 gap-3 d-flex  align-items-center foy-a-sc">
                                    <li class="nav-item  submitted col-md-2 col-sm-3 foy-a-dcard text-center align-items-center py-2">
                                        <h1 class="foy-text m-0" style="color: #2E7D32;">{{ $totalSub }}</h1>
                                        <h6 class="foy-text2 m-0">Submitted</h6>
                                    </li>
                                    <li class="nav-item missing foy-a-dcard col-md-2 col-sm-3 text-center py-2">
                                        <h1  class="foy-text m-0" style="color: #EA2C3B;" >{{ $totalMissing }}</h1>
                                        <h6  class="foy-text2 m-0" >Missing</h6>
                                    </li>
                                    <li class="nav-item late col-md-2 col-sm-3 foy-a-dcard text-center py-2">
                                        <h1  class="foy-text m-0" style="color: #FCC044;"> {{  $totalLate }}</h1>
                                        <h6 class="foy-text2 m-0">Late</h6>
                                    </li>
                                    <li class="nav-item graded col-md-2 col-sm-3 foy-a-dcard text-center py-2">
                                        <h1  class="foy-text m-0" style="color: #29A3DA;">{{  $totalGraded }}</h1>
                                        <h6 class="foy-text2 m-0">Graded</h6>
                                    </li>
                                </div>

                            </div>
                        </ul>
                    </div>
                    <div class="row mt-2 mb-3">
                        <div class="col-6">
                            <div class="dropdown">
                                <button class="btn foy-a-button dropdown-toggle mt-4" type="button" id="assignmentFilterDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Assigned
                                </button>
                                <div class="dropdown-menu" aria-labelledby="assignmentFilterDropdown" >
                                    <a class="dropdown-item graded pt-0 pb-0" href="#"><h6>All</h6></a>
                                    <a class="dropdown-item submitted pt-0 pb-0" href="#"><h6>Assigned</h6></a>
                                    <a class="dropdown-item missing pt-0 pb-0" href="#"><h6>Missing</h6> </a>
                                    <a class="dropdown-item late pt-0 pb-0" href="#"><h6>Late</h6> </a>
                                    <a class="dropdown-item graded pt-0 pb-0" href="#"><h6>Graded</h6> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2 mb-3">
                         <hr class="foy-hr">
                    </div>

                    @if($assignment->assignmentSubmission->count()>0)
                        <div class="row">
                            @foreach($assignment->assignmentSubmission as $submission)
                                @foreach($submission->assignmentSubmissionAttachment as $attachment)
                                @include('components.assignmentMarking.assignmentSubmissionList')

                                {{-- <div class='col-sm-4 foy-as-RearangeBox foy-as-imgThumbContainer'>
                                    <div class='foy-as-head'>
                                            <div class="foy-author-imgThumbnail" >
                                                <img class="" src="{{ asset('assets/image.jpg') }}">
                                            </div>
                                            <div>
                                                <a class="text-decoration-none" href="#"><p class='foy-as-an'>Stella Zoe <img class="foy-star-student" src="{{ asset('assets/star.png') }}"></p></a>
                                            </div>
                                            <div>
                                            <a class="text-decoration-none" href="#"><p class='foy-as-attachment'>2 attachments</p></a>
                                            </div>
                                    </div>
                                    <div class="foy-as-imgThumbnail" >
                                        <video id="bb" class="foy-video foy-blurEffect foy-border-radius-none" height="100%" width="100%">
                                            <source src="video.mp4" type=video/mp4>
                                            <source src= "error.webm" type=video/webm>
                                        </video>
                                        <div class="foy-content foy-content-as">
                                            <div class="foy-play">►</div>
                                        </div>
                                    </div>
                                    <div class='foy-as-info'>
                                        <div>
                                            <a href="video.mp4" target="_blank" ><p class='foy-as-imgName'>NewVideo.mp4</p></a>
                                        </div>
                                        <div>
                                            <p class='foy-as-type'>Video</p>
                                        </div>
                                    </div>
                                </div>

                                <div class='col-sm-4 foy-as-RearangeBox foy-as-imgThumbContainer'>
                                    <div class='foy-as-head'>
                                        <div class="foy-author-imgThumbnail" >
                                            <img class="" src="{{ asset('assets/image.jpg') }}">
                                        </div>
                                        <div>
                                            <a class="text-decoration-none" href="#"><p class='foy-as-an'>Stella Zoe  <img class="foy-star-student" src="{{ asset('assets/star.png') }}"></p></a>
                                        </div>
                                        <div>
                                        <a class="text-decoration-none" href="#"><p class='foy-as-attachment'>2 attachments</p></a>
                                        </div>
                                    </div>
                                    <div class="foy-as-imgThumbnail" >
                                        <a href="image.jpg" target="_blank" ><img class="foy-border-none" src="{{ asset('assets/image.jpg') }}"></a>
                                    </div>
                                    <div class='foy-as-info'>
                                        <div>
                                            <a href="image.jpg" target="_blank" ><p class='foy-as-imgName'>MyImage.jpg</p></a>
                                        </div>
                                        <div>
                                            <p class='foy-as-type'>Image</p>
                                        </div>
                                    </div>
                                </div>

                                <div class='col-sm-4 foy-as-RearangeBox foy-as-imgThumbContainer'>
                                    <div class='foy-as-head'>
                                            <div class="foy-author-imgThumbnail" >
                                                <img class="" src="{{ asset('assets/image.jpg') }}">
                                            </div>
                                            <div>
                                                <!-- <img src="star.png"> -->
                                                <a class="text-decoration-none" href="#"><p class='foy-as-an'>Stella Zoe <img class="foy-star-student" src="{{ asset('assets/star.png') }}"></p></a>
                                            </div>
                                            <div>
                                            <a class="text-decoration-none" href="#"><p class='foy-as-attachment'>April 18, 2022</p></a>
                                            </div>
                                    </div>
                                    <!-- <a href="pdf.pdf" download><i class='fa-solid fa-download foy-action-button foy-action-button-as' download> -->
                                    </i></a>
                                    <div class="foy-as-thumbnail foy-border-radius-none" >
                                        <a href="pdf.pdf" download="" ><img src="{{ asset('assets/pdf.png') }}"></a>
                                    </div>
                                    <div class='foy-as-info'>
                                        <div>
                                            <a href="pdf.pdf" target="_blank" ><p class='foy-as-imgName'>MyPdfFile.pdf</p></a>
                                        </div>
                                        <div>
                                            <p class='foy-as-type'>PDF</p>
                                        </div>
                                    </div>
                                </div>

                                <div class='col-sm-4 foy-as-RearangeBox foy-as-imgThumbContainer'>
                                    <div class='foy-as-head'>
                                        <div class="foy-author-imgThumbnail" >
                                            <img class="" src="{{ asset('assets/image.jpg') }}">
                                        </div>
                                        <div>
                                            <a class="text-decoration-none" href="#"><p class='foy-as-an'>Stella Zoe  <img class="foy-star-student" src="{{ asset('assets/star.png') }}"></p></a>
                                        </div>
                                        <div>
                                        <a class="text-decoration-none" href="#"><p class='foy-as-attachment'>2 attachments</p></a>
                                        </div>
                                    </div>
                                    <div class="foy-as-thumbnail foy-border-radius-none" >
                                        <a href="doc.doc" download="" ><img src="{{ asset('assets/doc.png') }}"></a>
                                    </div>
                                    <div class='foy-as-info'>
                                        <div>
                                            <a href="doc.doc" download="" ><p class='foy-as-imgName'>MyDocFile.doc</p></a>
                                        </div>
                                        <div>
                                            <p class='foy-as-type'>DOC</p>
                                        </div>
                                    </div>
                                </div>

                                <div class='col-sm-4 foy-as-RearangeBox foy-as-imgThumbContainer'>
                                    <div class='foy-as-head'>
                                        <div class="foy-author-imgThumbnail" >
                                            <img class="" src="{{ asset('assets/image.jpg') }}">
                                        </div>
                                        <div>
                                            <a class="text-decoration-none" href="#"><p class='foy-as-an'>Stella Zoe  <img class="foy-star-student" src="{{ asset('assets/star.png') }}"></p></a>
                                        </div>
                                        <div>
                                        <a class="text-decoration-none" href="#"><p class='foy-as-attachment'>2 attachments</p></a>
                                        </div>
                                    </div>
                                    <div class="foy-as-thumbnail foy-border-radius-none" >
                                        <a href="zip.doc" download="" ><img src="{{ asset('assets/zip.png') }}"></a>
                                    </div>
                                    <div class='foy-as-info'>
                                        <div>
                                            <a href="zip.zip" download="" ><p class='foy-as-imgName'>MyZipFile.doc</p></a>
                                        </div>
                                        <div>
                                            <p class='foy-as-type'>ZIP</p></a>
                                        </div>
                                    </div>
                                </div> --}}
                                @break
                                @endforeach
                            @endforeach
                        </div>
                    @else
                        {{-- @include('components.alertBar') --}}
                        <div class="alert">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                            No submission found.
                        </div>
                    @endif
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
