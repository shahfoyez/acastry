@extends('layouts.industryMaster')
@section('content')
{{-- start:main section --}}
<section class="main-content">
    <div class="container">

        @include('navbar.workNav')

        {{-- start:session message(error) --}}
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
                            <p class="m-0 mb-1 id-title-dt">Menlo Park, CA 94025, United States</p>
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
                                <p class="id-title-dt-col p-0 m-0"><img src="{{ asset('assets/images/profile-2user.png') }}" class="mx-2">{{ $industryWork->views }} Views</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-sm-12 d-flex align-items-center justify-content-end">
                    <a class="pt-bt mx-2">
                        <p class="cda-date-p2 m-0 mx-3" style="color: #29A3DA;">{{ $industryWork->points ? $industryWork->points : '0'  }}</p>
                        <p class="cda-date-p1 m-0">Points</p>
                      </a>
                      <a class="pt-bt mx-2">
                        <p class="cda-date-p2 m-0 mx-3" style="color: #29A3DA;">{{ $industryWork->added ? $industryWork->added : '0' }}</p>
                        <p class="cda-date-p1 m-0">Added</p>
                      </a>
                      <a class="pt-bt mx-2">
                        <p class="cda-date-p2 m-0 mx-3" style="color: #29A3DA;">{{ $industryWork->industryWorkSubmission->count() ? $industryWork->industryWorkSubmission->count() : '0' }}</p>
                        <p class="cda-date-p1 m-0">Submits</p>
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
            <div class="my-3 p-3">
                <p class="my-2 m-0 id-title"> {{ $industryWork->title }}</p>
                <p class="id-title-dt"> {{ $industryWork->instruction }} </p>
              </div>

            {{-- start:slider --}}
            @include('components.industrySubmission.industrySubmissionSlider')
            {{-- end:slider --}}
        </div>
        <!-- end:public comment -->
    </div>
</section>
{{-- end:main section --}}
@endsection
