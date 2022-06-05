<!-- start:general post card -->
<div class=" st-card col-lg-12 py-3 px-2 my-2">
    <div class="d-flex justify-content-between">
        <div class="d-flex">
            <img
                class="st-img rounded-circle mx-4"
                src="{{ $post->user->image ? asset($post->user->image) : asset('assets/defaultProfile.png')}}"
                alt=""
                width="42"
                height="42"
            />
            <div class="course-tn">
                <div class="d-flex">
                    <p class="course-t m-0">{{ $post->user->name }}</p>
                    @if($post->pin_status== 1)
                        <i class="fa-solid fa-thumbtack mx-3"></i>
                        <p class="course-n m-0">Pinned</p>
                    @endif
                </div>
                <p class="course-n m-0">{{ Carbon\Carbon::parse($post->created_at)->format('M d, Y') }}</p>
            </div>
        </div> 
        {{-- dropdown start --}}
        <div class="more p-2 mx-4 my-2 dropdown">
            <i class="fa-solid fa-ellipsis-vertical" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>
            <ul class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton1">
                <li>
                    <a class="dd-item dropdown-item py-2 border-bottom" href="#">Edit</a>
                </li>
                <li>
                    <a href="/deletePost/{{ $post->id }}" class="dd-item  dropdown-item py-2 border-bottom foy-dm-trigger" data-bs-toggle="modal"
                    data-bs-target="#confirmDelete" data-item="{{ $post->id }}">Delete</a>
                </li>
                @if ($post->pin_status==1)
                    <li>
                        <a class="dd-item dropdown-item py-2 border-bottom foy-dactive pe-none" tabindex="-1" aria-disabled="true">Pined</a>
                    </li>
                @else
                    <li>
                        <a class="dd-item dropdown-item py-2 border-bottom" href="/pinClass/{{ $post->pin_status==1 }}">Pin</a>
                    </li>
                @endif
            </ul>
        </div>
        <!-- dropdown end -->
    </div>
    <p class="announce-txt-p m-2 ms-4">
        {{ $post->generalPost->title }}
    </p>

    <!-- start:slider -->
    @php
        $chunks= $post->generalPost->generalPostAttachment->chunk(3);
        // dd($chunks);
        foreach($chunks as $chunk){
             foreach($chunk as $attachment){
                  
             }
        }
    @endphp
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
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
                        <a href="image.jpg" download>
                            <i class='fa-solid fa-cloud-arrow-down foy-action-button' download></i>
                        </a>
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
        </div>
        <a class="carousel-control-next next-width" href="#carouselExampleControls" role="button"  data-bs-slide="next">
        <span class="next-bt" aria-hidden="true">
            <i class="fas fa-angle-right "></i>
        </span>
        </a>
    </div>
    <!-- end:slider -->

    <hr class="style1 my-4" />
    <div class="comments">
        <div class="d-flex m-3 justify-content-between">
            <div class="d-flex justify-content-between align-items-center">
                <img
                class="st-img rounded-circle mx-4 me-0"
                src="assets/charlie-green-3JmfENcL24M-unsplash (1).jpg"
                alt=""
                width="34"
                height="34"
                />
                <p class="course-t m-0 mx-2">foyez ahmed</p>
                <p class="course-n m-0 mx-2">1 month ago</p>
            </div>
            <p class="course-n m-0 mx-2 align-items-center">Show More</p>
        </div>
        <div class="mx-4">
            <p class="course-n mx-4 my-3">
                lerom ipsom kjhasd jkha asj akljas alkj<br />
                lerom ipsom kjhasd jkha asj akljas alkj ashkl
            </p>
        </div>
    </div>
    <div class="d-flex">
        <img
        class="st-img rounded-circle mx-4 me-0"
        src="assets/download (3).jpg"
        alt=""
        width="42"
        height="42"
        />
        <textarea
        class="comment-box form-control mx-4"
        placeholder="Add a comment…"
        rows="1"
        ></textarea>
        <button type="button" class="btn announce-b2 px-3 me-3">Send</button>
    </div>
</div>
<!-- end:general post cart -->