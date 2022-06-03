<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"
        />
        <link rel="stylesheet" href="assets/css/style.css" />
        <link rel="stylesheet" href="assets/css/finalAdded.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">


        <title>Dashboard</title>
    </head>
    <body>
        <!-- navbar start -->
        <section class="navigation-bar" style="background: #ecf4fe">
            <div class="container">
                <nav class="navbar navbar-expand-sm navbar-light">
                    <a class="navbar-brand" href="#">
                        <img src="assets/logo1.png" alt="" class="d-inline-block align-top" />
                    </a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#toggleMobileMenu"
                        aria-controls="toggleMobileMenu"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="toggleMobileMenu">
                        <ul class="navbar-nav ms-auto text-center align-items-center">
                            <li class="mx-3">
                                <div class="dropdown">
                                    <i class="fa-solid fa-plus crt-sty foy-create-button" type="button" id="dashboardCreateDropdown" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                    <ul class="dropdown-menu dropdown-menu-left p-0" aria-labelledby="dashboardCreateDropdown">
                                        <li><a class="dd-item  dropdown-item py-2 border-bottom" data-bs-toggle="modal"
                                            data-bs-target="#createpopup">Create Classroom</a></li>
                                        <li><a class="dd-item  dropdown-item py-2 border-bottom" data-bs-toggle="modal"
                                            data-bs-target="#joinpopup">Join Classroom</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mx-3">
                                <a class="nav-link" href="#"
                                ><img
                                    src="assets/notification-bing.png"
                                    alt=""
                                    width="30"
                                    height="30"
                                /></a>
                            </li>
                            <li class="mx-3">
                                <a class="nav-link " href="#"
                                ><img
                                    src="assets/sms-tracking.png"
                                    alt=""
                                    width="30"
                                    height="30"
                                /></a>
                            </li>
                            <li class="mx-3">
                                <!-- dropdown start -->
                                <div class="more p-2 dropdown" >
                                <img src="assets/unsplash_lJJlaUWYrPE.png" alt="" width="30"
                                height="30" class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <ul class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dd-item  dropdown-item py-2 border-bottom" href="#"><i class="fa-solid fa-user mx-2"></i>View Profile</a></li>
                                    <li><a class="dd-item  dropdown-item py-2 border-bottom" href="/logout"><i class="fa-solid fa-right-from-bracket mx-2"></i>Logout</a></li>
                                </ul>
                            </div>
                            <!-- dropdown end -->
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </section>
        <!-- navbar end -->
        <section class="main-content">
            <div class="container">
                {{-- @if (session()->has('message'))
                    <div x-data="{ show:true }"
                        x-init="setTimeout(() => show = false, 4000)"
                        x-show="show"
                        class="alert alert-success pb-0">
                        <p>{{ session('message') }}</p>
                    </div>
                @endif --}}
                @if (session()->has('message'))
                <div class="alert mt-5">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    {{ session('message') }}
                </div>
                @endif
                @if($users->count()>0)
                    {{-- @foreach ($users as $user) --}}
                        <div class="row mt-5">
                            {{-- start:left --}}
                            <div class="col-lg-8">
                                <!-- pinned classes start -->
                                @if($pins->count()>0)
                                    <div class="pc d-flex">
                                        <div class="d-flex">
                                            <p>Pinned class</p>
                                            <img class="mx-2 mt-1" src="{{ asset('assets/redPin.png') }}" alt="" width="16" height="16"
                                            />
                                        </div>
                                    </div>
                                    <div class="justify-content-between">
                                        <div class="row flex-wrap">
                                            @foreach ($pins as $pin)
                                            <div class="col-sm-12 col-lg-6 col-md-6 p-2 ">
                                                <div class="st-card d-flex align-items-center p-2 justify-content-between">
                                                    <div class="d-flex">
                                                        <img class="st-img rounded-circle mx-3" src="{{ $pin->classroom->user->image ? asset($pin->classroom->user->image) : asset('assets/defaultProfile.png')}}" alt="" width="52" height="52" />
                                                        <div class="course-tn">
                                                            <p class="course-t m-0">
                                                                {{ $pin->classroom->name }}
                                                            </p>
                                                            <p class="course-n m-0">
                                                                {{ $pin->classroom->user->name }}
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="more p-2 mx-4 my-2 dropdown">
                                                        <i class="fa-solid fa-ellipsis-vertical" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                        <ul class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton1">
                                                            <li><a class="dd-item dropdown-item py-2 border-bottom" href="#">Edit</a></li>
                                                            <li><a class="dd-item  dropdown-item py-2 border-bottom" data-bs-toggle="modal"
                                                                data-bs-target="#">Remove</a></li>
                                                            <li><a class="dd-item dropdown-item py-2 border-bottom" href="/unpinClass/{{ $pin->classroom->id }}">Unpin</a></li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                                 
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                                <!-- pinned classes end -->

                                <!-- Teaching start -->
                                @if($teachings->count()>0)
                                    <div class="pc d-flex my-3">
                                        <div class="col-6 d-flex">
                                            <p>
                                                Teaching<span class="dash-notification badge rounded-pill pb-1 ms-2">4</span>
                                            </p>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p class="as-dt">
                                                <a href="" class="foy-see-more">view all</a>
                                            </p>
                                        </div>
                                    </div>
                                    @foreach ($teachings as $teaching)
                                        <div class="st-card col-lg-12 d-flex justify-content-between py-3 my-2">
                                            <div class="d-flex align-items-center">
                                                <img class="st-img rounded-circle mx-3" src="{{ $teaching->classroom->user->image ? asset($teaching->classroom->user->image) : asset('assets/defaultProfile.png')}}" alt="" width="52" height="52" />
                                                <div class="lvr vr "></div>
                                                <div class="course-tn mx-4">
                                                    <p class="course-t m-0 ">
                                                        {{ $teaching->classroom->name }}
                                                    </p>
                                                    <p class="course-n m-0">
                                                        {{ $teaching->classroom->user->name }}
                                                    </p>
                                                </div>
                                            </div>
                                            {{-- dropdown start --}}
                                            <div class="more p-2 mx-4 my-2 dropdown">
                                                <i class="fa-solid fa-ellipsis-vertical" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                <ul class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton1">
                                                    <li>
                                                        <a class="dd-item dropdown-item py-2 border-bottom" href="#">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="dd-item  dropdown-item py-2 border-bottom" data-bs-toggle="modal"
                                                        data-bs-target="#">Remove</a>
                                                    </li>
                                                    @if ($teaching->classroom->pin_status==1)
                                                        <li>
                                                            <a class="dd-item dropdown-item py-2 border-bottom foy-dactive pe-none" tabindex="-1" aria-disabled="true">Pined</a>
                                                        </li>
                                                    @else
                                                        <li>
                                                            <a class="dd-item dropdown-item py-2 border-bottom" href="/pinClass/{{ $teaching->classroom->id }}">Pin</a>
                                                        </li>
                                                    @endif
                                                    {{-- <li><a class="dd-item  dropdown-item py-2 border-bottom" data-bs-toggle="modal"
                                                        data-bs-target="#joinpopup">Pin</a></li> --}}
                                                </ul>
                                            </div>
                                            {{-- dropdown end --}}
                                        </div>
                                    @endforeach
                                @endif
                                <!-- Teaching end -->

                                <!-- Joined Classes start -->
                                @if($joins->count()>0)
                                    <div class="pc d-flex my-3">
                                        <div class="col-6 d-flex">
                                            <p>Joined<span class="dash-notification badge rounded-pill pb-1 ms-2"
                                            >{{ $joins->count() }}</span></p>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p class="as-dt">view all</p>
                                        </div>
                                    </div>
                                    @foreach ($joins as $join)
                                        <div class="st-card col-lg-12 d-flex justify-content-between py-3 my-2" >
                                            <div class="d-flex align-items-center">
                                                <img class="st-img rounded-circle mx-3" src="{{ $join->classroom->user->image ? asset($join->classroom->user->image) : asset('assets/defaultProfile.png')}}" alt="" width="52" height="52" />
                                                <div class="lvr vr "></div>
                                                <div class="course-tn mx-4">
                                                <p class="course-t m-0 ">
                                                    {{ $join->classroom->name }}
                                                </p>
                                                <p class="course-n m-0">
                                                    {{ $join->classroom->user->name }}
                                                </p>
                                                </div>
                                            </div>
                                            {{-- dropdown start --}}
                                            <div class="more p-2 mx-4 my-2 dropdown">
                                                <i class="fa-solid fa-ellipsis-vertical" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                <ul class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton1">
                                                    <li>
                                                        <a class="dd-item dropdown-item py-2 border-bottom" href="#">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="dd-item  dropdown-item py-2 border-bottom" data-bs-toggle="modal"
                                                        data-bs-target="#">Remove</a>
                                                    </li>
                                                    @if ($join->classroom->pin_status==1)
                                                        <li>
                                                            <a class="dd-item dropdown-item py-2 border-bottom foy-dactive pe-none" tabindex="-1" aria-disabled="true">Pined</a>
                                                        </li>
                                                    @else
                                                        <li>
                                                            <a class="dd-item dropdown-item py-2 border-bottom" href="/pinClass/{{ $join->classroom->id }}">Pin</a>
                                                        </li>
                                                    @endif
                                                    {{-- <li><a class="dd-item  dropdown-item py-2 border-bottom" data-bs-toggle="modal"
                                                        data-bs-target="#joinpopup">Pin</a></li> --}}
                                                </ul>
                                            </div>
                                            {{-- dropdown end --}}
                                        </div>
                                    @endforeach
                                @endif
                                <!-- Joined Classes end -->

                                <!-- star-student-start -->
                                <div class="pc d-flex my-3">
                                <div class="col-6 d-flex">
                                    <p >Star students<span class="dash-notification badge rounded-pill pb-1 ms-2"
                                    >3</span></p>
                                </div>
                                <div class="col-6 text-end">
                                    <p class="as-dt">view all</p>
                                </div>
                                </div>


                                <div
                                class="st-card col-lg-12 d-flex justify-content-between py-3 my-2"
                                >
                                <div class="d-flex align-items-center">
                                    <div class="lvr vr mx-4"></div>
                                    <img
                                    class="st-img rounded-circle"
                                    src="assets/midas-hofstra-tidSLv-UaNs-unsplash.jpg"
                                    alt=""
                                    width="52"
                                    height="52"
                                    />
                                    <div class="course-tn mx-4">
                                    <div class="d-flex">
                                        <p class="course-t m-0 ">Penelope
                                        Chloe</p>
                                        <img class="mx-3" src="assets/star1.png" alt="">
                                    </div>
                                    <p class="course-n m-0">Penelope
                                        Chloe@gmail.com</p>
                                    </div>
                                </div>
                                <!-- dropdown start -->
                                <div class="more p-2 mx-4 my-2 dropdown">
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

                                <div
                                class="st-card col-lg-12 d-flex justify-content-between py-3 my-2"
                                >
                                <div class="d-flex align-items-center">
                                    <div class="lvr vr mx-4"></div>
                                    <img
                                    class="st-img rounded-circle"
                                    src="assets/albert-dera-ILip77SbmOE-unsplash.jpg"
                                    alt=""
                                    width="52"
                                    height="52"
                                    />
                                    <div class="course-tn mx-4">
                                    <div class="d-flex">
                                        <p class="course-t m-0 ">Penelope
                                        Chloe</p>
                                        <img class="mx-3" src="assets/star1.png" alt="">
                                    </div>
                                    <p class="course-n m-0">Penelope
                                        Chloe@gmail.com</p>
                                    </div>
                                </div>
                                <!-- dropdown start -->
                                <div class="more p-2 mx-4 my-2 dropdown">
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

                                <div
                                class="st-card col-lg-12 d-flex justify-content-between py-3 my-2"
                                >
                                <div class="d-flex align-items-center">
                                    <div class="lvr vr mx-4"></div>
                                    <img
                                    class="st-img rounded-circle"
                                    src="assets/pexels-italo-melo-2379004.jpg"
                                    alt=""
                                    width="52"
                                    height="52"
                                    />
                                    <div class="course-tn mx-4">
                                    <div class="d-flex">
                                        <p class="course-t m-0 ">Penelope
                                        Chloe</p>
                                        <img class="mx-3" src="assets/star1.png" alt="">
                                    </div>
                                    <p class="course-n m-0">Penelope
                                        Chloe@gmail.com</p>
                                    </div>
                                </div>
                                <!-- dropdown start -->
                                <div class="more p-2 mx-4 my-2 dropdown">
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
                                <!-- star-student-end -->
                            </div>
                            {{-- end:left --}}


                            <!-- To-Do & To Review start-->
                            <div class="col-lg-4 col-md-12">
                                <div class="pc d-flex">
                                <div class="col-6 d-flex">
                                    <p class="as-tt">To Do <span class="dash-notification badge rounded-pill pb-1"
                                    >3</span></p>
                                </div>
                                <div class="col-6 text-end">
                                    <a class="as-dt" href="#">view all</a>
                                </div>
                                </div>
                                <div class="assignment">
                                <div class="assignment-box d-flex p-4 pb-3">
                                    <div class="col-12">
                                    <p class="assignment-title d-inline">Assignment 01</p>
                                    <p class="as-sub d-inline float-end">100 points</p>
                                    <p class="as-sub mt-2 mb-0 d-block">Digital Signal Processing</p>
                                    <p class="as-dt m-0 d-block">Today | 02:00 pm</p>
                                    </div>
                                </div>
                                <div class="assignment-box d-flex p-4 py-3">
                                    <div class="col-12">
                                        <p class="assignment-title d-inline">Assignment 01</p>
                                        <p class="as-sub d-inline float-end">100 points</p>
                                        <p class="as-sub mt-2 mb-0 d-block">Digital Signal Processing</p>
                                        <p class="as-dt m-0 d-block">Today | 02:00 pm</p>
                                    </div>
                                    </div>
                                    <div class="assignment-box d-flex p-4 py-3">
                                    <div class="col-12">
                                        <p class="assignment-title d-inline">Assignment 01</p>
                                        <p class="as-sub d-inline float-end">100 points</p>
                                        <p class="as-sub mt-2 mb-0 d-block">Digital Signal Processing</p>
                                        <p class="as-dt m-0 d-block">Today | 02:00 pm</p>
                                    </div>
                                    </div>
                                {{-- <div class="assignment-box d-flex p-3">
                                    <div class="col-6">
                                    <p class="assignment-title">Assignment 01</p>
                                    <p class="as-sub m-0">Digital Signal Processing</p>
                                    <p class="as-dt m-0">Today | 02:00 pm</p>
                                    </div>
                                    <div class="col-6 text-end">
                                    <p class="as-sub">100 points</p>
                                    </div>
                                </div> --}}
                                </div>
                                <div class="pc d-flex mt-5">
                                <div class="col-6 d-flex">
                                    <p class="as-tt">
                                    To Review
                                    <span class="dash-notification badge rounded-pill pb-1"
                                        >3</span
                                    >
                                    </p>
                                </div>
                                <div class="col-6 text-end">
                                    <a class="as-dt" href="#">view all</a>
                                </div>
                                </div>
                                <div class="assignment">
                                <div class="assignment-box d-flex p-4 pb-3">
                                    <div class="col-12">
                                        <p class="assignment-title d-inline">Assignment 01</p>
                                        <p class="as-sub d-inline float-end">100 points</p>
                                        <p class="as-sub mt-2 mb-0 d-block">Digital Signal Processing</p>
                                        <p class="as-dt m-0 d-block">Today | 02:00 pm</p>
                                    </div>
                                </div>
                                <div class="assignment-box d-flex p-4 py-3">
                                    <div class="col-12">
                                        <p class="assignment-title d-inline">Assignment 01</p>
                                        <p class="as-sub d-inline float-end">100 points</p>
                                        <p class="as-sub mt-2 mb-0 d-block">Digital Signal Processing</p>
                                        <p class="as-dt m-0 d-block">Today | 02:00 pm</p>
                                    </div>
                                </div>
                                <div class="assignment-box d-flex p-4 py-3">
                                    <div class="col-12">
                                        <p class="assignment-title d-inline">Assignment 01</p>
                                        <p class="as-sub d-inline float-end">100 points</p>
                                        <p class="as-sub mt-2 mb-0 d-block">Digital Signal Processing</p>
                                        <p class="as-dt m-0 d-block">Today | 02:00 pm</p>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <!-- To-Do & To Review end-->
                        </div>
                    {{-- @endforeach --}}
                @else
                    <div class="col-12 mt-4">
                        <div class="alert alert-primary" role="alert" style="margin-left:0px; margin-right: 35px;">
                            Nothing Available here
                        </div>
                    </div>
                @endif

            </div>
        </section>

        <section class="footer">
            <hr class="new2 my-5" />
            <div class="container">
                <div class="footer d-flex flex-wrap justify-content-between my-4">
                <div class="s-icon d-flex m-auto">
                    <img src="assets/Linkedin.png" alt="" width="42" height="42" />
                    <img
                    class="mx-3"
                    src="assets/facebook.png"
                    alt=""
                    width="42"
                    height="42"
                    />
                    <img src="assets/Twitter.png" alt="" width="42" height="42" />
                </div>
                <div class="f-logo d-flex align-items-center m-auto">
                    <p class="m-3">A product of</p>
                    <img src="assets/logo1.png" alt="" />
                </div>
                <div class="f-rights d-flex align-items-center m-auto">
                    <p>© 2022 ACASTRY. All rights reserved.</p>
                </div>
                </div>
            </div>
        </section>

        <!--begin::Modals-->
        @include('modals.createClassroom')
        @include('modals.joinClassroom')
        @include('modals.validationError')
        @include('modals.confirmDelete')

        <!--end::Modals-->
        <script type="text/javascript">
            @if (count($errors) > 0)
                $('#validationError').modal('show');
            @endif
        </script>

        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- Core plugin JavaScript-->
        <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"
        ></script>
    </body>
</html>
