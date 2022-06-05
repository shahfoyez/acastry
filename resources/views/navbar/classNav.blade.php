<!-- classroom nav start-->
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
    <a class="nav-link foy-nav-link {{ request()->is('classroomIndustryWorks/*') ? 'active' : ''  }}" href="/classroomIndustryWorks/{{ $classroom->id }}"><i class="fa-solid fa-industry"></i> Work</a>
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
<!-- classroom nav end-->
