{{-- dropdown start --}}
<div class="more p-2 mx-4 my-2 dropdown">
    <i class="fa-solid fa-ellipsis-vertical" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>
    <ul class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton1">
        <li>
            <a class="dd-item dropdown-item py-2 border-bottom" href="#">Edit</a>
        </li>
        <li>
            <a href="/deleteClassroom/{{ $teaching->classroom->id }}" class="dd-item  dropdown-item py-2 border-bottom foy-dm-trigger" data-bs-toggle="modal"
            data-bs-target="#confirmDelete" data-item="{{ $teaching->classroom->id }}">Delete</a>
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
<div class="more mx-3 dropdown">
    <i class="fa-solid fa-ellipsis-vertical" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>
    <ul class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton1">
        <li><a class="dd-item dropdown-item py-2 border-bottom" href="#">Edit</a></li>
        <li><a class="dd-item dropdown-item py-2 border-bottom" href="/unpinClass/ ">Unpin</a></li>
    </ul>
</div>
{{-- dropdown end --}}
{{ $teaching->classroom->user->image ? asset($teaching->classroom->user->image) : asset('assets/defaultProfile.png')}}
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
<div class="carousel-item">
                <div class="cards-wrapper">
                    <div class='foy-post-RearangeBox foy-post-imgThumbContainer'>
                        <a href="image.jpg" download><i class='fa-solid fa-cloud-arrow-down foy-action-button' download>
                        </i></a>
                        <div class="foy-post-imgThumbnail" >
                            <video id="bb" class="foy-video foy-blurEffect" height="100%" width="100%">
                                <source src="video.mp4" type=video/mp4>
                                <source src= "error.webm" type=video/webm>
                            </video>
                            <div class="foy-content">
                                <div class="foy-play">►</div>
                            </div>
                        </div>
                        <div class='foy-post-info'>
                            <div>
                                <a href="video.mp4" target="_blank" ><p class='foy-post-imgName'>NewVideo.mp4</p></a>
                            </div>
                            <div>
                                <p class='foy-post-type'>Video</p>
                            </div>
                        </div>
                    </div>

                    <div class='foy-post-RearangeBox foy-post-imgThumbContainer d-none d-md-block'>
                        <a href="image.jpg" download><i class='fa-solid fa-cloud-arrow-down foy-action-button' download>
                        </i></a>
                        <div class="foy-post-imgThumbnail" >
                            <video id="bb" class="foy-video foy-blurEffect" height="100%" width="100%">
                                <source src="video.mp4" type=video/mp4>
                                <source src= "error.webm" type=video/webm>
                            </video>
                            <div class="foy-content">
                                <div class="foy-play">►</div>
                            </div>
                        </div>
                        <div class='foy-post-info'>
                            <div>
                                <a href="video.mp4" target="_blank" ><p class='foy-post-imgName'>NewVideo.mp4</p></a>
                            </div>
                            <div>
                                <p class='foy-post-type'>Video</p>
                            </div>
                        </div>
                    </div>
                    <div class='foy-post-RearangeBox foy-post-imgThumbContainer d-none d-md-block'>
                        <a href="image.jpg" download><i class='fa-solid fa-cloud-arrow-down foy-action-button' download>
                        </i></a>
                        <div class="foy-post-imgThumbnail" >
                            <video id="bb" class="foy-video foy-blurEffect" height="100%" width="100%">
                                <source src="video.mp4" type=video/mp4>
                                <source src= "error.webm" type=video/webm>
                            </video>
                            <div class="foy-content">
                                <div class="foy-play">►</div>
                            </div>
                        </div>
                        <div class='foy-post-info'>
                            <div>
                                <a href="video.mp4" target="_blank" ><p class='foy-post-imgName'>NewVideo.mp4</p></a>
                            </div>
                            <div>
                                <p class='foy-post-type'>Video</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="cards-wrapper">
                    <div class='foy-post-RearangeBox foy-post-imgThumbContainer'>
                        <a href="image.jpg" download><i class='fa-solid fa-cloud-arrow-down foy-action-button' download>
                        </i></a>
                        <div class="foy-post-imgThumbnail" >
                            <video id="bb" class="foy-video foy-blurEffect" height="100%" width="100%">
                                <source src="video.mp4" type=video/mp4>
                                <source src= "error.webm" type=video/webm>
                            </video>
                            <div class="foy-content">
                                <div class="foy-play">►</div>
                            </div>
                        </div>
                        <div class='foy-post-info'>
                            <div>
                                <a href="video.mp4" target="_blank" ><p class='foy-post-imgName'>NewVideo.mp4</p></a>
                            </div>
                            <div>
                                <p class='foy-post-type'>Video</p>
                            </div>
                        </div>
                    </div>
                    <div class='foy-post-RearangeBox foy-post-imgThumbContainer d-none d-md-block'>
                        <a href="image.jpg" download><i class='fa-solid fa-cloud-arrow-down foy-action-button' download>
                        </i></a>
                        <div class="foy-post-imgThumbnail" >
                            <video id="bb" class="foy-video foy-blurEffect" height="100%" width="100%">
                                <source src="video.mp4" type=video/mp4>
                                <source src= "error.webm" type=video/webm>
                            </video>
                            <div class="foy-content">
                                <div class="foy-play">►</div>
                            </div>
                        </div>
                        <div class='foy-post-info'>
                            <div>
                                <a href="video.mp4" target="_blank" ><p class='foy-post-imgName'>NewVideo.mp4</p></a>
                            </div>
                            <div>
                                <p class='foy-post-type'>Video</p>
                            </div>
                        </div>
                    </div>
                    <div class='foy-post-RearangeBox foy-post-imgThumbContainer d-none d-md-block'>
                        <a href="image.jpg" download><i class='fa-solid fa-cloud-arrow-down foy-action-button' download>
                        </i></a>
                        <div class="foy-post-imgThumbnail" >
                            <video id="bb" class="foy-video foy-blurEffect" height="100%" width="100%">
                                <source src="video.mp4" type=video/mp4>
                                <source src= "error.webm" type=video/webm>
                            </video>
                            <div class="foy-content">
                                <div class="foy-play">►</div>
                            </div>
                        </div>
                        <div class='foy-post-info'>
                            <div>
                                <a href="video.mp4" target="_blank" ><p class='foy-post-imgName'>NewVideo.mp4</p></a>
                            </div>
                            <div>
                                <p class='foy-post-type'>Video</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<div class="dropdown">
    <i class="fa-solid fa-plus crt-sty foy-create-button" type="button" id="dashboardCreateDropdown" data-bs-toggle="dropdown" aria-expanded="false"></i>
    <ul class="dropdown-menu dropdown-menu-left p-0" aria-labelledby="dashboardCreateDropdown">
        <li><a class="dd-item  dropdown-item py-2 border-bottom" data-bs-toggle="modal"
            data-bs-target="#createpopup">Create Classroom</a></li>
        <li><a class="dd-item  dropdown-item py-2 border-bottom" data-bs-toggle="modal"
            data-bs-target="#joinpopup">Join Classroom</a></li>
    </ul>
