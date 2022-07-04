@extends('layouts.classroomMaster')
@section('content')
{{-- start:main section --}}
<section class="main-content mb-5">
    <div class="container">
        {{-- @include('navbar.classNav') --}}

        <!-- Students start -->
        <div class="pc d-flex my-3">
            <div class="col-6 d-flex">
            <p>Stars <span class="dash-notification badge rounded-pill pb-1"
                >{{ $stars->count() }}</span></p>
            </div>
        </div>
        @if ($stars->count()>0)
            <div class="col-12 m-auto">
                <div class="st-table-title d-flex justify-content-between">
                    <p class="sta-p m-4 ms-5">Student name</p>
                    <p class="sta-p-2 m-4">Email address</p>
                    <p></p>
                </div>

                @foreach($stars as $student)
                    <div class="st-table-body d-flex justify-content-between align-items-center py-3 px-4 my-2" >
                        <div class=" d-flex col-md-11">
                            <div class="d-flex align-items-center col-md-7">
                                <div class="lvr vr mx-4"></div>
                                <img class="st-img rounded-circle" src="{{ $student->user->image ? asset($student->user->image) : asset('assets/defaultProfile.png')}}" alt="" width="42" height="42" />
                                <div class="d-flex mx-2">
                                    <p class="course-t m-0 oneline">{{ $student->classroomMember->user->name }}</p>
                                    <img class="ms-3" src="{{ asset('assets/images/star1.png') }}" alt=""><span class="dash-notification badge rounded-pill ms-2"
                                    >{{ $student->classroomMember->classroomStars->count() }}</span></>
                                </div>
                            </div>
                            <div class="email-add d-flex align-items-center">
                                <i class="fa-regular fa-envelope fa-xl st-card-p2"></i>
                                <p class="st-card-p2 m-0 mx-2">{{ $student->user->email }}</p>
                            </div>
                        </div>

                        <!-- dropdown start -->
                        <div class="more mx-4 dropdown">
                            <i class="fa-solid fa-ellipsis-vertical" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dd-item dropdown-item py-2 border-bottom" href="#">Send Mail</a></li>
                                <li><a class="dd-item dropdown-item py-2 border-bottom" href="">Mute</a></li>
                                <li><a class="dd-item dropdown-item py-2 border-bottom" href="">Block</a></li>
                            </ul>
                        </div>
                        <!-- dropdown end -->
                    </div>
                @endforeach
            </div>
        @else
            <div class="col-12 m-auto">
                <div class="st-table-title p-1 text-center">
                    <p class="sta-p m-4">No student has joined</p>
                </div>

                <div class="st-table-body align-items-center py-3 px-4 my-2" >
                    <div class="text-center">
                        <div class="col-12">
                        <img src="{{ asset('assets/images/none.png') }}" class="foy-td-image py-5">
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>
{{-- end:main section --}}
@endsection
