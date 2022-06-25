<!-- start:slider -->
@if($material->materialAttachment->count()>0)
<div id="carouselControl{{ $material->id }}" class="carousel slide p-2" data-bs-interval="false">
    <div class="carousel-inner">
    <?php
            $chunks= $material->materialAttachment->chunk(3);
            $i=0;
            foreach($chunks as $chunk){
                // dd($chunk);
                $i++;
        ?>
        <div class="carousel-item {{  $i<=1 ? 'active' : '' }}">
            <div class="cards-wrapper">
                @foreach($chunk as $attachment)
                    @if($attachment->type=='image/png' || $attachment->type=='image/jpeg')
                        @include('components.postRearangebox.image')
                    @elseif($attachment->type=='application/pdf')
                        @include('components.postRearangebox.pdf')
                    @elseif($attachment->type=='application/x-zip-compressed')
                        @include('components.postRearangebox.zip')
                    @elseif($attachment->type=='application/msword')
                        @include('components.postRearangebox.doc')
                    @elseif($attachment->type=='video/mp4')
                        @include('components.postRearangebox.video')
                    @endif
                @endforeach
            </div>
        </div>
        <?php
            }
        ?>
    </div>
    @if($material->materialAttachment->count()>3)
        <a class="carousel-control-next next-width" href="#carouselControl{{ $material->id }}" role="button"  data-bs-slide="next">
            <span class="next-bt" aria-hidden="true">
                <i class="fas fa-angle-right "></i>
            </span>
        </a>
    @endif

</div>
@endif
<!-- end:slider -->
