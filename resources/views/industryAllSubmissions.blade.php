@extends('layouts.industryMaster')
@section('content')
{{-- start:main section --}}
<section class="main-content">
    <!-- Begin Page Content -->
    <div class="container">


        <!-- classroom nav start-->
        @include('navbar.workNav')
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
                        @if (session()->has('grade'))
                            <div class="alert mt-5">
                                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                                {{ session('grade') }}
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
                                    <th width="45%" scope="col" class="ps-4 foy-th-heading" >Name</th>
                                    <th scope="col"  class="text-center foy-th-heading">Status</th>
                                    <th width="15%" scope="col" class="text-center foy-th-heading">TMark</th>
                                    <th width="15%" scope="col" class="text-center foy-th-heading">IMark</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            @php
                                $totalLate=0;
                                $totalGraded=0;
                                $totalSub=0;
                            @endphp

                            @if ($industryWork->industryWorkSubmission->count()>0)
                                @foreach ($industryWork->industryWorkSubmission as $submission)
                                    <tbody>
                                        <tr class="">
                                            <td  class="ps-4">
                                                <img src="{{ $submission->user->image ? asset( $submission->user->image) : asset('assets/defaultProfile.png') }}" width="45" height="45" alt="..." class="foy-table-image rounded-circle border border-2 border-white mr-2 float-start">
                                                <p class="foy-p"> {{ $submission->user->name }} <img class="foy-tstar" src="{{ asset('assets/star1.png') }}"></p>
                                            </td>
                                            @php
                                                $sub=0;
                                            @endphp
                                            <td>
                                                @if ($submission->grade)
                                                    @if($submission->grade->i_grade)
                                                    @php
                                                        $totalGraded++;
                                                    @endphp
                                                    @endif
                                                @endif

                                                @if ($industryWork->due_date_time != null && $submission->created_at->format('Y-m-d g:i:s') > $industryWork->due_date_time)
                                                    @php
                                                        $totalLate++;
                                                    @endphp
                                                    <h6 class="graded text-center foy-table-status"  style="color: #FFC831 ">Late</h6>
                                                @elseif($submission->grade)
                                                    @if ($submission->grade->iws_id==$submission->id)
                                                        @if($submission->grade->i_grade)
                                                            <h6 class="graded text-center foy-table-status" style="color: #29A3DA;">Graded</h6>
                                                        @else
                                                            <h6 class="graded text-center foy-table-status foy-table-status"  style="color: #2E7D32">Posted</h6>
                                                        @endif
                                                    @endif
                                                @else
                                                    <h6 class="graded text-center foy-table-status foy-table-status"  style="color: #2E7D32">Posted</h6>
                                                @endif
                                            </td>

                                            <td>
                                                <?php //dd($submission->grade->t_grade) ?>
                                                <input readonly class="form-control"
                                                    @if ($submission->grade)
                                                        @if ($submission->id == $submission->grade->iws_id)
                                                            @if($submission->grade->t_grade)
                                                                value="{{ $submission->grade->t_grade }}"
                                                            @endif
                                                        @endif
                                                    @endif
                                                >
                                            </td>

                                            <form method="post" action="/industryGradeSubmit/{{ $submission->id }}">
                                                @csrf
                                                <td>
                                                    <input name="points" type="number" class="form-control"
                                                        @if ($submission->grade)
                                                            @if($submission->grade->i_grade)
                                                                    value="{{ $submission->grade->i_grade }}"
                                                            @else
                                                                placeholder="{{ '/'.$industryWork->points }}"
                                                            @endif
                                                        @else
                                                            placeholder="{{ '/'.$industryWork->points }}"
                                                        @endif
                                                    >
                                                </td>
                                            </form>

                                            <td>
                                                <!-- dropdown start -->
                                                <div class="more dropdown pe-3 foy-tm">
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
                                                </div>
                                                <!-- dropdown end -->
                                            </td>
                                        </tr>
                                    </tbody>
                                    @php
                                        $totalSub= $industryWork->industryWorkSubmission->count();
                                    @endphp
                                @endforeach
                            @else
                                <div class="alert alert-warning m-2" role="alert">
                                    No Submission Found
                                </div>
                            @endif
                        </table>
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
                            <h3 class="foy-a-title m-0">{{ $industryWork->title }}</h3>
                            <p class="foy-at-bottom m-0"> Posted by {{ $industryWork->user->name }} <i class="fa-solid fa-circle foy-dot align-item-center"></i> {{ Carbon\Carbon::parse($industryWork->created_at)->format('M d, Y') }}</p>
                        </div>
                    </div>
                    <div class="col-sm-12 ms-3 mt-4 foy-s-nav">
                        <ul class="navbar-nav">
                            <div class="row">
                                <div class="col-sm-12 gap-3 d-flex  align-items-center foy-a-sc">
                                    <li class="nav-item  submitted col-md-2 col-sm-3 foy-a-dcard text-center align-items-center py-2">
                                        <h1 class="foy-text m-0" style="color: #2E7D32;">{{ $totalSub }}</h1>
                                        <h6 class="foy-text2 m-0">Submitted</h6>
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

                    @if($industryWork->industryWorkSubmission->count()>0)
                        <div class="row">
                            @foreach($industryWork->industryWorkSubmission as $submission)
                                @foreach($submission->iwsAttachment as $attachment)
                                    @include('components.industryMarking.industrySubmissionList')
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
