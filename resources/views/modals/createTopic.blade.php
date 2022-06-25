 <!-- add topic Modal -->
 <div class="modal fade" id="addtopic" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-top">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Topic</h5>
                <button
                type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
                <form action="/createTopic/{{ $classroom->id }}" method="POST" >
                    @csrf
                    <div class="p-2 m-2">
                        <input type="text" id="topic" class="p-2 pe-0 m-2 ms-0" name="topic" placeholder="Topic" style="width:100%; background:#e9f8ff; border:none">
                    </div>

                    <div class="modal-footer"></div>
                    <div class="announce-postm-2 me-4 text-end">
                        <button type="button" class="btn announce-b1 px-3 mx-2" data-bs-dismiss="modal">
                            Cancel
                        </button>
                        <button type="submit" class="btn announce-b2 px-3">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
