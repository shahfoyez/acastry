<div class="m-3">
    <div class="cards-wrapper px-3">
        @foreach($submission->iwsAttachment as $attachment)
            @if($attachment->type=='image/png' || $attachment->type=='image/jpeg')
                @include('components.assignmentSubmission.submissionList.image')
            @elseif($attachment->type=='application/pdf')
                @include('components.assignmentSubmission.submissionList.pdf')
            @elseif($attachment->type=='application/x-zip-compressed')
                @include('components.assignmentSubmission.submissionList.zip')
            @elseif($attachment->type=='application/msword')
                @include('components.assignmentSubmission.submissionList.doc')
            @elseif($attachment->type=='video/mp4')
                @include('components.assignmentSubmission.submissionList.video')
            @endif
        @endforeach
    </div>
    <a href="#" class="sub-button text-decoration-none foy-link mt-2 mb-5"><img src="{{ asset('assets/images/tick-circle.png') }}"> UnSubmit</a>
</div>

