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
              {{-- @include('components.alertBar') --}}
              <div class="alert mt-5">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                {{ session('message') }}
            </div>
        @endif
        {{-- end:session message(error) --}}

        @if($uncategorised->count()<1  && $topics->count()<1)
            <div class="foy-empty">
                <div class="text-center">
                    <div class="col-12">
                        <img src="{{ asset('assets/images/tea.png') }}" class="foy-td-image py-5">
                    </div>
                </div>
            </div>
        @else
            {{-- start:Uncategory classwork --}}
            @php
                $i=0;
            @endphp
            @foreach($uncategorised as $uncategorisesAP)
            @if($uncategorisesAP->assignment->topic_id == null)
                @php
                    $assignment =$uncategorisesAP->assignment;
                    $i++;
                @endphp
                <div class="accordion my-2" id="accordionExample">
                    <div class="accordion-item">
                        @include('components.classwork.accordionHeader')
                        <div id="collapse{{ $i }}" class="accordion-collapse collapse" aria-labelledby="heading"
                        data-bs-parent="#accordionExample"
                        >
                        <div class="accordion-body">
                            <div>
                            <p class="announce-txt-p m-2 ms-4">
                                    {{ $assignment->instruction? $assignment->instruction : '' }}
                            </p>

                            @include('components.classwork.assignmentSlider')

                            <hr class="style1 my-4" />
                            @include('components.classwork.assignmentAccordionFooter')
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
            {{-- end:Uncategory classwork --}}

            {{-- start:topic category classwork --}}
            @foreach($topics as $topic)
                @include('components.classwork.topicHeading')
                @if($topic->assignment->count()>0)
                    @foreach($topic->assignment as $assignment)
                    @php
                        $i++;
                    @endphp
                    <div class="accordion my-2" id="accordionExample">
                        <div class="accordion-item">
                            @include('components.classwork.accordionHeader')
                            <div id="collapse{{ $i }}" class="accordion-collapse collapse" aria-labelledby="heading"
                            data-bs-parent="#accordionExample"
                            >
                            <div class="accordion-body">
                                <div>
                                <p class="announce-txt-p m-2 ms-4">
                                    {{ $assignment->instruction? $assignment->instruction : '' }}
                                </p>

                                @include('components.classwork.assignmentSlider')

                                <hr class="style1 my-4" />
                                @include('components.classwork.assignmentAccordionFooter')
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            @endforeach
            {{-- end:topic category classwork --}}
        @endif
    </div>


        <div class="col-lg-3 col-md-12">
          <button type="button" class="btn create-b my-2"  class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Create <img src="{{ asset('assets/add.png')}}" alt=""></button>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li>
                <a class="dd-item  dropdown-item" data-bs-toggle="modal" data-bs-target="#assignmentModal">
                    Add Classwork
                </a>
            </li>
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
  @include('modals.createAssignment')
  @include('modals.createTopic')
</section>
{{-- end:main section --}}
@endsection
