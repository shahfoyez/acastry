<div class='foy-post-RearangeBox col-lg-2 col-md-3 foy-post-imgThumbContainer'>
    <a href="{{ asset($attachment->path) }}" download>
        <i class='fa-solid fa-cloud-arrow-down foy-action-button' download></i>
    </a>
    <div class="foy-post-thumbnail" >
        <a href="{{ asset($attachment->path) }}" target="_blank" ><img src="{{ asset('assets/images/pdf.png') }}"></a>
    </div>
    <div class='foy-post-info'>
        <div>
            <a href="{{ asset($attachment->path) }}" target="_blank" >
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
            <p class='foy-post-type'>PDF</p>
        </div>
    </div>
</div>
