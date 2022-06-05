<!-- announce-card start -->
@if(auth()->user()->id == $classroom->added_by)
    <a class="st-card col-lg-12 d-flex justify-content-between py-2 px-2 my-2" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        <div class="d-flex m-2">
            <img
            class="st-img rounded-circle mx-2"
            src="{{ $classroom->user->image ? asset($classroom->user->image) : asset('assets/defaultProfile.png')}}"
            alt=""
            width="42"
            height="42"
            />
            <p class="say-same-p m-2 ms-4">Announce something ...</p>
        </div>
    </a>
    <form action="/addClassroomPost/{{ $classroom->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="collapse st-card col-lg-12 py-3 my-2" id="collapseExample">
            <div class="announce-txt m-3 p-2">
                <textarea name="title" class="form-control course-n" id="floatingTextarea" placeholder="Announcement..." rows="4"
                ></textarea>
            </div>
            <div class="d-flex justify-content-between align-content-center m-3">
                {{-- start:image preview --}}
                <div class="col-md-12 sortableImgThumbnailPreview" id="sortableImgThumbnailPreview">

                </div>
                {{-- end:image preview --}}

            </div>
            
            <div class="d-flex justify-content-between align-content-center">
                <div class="announce-icon m-2 ms-4">
                    <div class="foy-image-upload">
                        <input name="files[]" id="files" type="file" multiple accept="application/zip, application/msword, application/pdf, image/*, video/*"/>
                        <label for="file-input">
                        <img src="{{  asset('assets/images/Frame 33589.png') }}"/>
                        </label>
                    </div>
                </div>
                <div class="announce-postm-2 me-4 text-end">
                    <button class="btn announce-b1 px-3 mx-2" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false">
                    Cancel
                    </button>
                    <button type="submit" class="btn announce-b2 px-3">Post</button>
                </div>
            </div>
        </div>
    </form>
@endif
<!-- announce-card end -->