</div>


protected $guarded = [];
protected $with=['user','post','classIndustryWork'];
public function classroomMember(){
    return $this->belongsTo(ClassroomMember::class, 'classroom_id');
}
public function post(){
    return $this->hasMany(Post::class, 'classroom_id')->orderBy('created_at', 'desc');
}
public function user(){
    return $this->belongsTo(User::class, 'created_by');
}
public function classIndustryWork(){
    return $this->hasMany(ClassIndustryWork::class, 'classroom_id');
}

{{-- start:session message(error) --}}
    @if (session()->has('message'))
            @include('components.alertBar')
    @endif
{{-- end:session message(error) --}}

 Carbon\Carbon::parse($assignment->due_date)->format('M d, Y')}}




marking
{{-- <div class='col-sm-4 foy-as-RearangeBox foy-as-imgThumbContainer'>
                                    <div class='foy-as-head'>
                                            <div class="foy-author-imgThumbnail" >
                                                <img class="" src="{{ asset('assets/image.jpg') }}">
                                            </div>
                                            <div>
                                                <a class="text-decoration-none" href="#"><p class='foy-as-an'>Stella Zoe <img class="foy-star-student" src="{{ asset('assets/star.png') }}"></p></a>
                                            </div>
                                            <div>
                                            <a class="text-decoration-none" href="#"><p class='foy-as-attachment'>2 attachments</p></a>
                                            </div>
                                    </div>
                                    <div class="foy-as-imgThumbnail" >
                                        <video id="bb" class="foy-video foy-blurEffect foy-border-radius-none" height="100%" width="100%">
                                            <source src="video.mp4" type=video/mp4>
                                            <source src= "error.webm" type=video/webm>
                                        </video>
                                        <div class="foy-content foy-content-as">
                                            <div class="foy-play">►</div>
                                        </div>
                                    </div>
                                    <div class='foy-as-info'>
                                        <div>
                                            <a href="video.mp4" target="_blank" ><p class='foy-as-imgName'>NewVideo.mp4</p></a>
                                        </div>
                                        <div>
                                            <p class='foy-as-type'>Video</p>
                                        </div>
                                    </div>
                                </div>

                                <div class='col-sm-4 foy-as-RearangeBox foy-as-imgThumbContainer'>
                                    <div class='foy-as-head'>
                                        <div class="foy-author-imgThumbnail" >
                                            <img class="" src="{{ asset('assets/image.jpg') }}">
                                        </div>
                                        <div>
                                            <a class="text-decoration-none" href="#"><p class='foy-as-an'>Stella Zoe  <img class="foy-star-student" src="{{ asset('assets/star.png') }}"></p></a>
                                        </div>
                                        <div>
                                        <a class="text-decoration-none" href="#"><p class='foy-as-attachment'>2 attachments</p></a>
                                        </div>
                                    </div>
                                    <div class="foy-as-imgThumbnail" >
                                        <a href="image.jpg" target="_blank" ><img class="foy-border-none" src="{{ asset('assets/image.jpg') }}"></a>
                                    </div>
                                    <div class='foy-as-info'>
                                        <div>
                                            <a href="image.jpg" target="_blank" ><p class='foy-as-imgName'>MyImage.jpg</p></a>
                                        </div>
                                        <div>
                                            <p class='foy-as-type'>Image</p>
                                        </div>
                                    </div>
                                </div>

                                <div class='col-sm-4 foy-as-RearangeBox foy-as-imgThumbContainer'>
                                    <div class='foy-as-head'>
                                            <div class="foy-author-imgThumbnail" >
                                                <img class="" src="{{ asset('assets/image.jpg') }}">
                                            </div>
                                            <div>
                                                <!-- <img src="star.png"> -->
                                                <a class="text-decoration-none" href="#"><p class='foy-as-an'>Stella Zoe <img class="foy-star-student" src="{{ asset('assets/star.png') }}"></p></a>
                                            </div>
                                            <div>
                                            <a class="text-decoration-none" href="#"><p class='foy-as-attachment'>April 18, 2022</p></a>
                                            </div>
                                    </div>
                                    <!-- <a href="pdf.pdf" download><i class='fa-solid fa-download foy-action-button foy-action-button-as' download> -->
                                    </i></a>
                                    <div class="foy-as-thumbnail foy-border-radius-none" >
                                        <a href="pdf.pdf" download="" ><img src="{{ asset('assets/pdf.png') }}"></a>
                                    </div>
                                    <div class='foy-as-info'>
                                        <div>
                                            <a href="pdf.pdf" target="_blank" ><p class='foy-as-imgName'>MyPdfFile.pdf</p></a>
                                        </div>
                                        <div>
                                            <p class='foy-as-type'>PDF</p>
                                        </div>
                                    </div>
                                </div>

                                <div class='col-sm-4 foy-as-RearangeBox foy-as-imgThumbContainer'>
                                    <div class='foy-as-head'>
                                        <div class="foy-author-imgThumbnail" >
                                            <img class="" src="{{ asset('assets/image.jpg') }}">
                                        </div>
                                        <div>
                                            <a class="text-decoration-none" href="#"><p class='foy-as-an'>Stella Zoe  <img class="foy-star-student" src="{{ asset('assets/star.png') }}"></p></a>
                                        </div>
                                        <div>
                                        <a class="text-decoration-none" href="#"><p class='foy-as-attachment'>2 attachments</p></a>
                                        </div>
                                    </div>
                                    <div class="foy-as-thumbnail foy-border-radius-none" >
                                        <a href="doc.doc" download="" ><img src="{{ asset('assets/doc.png') }}"></a>
                                    </div>
                                    <div class='foy-as-info'>
                                        <div>
                                            <a href="doc.doc" download="" ><p class='foy-as-imgName'>MyDocFile.doc</p></a>
                                        </div>
                                        <div>
                                            <p class='foy-as-type'>DOC</p>
                                        </div>
                                    </div>
                                </div>

                                <div class='col-sm-4 foy-as-RearangeBox foy-as-imgThumbContainer'>
                                    <div class='foy-as-head'>
                                        <div class="foy-author-imgThumbnail" >
                                            <img class="" src="{{ asset('assets/image.jpg') }}">
                                        </div>
                                        <div>
                                            <a class="text-decoration-none" href="#"><p class='foy-as-an'>Stella Zoe  <img class="foy-star-student" src="{{ asset('assets/star.png') }}"></p></a>
                                        </div>
                                        <div>
                                        <a class="text-decoration-none" href="#"><p class='foy-as-attachment'>2 attachments</p></a>
                                        </div>
                                    </div>
                                    <div class="foy-as-thumbnail foy-border-radius-none" >
                                        <a href="zip.doc" download="" ><img src="{{ asset('assets/zip.png') }}"></a>
                                    </div>
                                    <div class='foy-as-info'>
                                        <div>
                                            <a href="zip.zip" download="" ><p class='foy-as-imgName'>MyZipFile.doc</p></a>
                                        </div>
                                        <div>
                                            <p class='foy-as-type'>ZIP</p></a>
                                        </div>
                                    </div>
                                </div> --}}
