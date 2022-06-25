<!-- classroom nav start-->
@if(request()->is('assignmentSubmit/*') || request()->is('assignmentSubmit/*') || request()->is('assignmentSubmissions/*') || request()->is('assignmentSubmissionSingle/*'))
    <ul class="nav nav-pills foy-nav-pills">
        <li class="nav-item foy-nav-item ">
        <a class="nav-link foy-nav-link {{ request()->is('classroomStream/*') ? 'active' : ''  }}" aria-current="page" href="/classroomStream/{{ $classroom->id }}"><i class="fa-brands fa-steam"></i> Stream</a>
        </li>
        <li class="nav-item foy-nav-item">
        <a class="nav-link foy-nav-link {{ request()->is('assignmentSubmit/*') ? 'active' : ''  }}" href="/assignmentSubmit/{{ $assignment->classroomPost->id }}"><i class="fa-solid fa-book-bookmark"></i> Instruction</a>
        </li>
        @if($classroom->user->id == auth()->user()->id)
            <li class="nav-item foy-nav-item">
            <a class="nav-link foy-nav-link {{ request()->is('assignmentSubmissions/*') ? 'active' : ''  }}" href="/assignmentSubmissions/{{ $assignment->classroomPost->id }}"><i class="fa-solid fa-folder-open"></i> Submissions</a>
            </li>
        @endif
        @if(request()->is('assignmentSubmissionSingle/*'))
            <li class="nav-item foy-nav-item">
            <a class="nav-link foy-nav-link {{ request()->is('assignmentSubmissionSingle/*') ? 'active' : ''  }}" href="/assignmentSubmissions/{{ $assignment->classroomPost->id }}"><i class="fa-solid fa-folder-open"></i> {{ $submission->user->name }}</a>
            </li>
        @endif
    </ul>
@elseif(request()->is('industryClassSubmit/*') || request()->is('classAddedWork/*') || request()->is('classRelatedWork/*'))
    <ul class="nav nav-pills foy-nav-pills">
        <li class="nav-item foy-nav-item ">
        <a class="nav-link foy-nav-link {{ request()->is('classroomStream/*') ? 'active' : ''  }}" aria-current="page" href="/classroomStream/{{ $classroom->id }}"><i class="fa-brands fa-steam"></i> Stream</a>
        </li>
        <li class="nav-item foy-nav-item">
        <a class="nav-link foy-nav-link {{ request()->is('classAddedWork/*') ? 'active' : ''  }}" href="/classAddedWork/{{ $classroom->id }}"><i class="fa-solid fa-book-bookmark"></i> Added Works</a>
        </li>
        @if($classroom->user->id == auth()->user()->id)
            <li class="nav-item foy-nav-item">
            <a class="nav-link foy-nav-link {{ request()->is('classRelatedWork/*') ? 'active' : ''  }}" href="/classRelatedWork/{{ $classroom->id }}"><i class="fa-solid fa-folder-open"></i> Related Works</a>
            </li>
        @endif
        @if(request()->is('classIndustrySubmit/*'))
            <li class="nav-item foy-nav-item">
            <a class="nav-link foy-nav-link {{ request()->is('classIndustrySubmit/*') ? 'active' : ''  }}" href="/classIndustrySubmit/{{ $classroom->id }}"><i class="fa-solid fa-folder-open"></i> AW Details</a>
            </li>
        @endif
        @if(request()->is('classIndustryDetails/*'))
            <li class="nav-item foy-nav-item">
            <a class="nav-link foy-nav-link {{ request()->is('classIndustryDetails/*') ? 'active' : ''  }}" href="/classIndustryDetails/{{ $classroom->id }}"><i class="fa-solid fa-folder-open"></i> RW Details</a>
            </li>
        @endif

    </ul>
    @elseif(request()->is('classIndustrySubmit/*') ||  request()->is('classIndustryDetails/*') || request()->is('classIndustrySubmissions/*'))
    <ul class="nav nav-pills foy-nav-pills">
        <li class="nav-item foy-nav-item ">
            <a class="nav-link foy-nav-link {{ request()->is('classroomStream/*') ? 'active' : ''  }}" aria-current="page" href="/classroomStream/{{ $classroom->id }}"><i class="fa-brands fa-steam"></i> Stream</a>
        </li>
        <li class="nav-item foy-nav-item">
            <a class="nav-link foy-nav-link" href="/classAddedWork/{{ $classroom->id }}"><i class="fa-solid fa-industry"></i> Work</a>
        </li>
        @if(request()->is('classIndustrySubmit/*') || request()->is('classIndustrySubmissions/*'))
            <li class="nav-item foy-nav-item">
                <a class="nav-link foy-nav-link {{ request()->is('classIndustrySubmit/*') ? 'active' : ''  }}" href="/classIndustrySubmit/{{ $classroomIndustryWork->id }}"><i class="fa-solid fa-folder-open"></i> AW Details</a>
            </li>
            @if($classroom->user->id == auth()->user()->id)
                <li class="nav-item foy-nav-item">
                <a class="nav-link foy-nav-link {{ request()->is('classIndustrySubmissions/*') ? 'active' : ''  }}" href="/classIndustrySubmissions/{{ $classroomIndustryWork->id }}"><i class="fa-solid fa-folder-open"></i> Submissions</a>
                </li>
            @endif
        @endif
        @if(request()->is('classIndustryDetails/*'))
            <li class="nav-item foy-nav-item">
            <a class="nav-link foy-nav-link {{ request()->is('classIndustryDetails/*') ? 'active' : ''  }}" href="/classIndustryDetails/{{ $classroom->id }}"><i class="fa-solid fa-folder-open"></i> RW Details</a>
            </li>
        @endif


    </ul>
