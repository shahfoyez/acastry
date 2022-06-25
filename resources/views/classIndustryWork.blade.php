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

  </div>

  {{-- include here to avoid preview conflict --}}
  @include('modals.createAssignment')
  @include('modals.createTopic')
</section>
{{-- end:main section --}}
@endsection
