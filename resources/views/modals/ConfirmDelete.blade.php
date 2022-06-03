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
                        <p>Are you sure you want to remove this class?</p>
                    </div>

                    <div class="modal-footer"></div>
                    <div class="announce-postm-2 me-4 text-end ">
                        <button type="button" class="btn announce-b1 px-3 mx-2 " data-bs-dismiss="modal">
                        Cancel
                        </button>
                        <button type="submit" class="btn announce-b2 px-3">Remove</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Confirm Delete Modal --}}
 
 
  
  <!--Modal: modalConfirmDelete-->
 <!-- Button trigger modal-->

<!--Modal: modalPush-->
{{-- <div class="modal fade" id="confirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Be always up to date</p>
      </div>

      <!--Body-->
      <div class="modal-body">

        <i class="fas fa-bell fa-4x animated rotateIn mb-4"></i>

        <p>Do you want to receive the push notification about the newest posts?</p>

      </div>

      <!--Footer-->
      <div class="modal-footer flex-center">
        <a href="https://mdbootstrap.com/docs/standard/pro/" class="btn btn-info">Yes</a>
        <a type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">No</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div> --}}
<!--Modal: modalPush-->
  <!--Modal: modalConfirmDelete-->
