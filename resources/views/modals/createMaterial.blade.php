 <!-- Matarials Modal -->
 <div class="modal fade" id="matarialsModal" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Matarial</h5>
            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
            ></button>
            </div>
            <div class="modal-body">
            <form action="">
                <div class="m-3 p-2">
                <input
                    class="form-control txt-area-title"
                    id="floatingTextarea"
                    placeholder="Matarial title goes here..."
                >
                </div>
                <div class="announce-txt m-3 p-2">
                <div class="form-floating">
                    <textarea
                    class="form-control txt-area"
                    id="floatingTextarea"
                    ></textarea>
                    <label for="floatingTextarea course-n"
                    >Instructions (optional)</label
                    >
                </div>
                </div>

                <div class="d-flex justify-content-between align-content-center m-3">
                <div class="sortableImgThumbnailPreview" id="sortableImgThumbnailPreview">
                </div>

                </div>

                <div class="d-flex justify-content-between align-content-center modal-footer">
                <div class="announce-icon m-2 ms-4">

                    <!-- image preview div -->

                    <div class="foy-image-upload">

                    <input id="files" type="file" multiple/>
                    <label for="file-input">
                        <img src="assets/Frame 33589.png"/>
                    </label>
                </div>
                </div>
                <div class="announce-postm-2 me-4 text-end ">
                <button type="button" class="btn announce-b1 px-3 mx-2" data-bs-dismiss="modal">
                    Cancel
                </button>
                <button type="button" class="btn announce-b2 px-3">Post</button>
                </div>
            </div>
            </form>
            </div>
        </div>
    </div>
</div>