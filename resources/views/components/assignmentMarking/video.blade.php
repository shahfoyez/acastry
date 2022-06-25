<div class='col-sm-4 foy-as-RearangeBox foy-as-imgThumbContainer'>
    <div class='foy-as-head'>
            <div class="foy-author-imgThumbnail" >
                <img class="" src="{{ asset('assets/image.jpg') }}">
            </div>
            <div>
                <a class="text-decoration-none" href="/assignmentSubmissionSingle/{{ $submission->user->id }}/{{ $assignment->id }}"><p class='foy-as-an'>{{ $submission->user->name }} </p></a>
            </div>
            <div>
            <a class="text-decoration-none" href="/assignmentSubmissionSingle/{{ $submission->user->id }}/{{ $assignment->id }}""><p class='foy-as-attachment'>{{        $submission->assignmentSubmissionAttachment->count() }} attachments</p></a>
            </div>
    </div>
    <div class="foy-as-imgThumbnail" >
        <video id="bb" class="foy-video foy-blurEffect foy-border-radius-none" height="100%" width="100%">
            <source src="{{ asset($attachment->path) }}" type=video/mp4>
            <source src= "{{ asset('assets/images/error.webm') }}" type=video/webm>
        </video>
        <div class="foy-content foy-content-as">
            <div class="foy-play">►</div>
        </div>
    </div>
    <div class='foy-as-info'>
        <div>
            <a href="video.mp4" target="_blank" >
                <p class='foy-as-imgName'>
                    @php
                    $path = explode('/', $attachment->path);
                    $imageName= end($path);
                @endphp
                {{  $imageName }}
                </p>
            </a>
        </div>
        <div>
            <p class='foy-as-type'>Video</p>
        </div>
    </div>
</div>
