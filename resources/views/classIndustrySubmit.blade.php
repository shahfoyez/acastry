@extends('layouts.classroomMaster')
@section('content')
{{-- start:main section --}}
<section class="main-content">
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

        <!-- industry-card-start -->
        <div class="industry-card p-5 pb-5 my-3">
            <div class="d-flex flex-wrap ">
                <div class="col-xl-7 col-sm-12">
                    <div class="ic-pic-title d-flex align-items-center">
                        <img class="st-id-img rounded-circle" src="{{ asset('assets/images/Min.png') }}" alt="" width="92" height="92"/>
                        <div class="ms-3">
                            <p class="m-0 mb-1 id-title">{{ $industryWork->user->name }}</p>
                            <p class="m-0 mb-1 id-title-dt">{{ $industryWork->user->address? $industryWork->user->address : "No address found"}}</p>
                            <div class="d-flex id-title-dt">
                                <p class="p-0 m-0"><img src="{{ asset('assets/images/calendar-2.png') }}" class="me-2">{{ $industryWork->created_at->diffForHumans() }}</p>
                                <p class="p-0 m-0"><img src="{{ asset('assets/images/timer.png') }}" class="mx-2">
                                    <?php
                                        $datetime = new DateTime();
                                        $curDate =$datetime->format('Y-m-d g:i:s');
                                    ?>
                                        @if($industryWork->due_date_time)
                                        @if( $curDate > $industryWork->due_date_time)
                                            {{ "Exceded ".Carbon\Carbon::parse($industryWork->due_date_time)->format('M d, Y')}}
                                        @elseif(date('Y-m-d') == Carbon\Carbon::parse($industryWork->due_date_time)->format('Y-m-d'))
                                            {{ "Due Today ".Carbon\Carbon::parse($industryWork->due_date_time)->format('g:i A')}}
                                        @else
                                            {{ "Due ".Carbon\Carbon::parse($industryWork->due_date_time)->format('D m').", ".Carbon\Carbon::parse($industryWork->due_date_time)->format('g:i A') }}
                                        @endif
                                    @else
                                        {{ "No due date" }}
                                    @endif
                                </p>
                                <p class="id-title-dt-col p-0 m-0"><img src="{{ asset('assets/images/profile-2user.png') }}" class="mx-2">{{ $industryWork->views ? $industryWork->views : '0' }} views</p>
                            </div>
                        </div>
                </div>
            </div>

            <div class="col-xl-5 col-sm-12 d-flex align-items-center justify-content-end">
                <a class="pt-bt mx-2">
                  <p class="cda-date-p2 m-0 mx-3" style="color: #29A3DA;">{{ $industryWork->points }}</p>
                  <p class="cda-date-p1 m-0">Point</p>
                </a>
                <!-- dropdown start -->
                <div class="more p-2 mx-4 my-2 dropstart">
                  <i
                    class="fa-solid fa-ellipsis-vertical"
                    type="button"
                    id="dropdownMenuButton1"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  ></i>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dd-item dropdown-item" href="#">Remove</a></li>
                    <li>
                      <a class="dd-item dropdown-item" href="#">Make host</a>
                    </li>
                  </ul>
                </div>
                <!-- dropdown end -->
            </div>
            </div>
            <hr class="foy-hr">
             <div class="p-2">
                <p class="my-2 m-0 id-title"> {{ $industryWork->title }}</p>
                <p class="id-title-dt"> {{ $industryWork->instruction }} </p>
            </div>

            {{-- start:slider --}}
            @include('components.industrySubmission.industrySubmissionSlider')
            {{-- end:slider --}}
            <hr class="style1 my-4" />

            {{-- start:public comment --}}
            <div class="comments">
                <div class="d-flex m-4 py-4 justify-content-between align-content-center">
                    <p class="m-0 ms-3 "><img src="{{ asset('assets/images/messages.png') }}" class="me-2">{{ $publicComments->count() }} class comments</p>
                    {{-- <a href="#" style="text-decoration:none; color: black; ">
                        <p class="m-0">Show more<i class="fa-solid fa-angles-right ms-1"></i></p>
                    </a> --}}
                </div>
                @foreach($publicComments as $publicComment)
                    <div class="d-flex m-3 justify-content-between">
                        <div class="d-flex justify-content-between align-items-center">
                            <img
                            class="st-img rounded-circle mx-4 me-0"
                            src="{{ $publicComment->user->image ?  $publicComment->user->image : asset('assets/defaultProfile.png') }}"
                            alt=""
                            width="34"
                            height="34"
                            />

                            <p class="course-t m-0 mx-2"> {{ $publicComment->user->name }} </p>
                            <p class="course-n m-0 mx-2">{{ $publicComment->created_at->diffForHumans() }}</p>
                        </div>
                        <div class="d-flex">
                            {{-- <p class="course-n m-0 mx-2 align-items-center"> <i class="fa-solid fa-users ms-2"></i></p> --}}
                            {{-- dropdown start --}}
                            @if($publicComment->added_by == auth()->user()->id)
                            <div class="more mx-4 my-2 dropdown">
                                <i class="fa-solid fa-ellipsis-vertical" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton1">
                                    <li>
                                        <a class="dd-item dropdown-item py-2 border-bottom" href="#">Edit</a>
                                    </li>
                                    <li>
                                        <a href="/deleteIndustryComment/{{ $publicComment->id }}" class="dd-item dropdown-item py-2 border-bottom" >Delete</a>
                                    </li>
                                </ul>
                            </div>
                            @endif
                            {{-- dropdown end --}}
                        </div>

                    </div>
                    <div class="mx-4">
                        <p class="course-n mx-4 my-3">
                            {{ $publicComment->comment}}
                        </p>
                    </div>
                @endforeach
            </div>


            <form action="/addIndustryPublicComment/{{ $classroomIndustryWork->id }}" method="POST">
                @csrf
                <div class="d-flex mt-5">
                    <img class="st-img rounded-circle mx-3 me-0" src="{{ auth()->user()->image ? asset(auth()->user()->image) : asset('assets/defaultProfile.png') }}" alt="" width="42" height="42"/>
                    <textarea name="public_comment" class="comment-box form-control ms-2 me-4" placeholder="Add a comment…" rows="1" style="border: 1px solid #29A3DA;"></textarea>
                    <button type="submit" class="btn announce-b2 px-3 me-3">Send</button>
                </div>
            </form>
        </div>
        <!-- end:public comment -->
        @if(auth()->user()->id != $classroom->added_by)
        <div class="d-flex justify-content-between flex-wrap">
            <div class="col-xl-6 col-md-12 col-sm-12 industry-card my-3 foy-industry-card foy-submit-card">
                <form action="/addIndustrySubmission/{{ $classroomIndustryWork->id  }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex justify-content-between m-4">
                        <p class="m-0 ">Your work</p>
                        <p class="m-0 ">Missing</p>
                    </div>
                    <hr class="style1 my-2">
                    {{-- start:submitted Attachments --}}
                    @if($submission)
                         @include('components.industrySubmission.submissionList.submissionList')
                    @else
                        <div class="d-inline">
                            {{-- start:submission preview --}}
                            <div class="d-flex justify-content-between align-content-center m-3">
                                <div class="sortableImgThumbnailPreview col" id="sortableImgThumbnailPreview">
                                </div>
                            </div>
                            {{-- end:submission preview --}}
                            <div class="">
                                <div class="announce-icon m-2 mx-4">
                                    <div class="foy-image-upload">
                                        <input name="files[]" id="files" type="file" multiple accept="application/zip, application/msword, application/pdf, image/*, video/*" style="width: 42%; padding: 10px;"/>
                                        <label for="file-input" class="up-lable mt-4">
                                        <img src="{{ asset('assets/images/add-circle.png') }}" class="me-2"/>Add files or attachments
                                        </label>
                                    </div>
                                </div>
                            </div>
                            {{-- end:submitted Attachments --}}
                            <button type="submit" class="sub-button mt-2 mb-4"><img src="{{ asset('assets/images/tick-circle.png') }}">Submit</button>
                        </div>
                    @endif

                </form>
            </div>

            {{-- start:private comment --}}
            <div class="col-xl-6 col-md-12 col-sm-12 industry-card my-3 foy-industry-card">
                <div class="comments">
                    <div class="d-flex m-4  justify-content-between align-content-center">
                        <p class="m-0 ms-3 "><img src="{{ asset('assets/images/messages.png') }}" class="me-2">{{ $privateComments->count() }} class comments</p>
                        <a href="#" style="text-decoration:none; color: black; ">
                            <p class="m-0">Show more<i class="fa-solid fa-angles-right ms-1"></i></p>
                        </a>
                    </div>
                    <hr class="style1 my-2" />
                    @foreach($privateComments as $privateComment)
                        <div class="d-flex m-3 justify-content-between">
                            <div class="d-flex justify-content-between align-items-center">
                                <img
                                class="st-img rounded-circle mx-4 me-0"
                                src="{{ $privateComment->user->image ?  $privateComment->user->image : asset('assets/defaultProfile.png') }}"
                                alt=""
                                width="34"
                                height="34"
                                />
                                <p class="course-t m-0 mx-2">{{ $privateComment->user->name }}</p>
                                <p class="course-n m-0 mx-2">{{ $privateComment->created_at->diffForHumans() }}</p>
                            </div>
                              {{-- dropdown start --}}
                              @if($privateComment->added_by == auth()->user()->id)
                              <div class="more mx-4 my-2 dropdown">
                                  <i class="fa-solid fa-ellipsis-vertical" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                  <ul class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton1">
                                      <li>
                                          <a class="dd-item dropdown-item py-2 border-bottom" href="#">Edit</a>
                                      </li>
                                      <li>
                                          <a href="/deleteIndustryComment/{{ $privateComment->id }}" class="dd-item dropdown-item py-2 border-bottom" >Delete</a>
                                      </li>
                                  </ul>
                              </div>
                              @endif
                              {{-- dropdown end --}}
                        </div>
                        <div class="mx-4">
                            <p class="course-n mx-4 my-3">
                                lerom ipsom kjhasd jkha asj akljas alkj<br />
                                lerom ipsom kjhasd jkha asj akljas alkj ashkl
                            </p>
                        </div>
                    @endforeach
                </div>
                <form action="/addIndustryPrivateComment/{{ $classroomIndustryWork->id }}" method="POST">
                    @csrf
                    <div class="d-flex mb-5 mt-4">
                        <img class="st-img rounded-circle mx-3 me-0" src="{{ auth()->user()->image ? asset(auth()->user()->image) : asset('assets/defaultProfile.png') }}" alt="" width="42" height="42"/>
                        <textarea class="comment-box form-control ms-2 me-4" name="private_comment" placeholder="Add a comment…" rows="1" style="border:1px solid #29A3DA;"></textarea>
                        <button type="submit" class="btn announce-b2 px-3 me-3">Send</button>
                    </div>
                </form>

            </div>
            <!-- end:private comment -->
        </div>
        @endif

    </div>
</section>
{{-- end:main section --}}
@endsection
