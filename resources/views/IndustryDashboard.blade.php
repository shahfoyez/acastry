@extends('layouts.industryMaster')
@section('content')
{{-- start:main section --}}
<style>
    .id-bt {
    background: #ffffff;
    box-shadow: 8.29231px 5.18269px 31.0962px rgb(202 202 202 / 13%);
    border-radius: 5px;
    padding: 9px 28px;
}
.foy-iw-search-input{
    box-shadow: 8.29231px 5.18269px 31.0962px rgb(202 202 202 / 13%);
    border: none;
    border-radius: 5px;
    padding: 10px;
    width: 80%;
}
</style>
<section class="main-content">
    <div class="container">
        @if (session()->has('message'))
                {{-- @include('components.alertBar') --}}
            <div class="alert mt-5">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                {{ session('message') }}
            </div>
        @endif
        <div class="d-flex justify-content-between flex-wrap align-items-center mt-5">
            <div class="col-12 col-lg-6 col-xl-8 col-sm-12 my-2">
                <form action="col-md-6">
                    <input type="text" id="fname" class="foy-iw-search-input col-md-10 " name="fname" placeholder="Search job title or keyword">
                    <button type="button" class="btn announce-b2 px-3 mx-2"><i class="fa-solid fa-magnifying-glass"></i></i> Search</button>
                </form>
            </div>
            <div class="col-12 col-lg-6 col-xl-4 my-2">
              <button type="button dropdown" class="id-bt btn px-3 mx-2 ms-0"
                    id="dropdownMenuButton1"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Location<i class="fa-solid fa-angle-down mx-2"></i></button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dd-item dropdown-item" href="#">Location 1</a></li>
                <li>
                  <a class="dd-item dropdown-item" href="#">Location 2</a>
                </li>
                <li>
                  <a class="dd-item dropdown-item" href="#">Location 3</a>
                </li>
              </ul>
              <button type="button dropdown" class="id-bt btn px-3 mx-2 ms-0"
                    id="dropdownMenuButton2"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Keyword<i class="fa-solid fa-angle-down mx-2"></i></button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                <li><a class="dd-item dropdown-item" href="#">Keyword</a></li>
                <li>
                  <a class="dd-item dropdown-item" href="#">Keyword</a>
                </li>
                <li>
                  <a class="dd-item dropdown-item" href="#">Keyword</a>
                </li>
              </ul>
              <img  src="assets/filter.png" width="40"
                height="40"
                type="button"
                id="dropdownMenuButton3"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">

                <li><a class="dd-item dropdown-item disabled" href="#">Filter by :</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <a class="dd-item dropdown-item" href="#">Keyword</a>
                </li>
                <li>
                  <a class="dd-item dropdown-item" href="#">Keyword</a>
                </li>
              </ul>
            </div>
        </div>

        <div class="pc my-4">
            <p >Industry works<span class="dash-notification badge rounded-pill pb-1 ms-2"
              >{{ $industryWorks->count() }}</span></p>
        </div>

        <!-- industry-card-start -->
        @if($industryWorks->count()>0)
            @foreach($industryWorks as $industryWork)
            <div class="industry-card p-4 my-3">
            <div class="d-flex flex-wrap ">
                <div class="col-xl-7 col-sm-12">
                <div class="ic-pic-title d-flex">
                    <img
                    class="st-id-img rounded-circle"
                    src="{{ $user->image ? asset($user->image) : asset('assets/defaultProfile.png')}}"
                    alt=""
                    width="92"
                    height="92"
                />
                <div class="ms-3">
                    <p class="m-0 mb-1 id-title">{{ $user->name }}</p>
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
                    <p class="id-title-dt-col"><img src="{{ asset('assets/images/profile-2user.png') }}" class="mx-2">100 people added</p>
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

            <a href="/industrySubmit/{{ $industryWork->id }}" type="button" class="text-decoration-none btn announce-b2 px-3 my-2">
                View Details
            </a>

            </div>
            @endforeach
        @else
            <div class="alert mt-5">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                No work has been added
            </div>
        @endif
        <!-- industry-card-end -->
    </div>
    @include('modals.createIndustryWork')
</section>
{{-- end:main section --}}
@endsection
