<div class='foy-post-RearangeBox col-lg-3 col-md-3 foy-post-imgThumbContainer'>
    {{-- <a href="{{ asset($attachment->path) }}" download>
        <i class='fa-solid fa-cloud-arrow-down foy-action-button' download></i>
    </a> --}}
    <div class="foy-post-thumbnail" >
        <a href="{{ asset($attachment->path) }}" download="" ><img src="{{ asset('assets/images/doc.png') }}"></a>
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
            <p class='foy-post-type'>DOC</p>
        </div>
    </div>
</div>
