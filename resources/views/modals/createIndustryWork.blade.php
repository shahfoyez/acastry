<!-- Assignment Modal -->
<div class="modal fade" id="createIndustryWork" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-top">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Industry Work</h5>
            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
            ></button>
            </div>
            <div class="modal-body">
            <form action="/createIndustryWork" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="d-flex justify-content-between m-3">
                    <div class="iw-points m-2 col-md-4">
                        <p>Points</p>
                        <input type="text" id="" name="points" class="form-select topic-input">
                    </div>
                    <div class="iw-due m-2 col-md-4">
                        <p>Due</p>
                        <input type="datetime-local" id="birthdaytime" name="due_date_time" class="form-select topic-input">
                    </div>
                    <div class="iw-subject m-2 col-md-4">
                        <p>Subject</p>
                        <select name="subject"
                        class="form-select"
                        aria-label="Default select example"
                        style="background-color: #F6F6F6;"
                        >
                            <option selected value="null">Subject</option>
                            <option value="english">English</option>
                            <option value="bengali">Bengali</option>
                            <option value="cse">Computer Science & Engineering</option>
                            <option value="eee">Electronics & Electrical Engineering</option>
                            <option value="civil">Civil Engineering</option>
                            <option value="architecture">Architecture</option>
                            <option value="politics">Political Science</option>
                        </select>
                    </div>
                    <div class="iw-keyword m-2 col-md-4">
                        <p>Keywords</p>
                        <input type="text" id="" name="keyword" class="form-select topic-input">
                    </div>


                </div>
                <div class="m-3 p-2">
                    <input class="form-control" name="title" id="floatingTextarea" placeholder="Assignment title goes here...">
                </div>
                <div class="announce-txt m-3 p-2">
                    <div class="form-floating">
                        <textarea class="form-control txt-area" name="instruction" id="floatingTextarea" placeholder="Describe yourself here..."></textarea>
                        <label for="floatingTextarea course-n mb-2"
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
