<div class='col-sm-4 foy-as-RearangeBox foy-as-imgThumbContainer'>
    <div class='foy-as-head'>
            <div class="foy-author-imgThumbnail" >
                <img class="" src="{{ asset('assets/image.jpg') }}">
            </div>
            <div>
                <!-- <img src="star.png"> -->
                <a class="text-decoration-none" href="/industrySubmissionSingle/{{ $submission->user->id }}/{{ $industryWork->id }}/{{ $submission->id }}"><p class='foy-as-an'>{{ $submission->user->name }} <img class="foy-star-student" src="{{ asset('assets/star.png') }}"></p></a>
            </div>
            <div>
            <a class="text-decoration-none" href="/industrySubmissionSingle/{{ $submission->user->id }}/{{ $industryWork->id }}/{{ $submission->id }}"><p class='foy-as-attachment'>{{ $submission->iwsAttachment->count() }} attachments</p></a>
            </div>
    </div>
    <!-- <a href="pdf.pdf" download><i class='fa-solid fa-download foy-action-button foy-action-button-as' download> -->
    </i></a>
    <div class="foy-as-thumbnail foy-border-radius-none" >
        <a href="{{ asset($attachment->path) }}" download="" ><img src="{{ asset('assets/images/pdf.png') }}"></a>
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
            <p class='foy-as-type'>PDF</p>
        </div>
    </div>
</div>
