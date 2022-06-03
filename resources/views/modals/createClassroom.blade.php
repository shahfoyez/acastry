 {{-- Create-classroom Modal --}}
 <div class="modal fade" id="createpopup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Class</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="/createClassroom" enctype="multipart/form-data">
                    @csrf
                    <div class="p-2 m-2">
                        <input type="text" id="name" class="p-2 pe-0 m-2 ms-0" name="name" placeholder="Classroom name" style="width:100%; background:#ECF4FE; border:none; border-radius: 8px">
                        @error('name')
                            <span class="error-msg">{{ "*".$message }}</span>
                        @enderror
                        <input type="text" id="section" class="p-2 m-2 ms-0" name="section" placeholder="Section" style="width:100%; background:#ECF4FE; border:none; border-radius: 8px">
                        @error('section')
                            <span class="error-msg">{{ "*".$message }}</span>
                        @enderror
                        <input type="text" id="subject" class="p-2 m-2 ms-0" name="subject" placeholder="Subject" style="width:100%; background:#ECF4FE; border:none; border-radius: 8px">
                        @error('subject')
                            <span class="error-msg">{{ "*".$message }}</span>
                        @enderror
                        <input type="text" id="keyword" class="p-2 m-2 ms-0" name="keywords" placeholder="Keywords" style="width:100%; background:#ECF4FE; border:none; border-radius: 8px">
                        @error('keywords')
                            <span class="error-msg">{{ "*".$message }}</span>
                        @enderror
                    </div>
                    <div class="modal-footer">

                    </div>
                    <div class="announce-postm-2 me-4 text-end">
                        <button type="button" class="btn announce-b1 px-3 mx-2" data-bs-dismiss="modal">
                        Cancel
                        </button>
                        <button type="submit" class="btn announce-b2 px-3">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- Create classroom modal --}}
