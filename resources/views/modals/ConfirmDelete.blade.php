<!-- Confirm Delete Modal -->
<div class="modal fade" id="confirmDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Remove Classroom</h5>
                <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
                ></button> 
            </div>
            <div class="modal-body">
                <form id="foy-modal-item" method="post" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="m-3 p-2">
                        <p>Are you sure you want to delete?</p>
                    </div>

                    <div class="modal-footer"></div>
                    <div class="announce-postm-2 me-4 text-end ">
                        <button type="button" class="btn announce-b1 px-3 mx-2 " data-bs-dismiss="modal">
                        Cancel
                        </button>
                        <button type="submit" class="btn announce-b2 px-3">Yes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Confirm Delete Modal --}}
 
 
  
 
