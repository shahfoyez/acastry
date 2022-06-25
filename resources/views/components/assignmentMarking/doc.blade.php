<div class='col-sm-4 foy-as-RearangeBox foy-as-imgThumbContainer'>
    <div class='foy-as-head'>
        <div class="foy-author-imgThumbnail" >
            <img class="" src="{{ asset('assets/image.jpg') }}">
        </div>
        <div>
            <a class="text-decoration-none" href="#"><p class='foy-as-an'> {{ $submission->user->name }}  </p></a>
        </div>
        <div>
        <a class="text-decoration-none" href="/assignmentSubmissionSingle/{{ $submission->user->id }}/{{ $assignment->id }}"><p class='foy-as-attachment'>{{ $submission->assignmentAttachment->count() }} attachments</p></a>
        </div>
    </div>
    <div class="foy-as-thumbnail foy-border-radius-none" >
        <a href="{{ asset($attachment->path) }}" download="" ><img src="{{ asset($attachment->path) }}"></a>
    </div>
    <div class='foy-as-info'>
        <div>
            <a href="{{ $attachment->path }}" download="" ><p class='foy-as-imgName oneline'>
                @php
                    $path = explode('/', $attachment->path);
                    $imageName= end($path);
                @endphp
                {{  $imageName }}
            </p></a>
        </div>
        <div>
            <p class='foy-as-type'>DOC</p>
        </div>
    </div>
</div>