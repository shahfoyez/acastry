@extends('layouts.classroomMaster')
@section('content')
{{-- start:main section --}}
<section class="main-content">
    <div class="container">
        @include('components.classHead')
        @include('navbar.classNav')

        <!-- Teachres start -->
        <!-- headline start -->
        <div class="pc d-flex my-3">
            <div class="col-6 d-flex">
                <p>Teacher <span class="dash-notification badge rounded-pill pb-1"
                    >{{ 1 }}</span></p>
            </div>
        </div>
        <!-- headline end -->
        <!-- Teachers body start -->
        <div class="st-card col-lg-12 d-flex align-items-center justify-content-between py-3 px-4 my-2">
            <div class="d-flex">
                <img class="st-img rounded-circle mx-2" src="{{ $teacher->user->image ? asset($teacher->user->image) : asset('assets/defaultProfile.png')}}" alt="" width="42" height="42"
                />
                <div class="lvr vr mx-2"></div>
                <div class="course-tn">
                    <p class="course-t m-0">{{ $teacher->user->name }}</p>
                    <p class="course-n m-0">Host</p>
                </div>
            </div>
            <!-- dropdown start -->
            <div class="more mx-3 dropdown">
                <i class="fa-solid fa-ellipsis-vertical" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>
                <ul class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dd-item dropdown-item py-2 border-bottom" href="#">Edit</a></li>
                    <li><a class="dd-item dropdown-item py-2 border-bottom" href="">Unpin</a></li>
                </ul>
            </div>
            <!-- dropdown end -->
        </div>
        <!-- Teachers body end -->
        <!-- Teachers end -->


        <!-- Students start -->
        <div class="pc d-flex my-3">
            <div class="col-6 d-flex">
            <p>Students <span class="dash-notification badge rounded-pill pb-1"
                >{{ $students->count() }}</span></p>
            </div>
        </div>
        @if ($students->count()>0)
            <div class="col-12 m-auto">
                <div class="st-table-title d-flex justify-content-between">
                    <p class="sta-p m-4">Student name</p>
                    <p class="sta-p-2 m-4">Email address</p>
                    <p></p>
                </div>

                @foreach($students as $student)
                    <div class="st-table-body d-flex justify-content-between align-items-center py-3 px-4 my-2" >
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="lvr vr mx-4"></div>
                            <img class="st-img rounded-circle" src="{{ $student->user->image ? asset($student->user->image) : asset('assets/defaultProfile.png')}}" alt="" width="42" height="42" />
                            <p class="st-card-p m-0 mx-2">{{ $student->user->name }}</p>
                        </div>
                        <div class="email-add d-flex align-items-center justify-content-between">
                            <i class="fa-regular fa-envelope fa-xl st-card-p2"></i>
                            <p class="st-card-p2 m-0 mx-2">{{ $student->user->email }}</p>
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