@else
    <ul class="nav nav-pills foy-nav-pills">
        <li class="nav-item foy-nav-item ">
        <a class="nav-link foy-nav-link {{ request()->is('classroomStream/*') ? 'active' : ''  }}" aria-current="page" href="/classroomStream/{{ $classroom->id }}"><i class="fa-brands fa-steam"></i> Stream</a>
        </li>
        <li class="nav-item foy-nav-item">
        <a class="nav-link foy-nav-link {{ request()->is('classroomClassworks/*') ? 'active' : ''  }}" href="/classroomClassworks/{{ $classroom->id }}"><i class="fa-solid fa-book-bookmark"></i> Classwork</a>
        </li>
        <li class="nav-item foy-nav-item">
        <a class="nav-link foy-nav-link {{ request()->is('classroomMaterials/*') ? 'active' : ''  }}" href="/classroomMaterials/{{ $classroom->id }}"><i class="fa-solid fa-folder-open"></i> Materials</a>
        </li>


        <li class="nav-item foy-nav-item">
        <a class="nav-link foy-nav-link" href="/classAddedWork/{{ $classroom->id }}"><i class="fa-solid fa-industry"></i> Work</a>
        </li>
        <li class="nav-item foy-nav-item">
        <a class="nav-link foy-nav-link {{ request()->is('classroomPeople/*') ? 'active' : ''  }}" href="/classroomPeople/{{ $classroom->id }}"><i class="fa-solid fa-people-group"></i> People</a>
        </li>
        <li class="nav-item foy-nav-item">
        <a class="nav-link foy-nav-link {{ request()->is('classroomDiscussion/*') ? 'active' : ''  }}" href="/classroomDiscussion/{{ $classroom->id }}"><i class="fa-brands fa-rocketchat"></i> Discussion</a>
        </li>
        <li class="nav-item foy-nav-item">
        <a class="nav-link foy-nav-link {{ request()->is('classroomGrades/*') ? 'active' : ''  }}" href="/classroomGrades/{{ $classroom->id }}"><i class="fa-solid fa-graduation-cap"></i> Grades</a>
        </li>
    </ul>
@endif

<!-- classroom nav end-->
