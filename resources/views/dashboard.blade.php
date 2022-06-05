@extends('layouts.dashboardMaster')
@section('content')
<!-- Begin Page Content -->
<section class="main-content">
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
                                    <p>Pinned class</p>
                                    <img class="mx-2 mt-1" src="{{ asset('assets/redPin.png') }}" alt="" width="16" height="16"
                                    />
                                </div>
                            </div>
                            <div class="justify-content-between">
                                <div class="row flex-wrap">
                                    @foreach ($pins as $pin)
                                    <div class="col-sm-12 col-lg-6 col-md-6 p-2 ">
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
                            <div class="pc d-flex my-3">
                                <div class="col-6 d-flex">
                                    <p>
                                        Teaching<span class="dash-notification badge rounded-pill pb-1 ms-2">{{ $teachings->count() }}</span>
                                    </p>
                                </div>
                                <div class="col-6 text-end">
                                    <p class="as-dt">
                                        <a href="" class="foy-see-more">view all</a>
                                    </p>
                                </div>
                            </div>
                            @foreach ($teachings as $teaching)
                                <div class="st-card col-lg-12 d-flex justify-content-between py-3 my-2 ">
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
                            <div class="pc d-flex my-3">
                                <div class="col-6 d-flex">
                                    <p>Joined<span class="dash-notification badge rounded-pill pb-1 ms-2"
                                    >{{ $joins->count() }}</span></p>
                                </div>
                                <div class="col-6 text-end">
                                    <p class="as-dt">view all</p>
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
                        <div class="pc d-flex my-3">
                            <div class="col-6 d-flex">
                                <p >Star students<span class="dash-notification badge rounded-pill pb-1 ms-2"
                                >3</span></p>
                            </div>
                            <div class="col-6 text-end">
                                <p class="as-dt">view all</p>
                            </div>
                        </div>



                        <div class="st-card col-lg-12 d-flex justify-content-between py-3 my-2">
                            <div class="d-flex align-items-center">
                                <div class="lvr vr mx-4"></div>
                                <img
                                class="st-img rounded-circle"
                                src="assets/pexels-italo-melo-2379004.jpg"
                                alt=""
                                width="52"
                                height="52"
                                />
                                <div class="course-tn mx-4">
                                <div class="d-flex">
                                    <p class="course-t m-0 ">Penelope
                                    Chloe</p>
                                    <img class="mx-3" src="assets/star1.png" alt="">
                                </div>
                                <p class="course-n m-0">Penelope
                                    Chloe@gmail.com</p>
                                </div>
                            </div>
                            <!-- dropdown start -->
                            <div class="more p-2 mx-4 my-2 dropdown">
                                <i
                                class="fa-solid fa-ellipsis-vertical"
                                type="button"
                                id="dropdownMenuButton1"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            ></i>
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
                        </div>
                        <!-- star-student-end -->

                        <div class="st-card col-lg-12 d-flex justify-content-between py-3 my-2">
                            <div class="d-flex align-items-center">
                                <div class="lvr vr mx-4"></div>
                                <img
                                class="st-img rounded-circle"
                                src="assets/pexels-italo-melo-2379004.jpg"
                                alt=""
                                width="52"
                                height="52"
                                />
                                <div class="course-tn mx-4">
                                <div class="d-flex">
                                    <p class="course-t m-0 ">Penelope
                                    Chloe</p>
                                    <img class="mx-3" src="assets/star1.png" alt="">
                                </div>
                                <p class="course-n m-0">Penelope
                                    Chloe@gmail.com</p>
                                </div>
                            </div>
                            <!-- dropdown start -->
                            <div class="more p-2 mx-4 my-2 dropdown">
                                <i
                                class="fa-solid fa-ellipsis-vertical"
                                type="button"
                                id="dropdownMenuButton1"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            ></i>
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
                        </div>
                        <!-- star-student-end -->

                        <div class="st-card col-lg-12 d-flex justify-content-between py-3 my-2">
                            <div class="d-flex align-items-center">
                                <div class="lvr vr mx-4"></div>
                                <img
                                class="st-img rounded-circle"
                                src="assets/pexels-italo-melo-2379004.jpg"
                                alt=""
                                width="52"
                                height="52"
                                />
                                <div class="course-tn mx-4">
                                <div class="d-flex">
                                    <p class="course-t m-0 ">Penelope
                                    Chloe</p>
                                    <img class="mx-3" src="assets/star1.png" alt="">
                                </div>
                                <p class="course-n m-0">Penelope
                                    Chloe@gmail.com</p>
                                </div>
                            </div>
                            <!-- dropdown start -->
                            <div class="more p-2 mx-4 my-2 dropdown">
                                <i
                                class="fa-solid fa-ellipsis-vertical"
                                type="button"
                                id="dropdownMenuButton1"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            ></i>
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
                        </div>
                        <!-- star-student-end -->
                    </div>
                    {{-- end:left --}}


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


                            {{-- <div class="assignment-box d-flex p-3">
                                <div class="col-6">
                                <p class="assignment-title">Assignment 01</p>
                                <p class="as-sub m-0">Digital Signal Processing</p>
                                <p class="as-dt m-0">Today | 02:00 pm</p>
                                </div>
                                <div class="col-6 text-end">
                                <p class="as-sub">100 points</p>
                                </div>
                            </div> --}}
                        </div>

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
