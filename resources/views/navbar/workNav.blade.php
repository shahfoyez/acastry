<ul class="nav nav-pills foy-nav-pills pt-4">
    <li class="nav-item foy-nav-item ">
      <a class="nav-link foy-nav-link {{ request()->is('classroomStream/*') ? 'active' : ''  }}" aria-current="page" href="/"><i class="fa-brands fa-steam"></i> Dashboard</a>
    </li>
    <li class="nav-item foy-nav-item">
      <a class="nav-link foy-nav-link {{ request()->is('industrySubmit/*') ? 'active' : ''  }}" href="/industrySubmit/{{ $industryWork->id }}"><i class="fa-solid fa-book-bookmark"></i> Instruction</a>
    </li>
    <li class="nav-item foy-nav-item">
        <a class="nav-link foy-nav-link {{ request()->is('industryAllSubmissions/*') ? 'active' : ''  }}" href="/industryAllSubmissions/{{ $industryWork->id }}"><i class="fa-solid fa-folder-open"></i> Submissions</a>
    </li>
    {{-- <li class="nav-item foy-nav-item">
        <a class="nav-link foy-nav-link {{ request()->is('industrySubmissionSingle/*') ? 'active' : ''  }}" href="/assignmentSubmissions/{{ $industryWork->id }}"><i class="fa-solid fa-folder-open"></i>  tdh</a>
    </li> --}}
</ul>
