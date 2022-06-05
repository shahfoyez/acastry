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
                        @elseif($post->type =='assignment')
                            @include('components.streamMaterialCard')
                        @elseif($post->type =='general')
                            @include('components.streamGeneralPost')
                        @endif
                    @endforeach
                @endif
            </div>

        <!-- To-Do & To Review start-->
        <div class="col-lg-4 col-md-12">
            <div class="pc d-flex">
                <div class="col-6 d-flex">
                    <p class="as-tt">To Do <span class="dash-notification badge rounded-pill pb-1"
                    >3</span></p>
                </div>
                <div class="col-6 text-end">
                    <a class="as-dt" href="#">view all</a>
                </div>
            </div>
            <div class="assignment">
                <div class="assignment-box p-4 pb-3 position-relative">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="text-decoration-none stretched-link"><p class="assignment-title m-0 oneline">Assignment 01 check ne line please</p></a>
                            <p class="as-sub ms-2 m-0">100</p>
                        </div>
                        {{-- <p class="assignment-title oneline">Assignment 01 check ne line please</p>
                        <p class="as-sub d-inline float-end">100 points</p> --}}
                        <p class="as-sub mt-2 mb-0 oneline">Digital Signal Processing khebhevwcbekbchwe chwbhb</p>
                        <p class="as-dt m-0 d-block">Today | 02:00 pm</p>
                    </div>
                </div>
                <div class="assignment-box p-4 pb-3">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="assignment-title m-0 oneline">Assignment 01 check ne line please</p>
                            <p class="as-sub ms-2 m-0">100</p>
                        </div>
                        {{-- <p class="assignment-title oneline">Assignment 01 check ne line please</p>
                        <p class="as-sub d-inline float-end">100 points</p> --}}
                        <p class="as-sub mt-2 mb-0 oneline">Digital Signal Processing khebhevwcbekbchwe chwbhb</p>
                        <p class="as-dt m-0 d-block">Today | 02:00 pm</p>
                    </div>
                </div>
                <div class="assignment-box p-4 pb-3">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="assignment-title m-0 oneline">Assignment 01 check ne line please</p>
                            <p class="as-sub ms-2 m-0">100</p>
                        </div>
                        {{-- <p class="assignment-title oneline">Assignment 01 check ne line please</p>
                        <p class="as-sub d-inline float-end">100 points</p> --}}
                        <p class="as-sub mt-2 mb-0 oneline">Digital Signal Processing khebhevwcbekbchwe chwbhb</p>
                        <p class="as-dt m-0 d-block">Today | 02:00 pm</p>
                    </div>
                </div>
            </div>
            {{-- end:to do --}}

            {{-- start:to review --}}
            <div class="pc d-flex mt-5">
                <div class="col-6 d-flex">
                    <p class="as-tt">
                    To Review
                    <span class="dash-notification badge rounded-pill pb-1"
                        >3</span
                    >
                    </p>
                </div>
                <div class="col-6 text-end">
                    <a class="as-dt" href="#">view all</a>
                </div>
            </div>
            <div class="assignment">
                <div class="assignment-box d-flex p-4 pb-3">
                    <div class="col-12">
                        <p class="assignment-title d-inline">Assignment 01</p>
                        <p class="as-sub d-inline float-end">100 points</p>
                        <p class="as-sub mt-2 mb-0 d-block">Digital Signal Processing</p>
                        <p class="as-dt m-0 d-block">Today | 02:00 pm</p>
                    </div>
                </div>
                <div class="assignment-box d-flex p-4 py-3">
                    <div class="col-12">
                        <p class="assignment-title d-inline">Assignment 01</p>
                        <p class="as-sub d-inline float-end">100 points</p>
                        <p class="as-sub mt-2 mb-0 d-block">Digital Signal Processing</p>
                        <p class="as-dt m-0 d-block">Today | 02:00 pm</p>
                    </div>
                </div>
                <div class="assignment-box d-flex p-4 py-3">
                    <div class="col-12">
                        <p class="assignment-title d-inline">Assignment 01</p>
                        <p class="as-sub d-inline float-end">100 points</p>
                        <p class="as-sub mt-2 mb-0 d-block">Digital Signal Processing</p>
                        <p class="as-dt m-0 d-block">Today | 02:00 pm</p>
                    </div>
                </div>
            </div>
            {{-- end:to review --}}
        </div>
        <!-- end:To-Do & To Review-->
        </div>
    </div>
</section>
{{-- end:main section --}}
@endsection
