<!-- start:slider -->
@if($assignment->assignmentAttachment->count()>0)
<div id="carouselControl{{ $assignment->id }}" class="carousel slide px-2" data-bs-interval="false">
    <div class="carousel-inner">
    <?php
            $chunks= $assignment->assignmentAttachment->chunk(5);
            $i=0;
            foreach($chunks as $chunk){
                // dd($chunk);
                $i++;
        ?>
        <div class="carousel-item {{  $i<=1 ? 'active' : '' }}">
            <div class="cards-wrapper">
                @foreach($chunk as $attachment)
                    @if($attachment->type=='image/png' || $attachment->type=='image/jpeg')
                        @include('components.assignmentSubmission.image')
                    @elseif($attachment->type=='application/pdf')
                        @include('components.assignmentSubmission.pdf')
                    @elseif($attachment->type=='application/x-zip-compressed')
                        @include('components.assignmentSubmission.zip')
                    @elseif($attachment->type=='application/msword')
                        @include('components.assignmentSubmission.doc')
                    @elseif($attachment->type=='video/mp4')
                        @include('components.assignmentSubmission.video')
                    @endif
                @endforeach
            </div>
        </div>
        <?php
            }
        ?>
    </div>
    @if($assignment->assignmentAttachment->count()>5)
        <a class="carousel-control-next next-width" href="#carouselControl{{ $assignment->id }}" role="button"  data-bs-slide="next">
            <span class="next-bt" aria-hidden="true">
                <i class="fas fa-angle-right "></i>
            </span>
        </a>
    @endif
</div>
@endif
<!-- end:slider -->
