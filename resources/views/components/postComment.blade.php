@if($post->postComment->count()>0)
    @foreach($post->postComment as $comment)
        <div class="comments">
            <div class="d-flex m-3 mb-0 justify-content-between">
                <div class="d-flex justify-content-between align-items-center">
                    <img class="st-img rounded-circle mx-4 me-0" src="{{ $comment->user->image ? asset($comment->user->image) : asset('assets/defaultProfile.png')}}" alt="" width="34" height="34"/>
                    <p class="course-t m-0 mx-2">{{ $comment->user->name }}</p>
                    <p class="course-n m-0 mx-2">{{ $comment->created_at->diffForHumans() }}</p>
                </div>
                {{-- dropdown start --}}
                @if($comment->added_by == auth()->user()->id)
                    <div class="more mx-4 my-2 dropdown">
                        <i class="fa-solid fa-ellipsis-vertical" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>
                        <ul class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <a class="dd-item dropdown-item py-2 border-bottom" href="#">Edit</a>
                            </li>
                            <li>
                                <a href="/deletePostComment/{{ $comment->id }}" class="dd-item dropdown-item py-2 border-bottom" >Delete</a>
                            </li>
                        </ul>
                    </div>
                    @endif
                    {{-- dropdown end --}}
                {{-- <p class="course-n m-0 mx-2 align-items-center">Show More</p> --}}
            </div>
            <div class="mx-5">
                <p class="course-n mx-3 px-3">
                     {{ $comment->comment }}
                </p>
            </div>
        </div>
    @endforeach
@endif
<form action="/addPostComment/{{ $post->id }}" method="POST">
    @csrf
    <div class="d-flex mb-2">
        <img class="st-img rounded-circle mx-4 me-0" src="{{ auth()->user()->image ? asset(auth()->user()->image) : asset('assets/defaultProfile.png') }}"alt=""width="42"height="42"/>
        <textarea name="comment" class="comment-box form-control mx-4" placeholder="Add a comment…" rows="1"></textarea>
        <button type="submit" class="btn announce-b2 px-3 me-3">Send</button>
    </div>
</form>