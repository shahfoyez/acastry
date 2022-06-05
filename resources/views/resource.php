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
{{-- dropdown end --}}
{{ $teaching->classroom->user->image ? asset($teaching->classroom->user->image) : asset('assets/defaultProfile.png')}}

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
