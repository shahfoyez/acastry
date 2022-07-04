@extends('layouts.classroomMaster')
@section('content')
<style>
.announce-b3 {
    color: #1a3447;
    background: #fff;
    border-radius: 5px;
    padding: 8px 28px;
    border: 2px solid #1a3447;
}
.announce-b3:hover {
    color: #fff;
    background: #1a3447;
}
.foy-iw-added{
    color: #fff;
    border-radius: 5px;
    padding: 8px 28px;
    background: #4e9352;
}
.foy-iw-added:hover{
    color: #fff;
    background: #122413;
}
</style>
{{-- start:main section --}}
<section class="main-content mb-5">
  <div class="container">
    @include('components.classHead')
    <div class="row">
        <div class="col-lg-12">
        @include('navbar.classNav')
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
        @if($industryWorks->count()>0)
        @foreach($industryWorks as $industryWork)
        <div class="industry-card p-4 my-3">
          <div class="d-flex flex-wrap ">
            <div class="col-xl-7 col-sm-12">
              <div class="ic-pic-title d-flex">
                <img
                class="st-id-img rounded-circle"
                src="{{ $industryWork->user->image ? asset( $industryWorks->user->image) : asset('assets/defaultProfile.png')}}"
                alt=""
                width="92"
                height="92"
              />
              <div class="ms-3">
                <p class="m-0 mb-1 id-title">{{ $industryWork->user->name }}</p>
                <p class="m-0 mb-1 id-title-dt">Menlo Park, CA 94025, United States</p>
                <div class="d-flex id-title-dt">
                  <p><img src="{{ asset('assets/images/calendar-2.png') }}" class="me-2">{{ $industryWork->created_at->diffForHumans() }}</p>
                  <p><img src="{{ asset('assets/images/timer.png') }}" class="mx-2">
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
                <p class="id-title-dt-col"><img src="{{ asset('assets/images/profile-2user.png') }}" class="mx-2">{{ $industryWork->views ? $industryWork->views : '0' }} views</p>
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
          <div class="announce-txt my-3 p-3">
            <p class="my-2 m-0 id-title">
                {{ $industryWork->title }}
            </p>
            <p class="id-title-dt">
                {{ $industryWork->instruction }}
            </p>
          </div>

          <div class="d-flex">
            <a href="/classIndustryDetails/{{ $classroom->id }}/{{ $industryWork->id }}" type="button" class="btn announce-b3 px-3 my-2 me-3">View Details</a>
            @php
                $workExist=0;
            @endphp
            @foreach($classroomIndustryWorks as $classroomIndustryWork)
                @if ($industryWork->id == $classroomIndustryWork->iw_id)
                    @php
                        $workExist = 1;
                    @endphp
                    @break
                @endif
            @endforeach
            @if ($workExist == 1)
                <a href="#" type="button" class="btn foy-iw-added px-3 my-2">Added<i class="fa-solid fa-check ms-2"></i></a>
            @else
                <a href="/classIndustryAdd/{{ $classroom->id }}/{{ $industryWork->id }}" type="button" class="btn announce-b2 px-3 my-2">Add<i class="fa-regular fa-square-plus  ms-2"></i>
                </a>
            @endif

          </div>
        </div>
        @endforeach
        @else
            <div class="alert mt-5">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                No work found
            </div>
        @endif
        <!-- industry-card-end -->

  </div>

  {{-- include here to avoid preview conflict --}}
  @include('modals.createAssignment')
  @include('modals.createTopic')
</section>
{{-- end:main section --}}
@endsection
