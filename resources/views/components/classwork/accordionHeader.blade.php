<h2 class="accordion-header" id="heading{{ $i }}">
    <button class="accordion-button collapsed st-card-assign col-lg-12 d-flex justify-content-between" type="button" >
        <div class="d-flex col position-relative align-items-center " data-bs-toggle="collapse" data-bs-target="#collapse{{ $i }}" aria-expanded="false"aria-controls="collapseone">
        <div class="cd-date mx-3">
            @php
                $date= Carbon\Carbon::parse($assignment->created_at)->format('M d');
                $orderdate = explode(' ', $date);
                $month   = $orderdate[0];
                $day  = $orderdate[1];
            @endphp
            <p class="cd-date-p1 m-0"> {{ $month }}</p>
            <p class="cd-date-p2 m-0"> {{ $day }}</p>
        </div>
        <div class="lvr vr"></div>
        <img
            class="st-img rounded-circle mx-3"
            src="{{asset('assets/images/a1.png')}}"
            alt=""
            width="42"
            height="42"
        />
        <div class="course-tn">
            <div class="d-flex">
            <p class="course-t m-0 oneline py-1">
                <a href="dhfh" class="foy-link stretched-link text-decoration-none oneline">{{ $assignment->title }}</a>
            </p>
            {{-- <i class="fa-solid fa-thumbtack mx-3"></i>
            <p class="course-n m-0">Pinned</p> --}}
            </div>
            <p class="course-n m-0 py-1">
                <?php
                    $datetime = new DateTime();
                    $curDate =$datetime->format('Y-m-d g:i:s');
                ?>
                @if($assignment->due_date_time)
                @if( $curDate > $assignment->due_date_time)
                    {{ "Exceded ".Carbon\Carbon::parse($assignment->due_date_time)->format('M d, Y')}}
                @elseif(date('Y-m-d') == Carbon\Carbon::parse($assignment->due_date_time)->format('Y-m-d'))
                    {{ "Due Today ".Carbon\Carbon::parse($assignment->due_date_time)->format('g:i A')}}
                @else
                    {{ "Due ".Carbon\Carbon::parse($assignment->due_date_time)->format('D m').", ".Carbon\Carbon::parse($assignment->due_date_time)->format('g:i A') }}
                @endif
                @else
                    {{ "No due date" }}
                @endif
            </p>
        </div>
        </div>
        <!-- dropdown start -->
        <div class="more p-2 mx-4 my-2 dropdown" >
            <i
            class="fa-solid fa-ellipsis-vertical"
            type="button"
            id="dropdownMenuButton1"
            data-bs-toggle="dropdown"
            aria-expanded="false"
            ></i>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dd-item dropdown-item" href="#">Remove</a></li>
            <li>
                <a class="dd-item dropdown-item" href="#">Make host</a>
            </li>
            </ul>
        </div>
        <!-- dropdown end -->
    </button>
</h2>
