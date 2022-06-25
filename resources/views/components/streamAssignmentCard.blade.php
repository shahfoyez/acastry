
<!--start:assignment card-->
<div class="st-card col-lg-12 d-flex justify-content-between py-3 px-2 my-2">
    <div class="d-flex align-items-center col position-relative">
        <div class="cd-date mx-3">
            @php
                $date= Carbon\Carbon::parse($post->created_at)->format('M d');
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
        src="{{ asset('assets/images/streamAssignment.png') }}"
        alt=""
        width="42"
        height="42"
        />
        <div class="course-tn">
            <div class="d-flex">
            <p class="course-t m-0"><a href="/assignmentSubmit/{{ $post->id }}" class="foy-link stretched-link text-decoration-none oneline">{{ $post->user->name." has posted an assignment." }} </a></p>
            <i class="fa-solid fa-thumbtack mx-3"></i>
            <p class="course-n m-0">Pinned</p>
            </div>
            <p class="course-n m-0">
                <?php
                    $datetime = new DateTime();
                    $curDate =$datetime->format('Y-m-d g:i:s');
                ?>
                @if($post->assignment->due_date_time)
                    @if( $curDate > $post->assignment->due_date_time)
                        {{ "Exceded ".Carbon\Carbon::parse($post->assignment->due_date_time)->format('M d, Y')}}
                    @elseif(date('Y-m-d') == Carbon\Carbon::parse($post->assignment->due_date_time)->format('Y-m-d'))
                        {{ "Due Today ".Carbon\Carbon::parse($post->assignment->due_date_time)->format('g:i A')}}

                    @else
                        {{ "Due ".Carbon\Carbon::parse($post->assignment->due_date_time)->format('D m').", ".Carbon\Carbon::parse($post->assignment->due_date_time)->format('g:i A') }}
                    @endif
                @else
                    {{ "No due date" }}
                @endif
            </p>
        </div>
    </div>
    <!-- dropdown start -->
    <div class="more p-2 mx-4 my-2 dropstart">
        <i
        class="fa-solid fa-ellipsis-vertical"
        type="button"
        id="dropdownMenuButton1"
        data-bs-toggle="dropdown"
        aria-expanded="false"
        ></i>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <div class="mh">
            <li><P class="dropdown-item" href="#">Email Address:</P></li>
            <li><P class="dropdown-item" href="#">Ryann Rodgers@gmail.com</P></li>
            <li><hr class="dropdown-divider"></li>
            </div>
            <li><a class="dd-item dropdown-item" href="#">Remove</a></li>
            <li><a class="dd-item dropdown-item" href="#">Make host</a></li>
        </ul>
    </div>
    <!-- dropdown end -->
</div>
<!--end:assignment card-->
