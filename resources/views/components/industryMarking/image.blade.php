<div class='col-sm-4 foy-as-RearangeBox foy-as-imgThumbContainer'>
    <div class='foy-as-head'>
        <div class="foy-author-imgThumbnail" >
            <img class="" src="{{ asset('assets/image.jpg') }}">
        </div>
        <div>
            <a class="text-decoration-none" href="/industrySubmissionSingle/{{ $submission->user->id }}/{{ $industryWork->id }}/{{ $submission->id }}"><p class='foy-as-an'> {{ $submission->user->name }}   <img class="foy-star-student" src="{{ asset('assets/star.png') }}"></p></a>
        </div>
        <div>
        <a class="text-decoration-none" href="/industrySubmissionSingle/{{ $submission->user->id }}/{{ $industryWork->id }}/{{ $submission->id }}"><p class='foy-as-attachment'>{{ $submission->iwsAttachment->count() }} attachments</p></a>
        </div>
    </div>
    <div class="foy-as-imgThumbnail" >
        <a href="{{ asset($attachment->path) }}" target="_blank" ><img class="foy-border-none" src="{{ asset($attachment->path) }}"></a>
    </div>
    <div class='foy-as-info'>
        <div>
            <a href="{{ asset($attachment->path) }}" target="_blank" >
                <p class='foy-as-imgName oneline'>
                    @php
                        $path = explode('/', $attachment->path);
                        $imageName= end($path);
                    @endphp
                    {{  $imageName }}
                </p>
            </a>
        </div>
        <div>
            <p class='foy-as-type'>Image</p>
        </div>
    </div>
</div>
