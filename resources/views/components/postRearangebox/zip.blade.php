<div class='foy-post-RearangeBox foy-post-imgThumbContainer'>
    {{-- <a href="{{ asset($attachment->path) }}" download>
        <i class='fa-solid fa-cloud-arrow-down foy-action-button' download></i>
    </a> --}}
    <div class="foy-post-thumbnail" >
        <a href="{{ asset($attachment->path) }}" download="" ><img src="{{ asset('assets/images/zip.png') }}"></a>
    </div>
    <div class='foy-post-info'>
        <div>
            <a href="{{ asset($attachment->path) }}" download="" >
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
            <p class='foy-post-type'>ZIP</p></a>
        </div>
    </div>
</div>