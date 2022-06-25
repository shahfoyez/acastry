@extends('layouts.classroomMaster')
@section('content')
{{-- start:main section --}}
<section class="main-content">
  <div class="container">
    @include('components.classHead')
    <div class="row">
      <div class="col-lg-9">
        @include('navbar.classNav')
        {{-- start:session message(error) --}}
        @if (session()->has('message'))
              @include('components.alertBar')
        @endif
        @if($uncategorised->count()<1  && $topics->count()<1)
            <div class="foy-empty">
                <div class="text-center">
                    <div class="col-12">
                        <img src="{{ asset('assets/images/tea.png') }}" class="foy-td-image py-5">
                    </div>
                </div>
            </div>
        @else
            @php
                $i=0;
            @endphp
            @foreach($uncategorised as $uncategorisesMP)
                @if($uncategorisesMP->material->topic_id == null)
                    @php
                        $material =$uncategorisesMP->material;
                        $i++;
                    @endphp
                    <div class="accordion my-2" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header foy-material" id="headingone">
                            <button
                                class="accordion-button collapsed st-card-assign col-lg-12 d-flex justify-content-between ab-color"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse{{ $i }}"
                                aria-expanded="false"
                                aria-controls="collapseone"
                            >
                                <div class="d-flex align-items-center col-position-relative">
                                    <div class="cd-date mx-3">
                                        @php
                                            $date= Carbon\Carbon::parse($uncategorisesMP->material->created_at)->format('M d');
                                            $orderdate = explode(' ', $date);
                                            $month   = $orderdate[0];
                                            $day  = $orderdate[1];
                                        @endphp
                                        <p class="cd-date-p1 m-0"> {{ $month }}</p>
                                        <p class="cd-date-p2 m-0"> {{ $day }}</p>
                                    </div>
                                    <div class="lvr vr"></div>
                                    <img
                                    class="st-img rounded-circle mx-3"
                                    src="{{ asset('assets/images/Group 3364222.png') }}"
                                    alt=""
                                    width="42"
                                    height="42"
                                    />
                                    <div class="course-tn">
                                    <div class="d-flex">
                                        <p class="course-t m-0 py-1">
                                            <a href="" class="foy-link stretched-link text-decoration-none oneline">New Material: {{ $material->title }}</a>
                                        </p>
                                        {{-- <i class="fa-solid fa-thumbtack mx-3"></i>
                                        <p class="course-n m-0">Pinned</p> --}}
                                    </div>
                                    <p class="course-n m-0 py-1">{{ $material->user->name }}</p>
                                    </div>
                                </div>
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
                                    <li><a class="dd-item dropdown-item" href="#">Edit</a></li>
                                    <li>
                                    <a class="dd-item dropdown-item" href="#">Delete</a>
                                    </li>
                                </ul>
                                </div>
                                <!-- dropdown end -->
                            </button>
                            </h2>
                            <div
                            id="collapse{{ $i }}"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingone"
                            data-bs-parent="#accordionExample"
                            >
                            <div class="accordion-body">
                                <div>
                                <p class="announce-txt-p m-2 ms-4">
                                    {{ $material->title }}
                                </p>
                                @include('components.material.materialSlider')

                                <hr class="style1 my-4" />
                                @include('components.material.materialAccordionFooter')
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

            @foreach($topics as $topic)
                @include('components.material.topicHeading')
                @if($topic->material->count()>0)
                    @foreach($topic->material as $material)
                    @php
                        $i++;
                    @endphp
                    <div class="accordion my-2" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header foy-material" id="headingone">
                            <button
                                class="accordion-button collapsed st-card-assign col-lg-12 d-flex justify-content-between ab-color"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse{{ $i }}"
                                aria-expanded="false"
                                aria-controls="collapseone"
                            >
                                <div class="d-flex align-items-center col position-relative">
                                    <div class="cd-date mx-3">
                                        @php
                                            $date= Carbon\Carbon::parse($material->created_at)->format('M d');
                                            $orderdate = explode(' ', $date);
                                            $month   = $orderdate[0];
                                            $day  = $orderdate[1];
                                        @endphp
                                        <p class="cd-date-p1 m-0"> {{ $month }}</p>
                                        <p class="cd-date-p2 m-0"> {{ $day }}</p>
                                    </div>
                                    <div class="lvr vr"></div>
                                    <img
                                    class="st-img rounded-circle mx-3"
                                    src="{{ asset('assets/images/Group 3364222.png') }}"
                                    alt=""
                                    width="42"
                                    height="42"
                                    />
                                    <div class="course-tn">
                                    <div class="d-flex">
                                        <p class="course-t m-0 py-1">
                                            <a href="" class="foy-link stretched-link text-decoration-none oneline">New Material: {{ $material->title }}</a></p>
                                        {{-- <i class="fa-solid fa-thumbtack mx-3"></i>
                                        <p class="course-n m-0">Pinned</p> --}}
                                    </div>
                                    <p class="course-n m-0 py-1">{{ $material->user->name }}</p>
                                    </div>
                                </div>
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
                                    <li><a class="dd-item dropdown-item" href="#">Edit</a></li>
                                    <li>
                                    <a class="dd-item dropdown-item" href="#">Delete</a>
                                    </li>
                                </ul>
                                </div>
                                <!-- dropdown end -->
                            </button>
                            </h2>
                            <div
                            id="collapse{{ $i }}"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingone"
                            data-bs-parent="#accordionExample"
                            >
                            <div class="accordion-body">
                                <div>
                                <p class="announce-txt-p m-2 ms-4">
                                    {{ $material->title }}
                                </p>
                                @include('components.material.materialSlider')

                                <hr class="style1 my-4" />
                                @include('components.material.materialAccordionFooter')
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            @endforeach
        @endif
      </div>


      <div class="col-lg-3 col-md-12">
          <button type="button" class="btn create-b my-2"  class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Create <img src="{{ asset('assets/add.png')}}" alt=""></button>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dd-item  dropdown-item"
              data-bs-toggle="modal"
              data-bs-target="#matarialsModal">
              Add material
            </a></li>
            <li><hr class="dropdown-divider my-0"></li>
            <li><a class="dd-item dropdown-item"
              data-bs-toggle="modal"
              data-bs-target="#addtopic">
              Add Topic</a></li>
            </ul>
            @if($classroom->topic->count()>0)
                <div class="notice card text-white my-2 align-items-center">
                    @foreach($classroom->topic as $topic)
                        <p class="notice-p"><a href="#" class="text-decoration-none">{{ $topic->topic }}</a></p>
                    @endforeach
                </div>
            @else
            <div class="foy-empty">
                <div class="text-center">
                    <div class="col-12">
                        <img src="{{ asset('assets/images/tea.png') }}" class="foy-td-image py-5">
                    </div>
                </div>
            </div>
            @endif
      </div>
    </div>
  </div>
  {{-- include here to avoid preview conflict --}}
  @include('modals.createMaterial')
  @include('modals.createTopic')
</section>
{{-- end:main section --}}
@endsection
