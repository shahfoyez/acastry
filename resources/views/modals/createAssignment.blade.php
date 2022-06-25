<!-- Assignment Modal -->
<div class="modal fade" id="assignmentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-top">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Assignment</h5>
            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
            ></button>
            </div>
            <div class="modal-body">
            <form action="/createAssignment/{{ $classroom->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="d-flex justify-content-between m-3">
                    <div class="points m-2 col-md-4">
                        <p>Points</p>
                        <input type="text" id="" name="points" class="form-select topic-input">
                    </div>
                    <div class="due m-2 col-md-4">
                        <p>Due</p>
                        <input type="datetime-local" id="birthdaytime" name="due_date_time" class="form-select topic-input">
                    </div>
                <div class="topic m-2 col-md-4">
                    <p>Topic</p>
                    <select class="form-select" name="topic_id" aria-label="Default select example" style="background-color: #F6F6F6;">
                    @if($classroom->topic->count()>0)
                        <option value="">No Topic</option>
                        @foreach($classroom->topic as $topic)
                            <option value="{{ $topic->id }}">{{ $topic->topic }}</option>
                        @endforeach
                    @else
                        <option value="">Please add some topics.</option>
                    @endif
                    {{-- <input type="text" id="" name="points" class="form-select topic-input"> --}}
                    {{-- <option value="0">No Topic</option>
                    <option value="1">One</option>
                    <option value="1">Two</option>
                    <option value="1">Three</option> --}}

                    </select>
                </div>
                </div>
                <div class="m-3 p-2">
                    <input class="form-control" name="title" id="floatingTextarea" placeholder="Assignment title goes here...">
                </div>
                <div class="announce-txt m-3 p-2">
                    <div class="form-floating">
                        <textarea class="form-control txt-area" name="instruction" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea course-n"
                        >Instructions (optional)</label
                        >
                    </div>
                </div>

                <div class="d-flex justify-content-between align-content-center m-3">
                    <div class="sortableImgThumbnailPreview col-md-12" id="sortableImgThumbnailPreview">
                    </div>
                </div>

                <div class="d-flex justify-content-between align-content-center modal-footer">
                <div class="announce-icon m-2 ms-4">
                    <div class="foy-image-upload">
                        <input id="files" type="file" name="files[]"  multiple accept="application/zip, application/msword, application/pdf, image/*, video/*"/>
                        <label for="file-input">
                            <img src="{{ asset('assets/images/Frame 33589.png') }}"/>
                        </label>
                    </div>
                </div>
                <div class="announce-postm-2 me-4 text-end ">
                <button type="button" class="btn announce-b1 px-3 mx-2" data-bs-dismiss="modal">
                    Cancel
                </button>
                <button type="submit" class="btn announce-b2 px-3">Post</button>
                </div>
            </div>
            </form>
            </div>
        </div>
    </div>
</div>
