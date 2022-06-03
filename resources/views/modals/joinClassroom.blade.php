<!-- Join-Class Modal -->
<div class="modal fade" id="joinpopup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Join Class</h5>
                <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
                <form method="post" action="/joinClassroom" enctype="multipart/form-data">
                    @csrf
                    <div class="m-3 p-2">
                        <h5>Class code</h5>
                        <p>Ask your teacher for the class code, then enter it here.</p>
                        <input type="text" id="fname" class="p-2" name="classCode" placeholder="Class code">
                    </div>

                    <div class="modal-footer"></div>
                    <div class="announce-postm-2 me-4 text-end ">
                        <button type="button" class="btn announce-b1 px-3 mx-2 " data-bs-dismiss="modal">
                        Cancel
                        </button>
                        <button type="submit" class="btn announce-b2 px-3">Join</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- join Classroom Modal --}}
