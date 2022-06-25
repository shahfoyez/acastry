@if($attachment->type=='image/png' || $attachment->type=='image/jpeg')
    @include('components.industryMarking.image')
@elseif($attachment->type=='application/pdf')
    @include('components.industryMarking.pdf')
@elseif($attachment->type=='application/x-zip-compressed')
    @include('components.industryMarking.zip')
@elseif($attachment->type=='application/msword')
    @include('components.industryMarking.doc')
@elseif($attachment->type=='video/mp4')
    @include('components.industryMarking.video')
@endif