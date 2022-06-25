<div class='foy-post-RearangeBox col-lg-2 col-md-3 foy-post-imgThumbContainer'>
    <a href="{{ asset($attachment->path) }}" download><i class='fa-solid fa-cloud-arrow-down foy-action-button' download>
    </i></a>
    <div class="foy-post-imgThumbnail" >
        <video id="bb" class="foy-video foy-blurEffect" height="100%" width="100%">
            <source src="{{ asset($attachment->path) }}" type=video/mp4>
            <source src= "{{ asset('asset/videos/error.webm') }}" type=video/webm>
        </video>
        <div class="foy-content">
            <div class="foy-play">►</div>
        </div>
    </div>
    <div class='foy-post-info'>
        <div>
            <a href="video.mp4" target="_blank" >
                <p class='foy-post-imgName oneline'>
                    @php
                        $path = explode('/', $attachment->path);
                        $imageName= end($path);
                    @endphp
                    {{  $imageName }}
                </p>
            </a>
        </div>
        <div>
            <p class='foy-post-type'>Video</p>
        </div>
    </div>
</div>
