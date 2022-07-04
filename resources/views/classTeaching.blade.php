@extends('layouts.dashboardMaster')
@section('content')
<section class="main-content mb-5">
    <div class="container">
        <div class="row ">
            <div class="pc my-4">
                <p >Teaching<span class="dash-notification badge rounded-pill pb-1 ms-2"
                  >{{$memberClassrooms->count() }}</span></p>
            </div>
            <!-- classroom-card start-->
            @foreach($memberClassrooms as $memberClassroom)
            @php
                $as=0;
                $classroom =  $memberClassroom->classroom;
                foreach($classroom->classroomPost as $post){
                    if($post->assignment){
                        $as++;
                    }
                }
            // dd($classroom->classroomIndustryWork->count());
            @endphp
            <div class="col-sm-12 col-md-6 col-xl-4 my-4 ">
                <div class="card h-100  bg-body col-12" style="border-radius: 15px;">
                    <img src="{{ asset('assets/Group 33641.png') }}" class="card-img-top" style="height: 110px;" alt="...">
                    <div class="text-block">
                    <a href="/classroomStream/{{ $classroom->id }}" class="text-decoration-none foy-link1"><h5>{{  Illuminate\Support\Str::limit( $classroom->name, 30, ' ...'); }} </h5></a>
                    <p>Section {{ $classroom->section }}</p>
                    </div>
                    <div class="card-body">
                    <div class="d-flex  image-block align-items-center">
                        <img class="st-id-img rounded-circle" src="{{ $classroom->user->image ? asset($classroom->user->image) : asset('assets/defaultProfile.png') }}" height="64" width="64">
                        <h6 class="id-title-dt p-2 m-0 mt-2">{{ $classroom->user->name }}</h6>
                    </div>
                    <div class="my-5 p-1" ></div>
                    <div class="d-flex justify-content-between my-4" >
                        <a class="text-decoration-none" href="/classroomClassworks/{{ $classroom->id }}"><p class="m-0 id-title-classroom"><i class="fa-solid fa-pen-to-square me-1"></i>{{ $as }} Assignments</p></a>
                        <a class="text-decoration-none" href="/classroomMaterials/{{ $classroom->id }}"> <p class="m-0 id-title-classroom"><i class="fa-solid fa-briefcase me-1"></i>{{ $classroom->classroomIndustryWork->count() }} Industry work</p></a>
                        <a class="text-decoration-none" href="/classroomClasswork/{{ $classroom->id }}"> <p class="m-0 id-title-classroom"><i class="fa-solid fa-users me-1"></i>{{ ($classroom->classroomMembers->count() - 1) }} Members</p></a>
                      </div>
                    <hr>
                    <style>
                        .fot-cIndustries1{
                            position: absolute;
                            left: 9%
                        }
                        .fot-cIndustries2{
                            position: absolute;
                            left: 9%;
                        }
                    </style>
                    <div>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center fot-cIndustries">
                                @php
                                    $count=0;
                                @endphp
                                @foreach($classroom->classroomIndustryWork as $industryWork)
                                <?php
                                $industryWork = $industryWork->industryWork;

                                ?>
                                    <img class="st-id-img rounded-circle fot-cIndustries{{ $count }}" src="{{ $industryWork->user->image ? asset($industryWork->user->image) : asset('assets/defaultProfile.png') }}" height="42" width="42">
                                    @php
                                        $count++;
                                    @endphp
                                    @if($count>3)
                                        @break
                                    @endif
                                @endforeach
                                @if($classroom->classroomIndustryWork->count() > 3)
                                    <span class="font-weight-bold id-title-dt ps-1" style="font-size: 12px;">+more</span>
                                @endif
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="/classroomClassworks/{{ $classroom->id }}"><img src="{{ asset('assets/images/Vector (1).png ') }}" class="mx-2" height="21" width="22"></a>
                                <a href="/classroomMaterials/{{ $classroom->id }}"><img src="{{ asset('assets/images/folder-2.png') }}" class="mx-2" height="21" width="22"></a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            @endforeach

            <!-- classroom-card-end-->
        </div>
</section>
@endsection
