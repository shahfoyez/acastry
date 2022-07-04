<div class="d-flex justify-content-between mx-4 align-items-center text-decoration-none">
    <a href="/assignmentSubmit/{{ $assignment->classroomPost->id }}" class="btn announce-b2 px-3 me-3">
    View Assignment
    </a>
    @php
        $graded = 0;
    @endphp
    @foreach($assignment->assignmentSubmission as $submission)
        @if($submission->grade)
            @php
               $graded++;
            @endphp
        @endif
    @endforeach
    <div class="d-flex">
    <a class="assign-bta mx-2">
    <p class="cda-date-p2 m-0 mx-3">{{   $graded }}</p>
        <p class="cda-date-p1 m-0">Graded</p>
    </a>
    <a class="assign-bta mx-2">
        <p class="cda-date-p2 m-0 mx-4">{{ $assignment->assignmentSubmission->count() }}</p>
        <p class="cda-date-p1 m-0">Assigned</p>
    </a>
    </div>
</div>
