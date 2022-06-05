<!-- start:general post card -->
<div class=" st-card col-lg-12 py-3 px-2 my-2">
    <div class="d-flex justify-content-between border-bottom pb-2">
        <div class="d-flex">
            <img
                class="st-img rounded-circle mx-4"
                src="{{ $post->user->image ? asset($post->user->image) : asset('assets/defaultProfile.png')}}"
                alt=""
                width="42"
                height="42"
            />
            <div class="course-tn">
                <div class="d-flex">
                    <p class="course-t m-0">{{ $post->user->name }}</p>
                    @if($post->pin_status== 1)
                        <i class="fa-solid fa-thumbtack mx-3"></i>
                        <p class="course-n m-0">Pinned</p>
                    @endif
                </div>
                <p class="course-n m-0">{{ Carbon\Carbon::parse($post->created_at)->format('M d, Y') }}</p>
            </div>
        </div> 
        {{-- dropdown start --}}
        @if(auth()->user()->id == $post->added_by)
            <div class="more mx-4 my-2 dropdown">
                <i class="fa-solid fa-ellipsis-vertical" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>
                <ul class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton1">
                    <li>
                        <a class="dd-item dropdown-item py-2 border-bottom" href="#">Edit</a>
                    </li>
                    <li>
                        <a href="/deletePost/{{ $post->id }}" class="dd-item  dropdown-item py-2 border-bottom foy-dm-trigger" data-bs-toggle="modal"
                        data-bs-target="#confirmDelete" data-item="{{ '/deletePost/'.$post->id }}">Delete</a>
                    </li>
                    @if ($post->pin_status==1)
                        <li>
                            <a class="dd-item dropdown-item py-2 border-bottom foy-dactive pe-none" tabindex="-1" aria-disabled="true">Pined</a>
                        </li>
                    @else
                        <li>
                            <a class="dd-item dropdown-item py-2 border-bottom" href="/pinClass/{{ $post->pin_status==1 }}">Pin</a>
                        </li>
                    @endif
                </ul>
            </div>
        @endif
        {{-- end:dropdown --}}
    </div>
    <p class="announce-txt-p m-2 ms-4">
        {{ $post->generalPost->title }}
    </p>

    <!-- start:slider -->
    @if($post->generalPost->generalPostAttachment->count()>0)
    <div id="carouselExampleControls" class="carousel slide" data-bs-interval="false">
        <div class="carousel-inner">
           <?php
                $chunks= $post->generalPost->generalPostAttachment->chunk(3);
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
        <a class="carousel-control-next next-width" href="#carouselExampleControls" role="button"  data-bs-slide="next">
            <span class="next-bt" aria-hidden="true">
                <i class="fas fa-angle-right "></i>
            </span>
        </a>
    </div>
    @endif
    <!-- end:slider -->

    <hr class="style1 my-4" />

    @include('components.postComment')
</div>
<!-- end:general post cart -->
