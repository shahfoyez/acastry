<!-- navbar start -->
<section class="navigation-bar effect2" style="background: #ecf4fe">
    <div class="container">
        <nav class="navbar navbar-expand-sm navbar-light">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/logo1.png') }}" alt="" class="d-inline-block align-top" />
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


                    <li class="nav-item dropdown notifications-dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <div class="dropdown-menu-header">
                                Notifications
                            </div>
                            <div class="dropdown-item">
                                <div class="row">
                                    <div class="col-md-2 profile-img">
                                        <img src="img/3.jpg" />
                                    </div>
                                    <div class="col-md-10">
                                        <a href="">
                                            <b>Axel</b> commented on your photo.
                                            <br>
                                            <small>10 minutes ago</small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="row no-gutters">
                                    <div class="col-md-2 profile-img">
                                        <img src="img/3.jpg" />
                                    </div>
                                    <div class="col-md-10">
                                        <a href="">
                                            <b>Axel</b> liked your post.
                                            <br>
                                            <small>10 minutes ago</small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="row no-gutters">
                                    <div class="col-md-2 profile-img">
                                        <img src="img/2.jpg" />
                                    </div>
                                    <div class="col-md-10">
                                        <a href="">
                                            <b>Alicia</b> accepted your request.
                                            <br>
                                            <small>20 minutes ago</small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="notifications-dropdown-footer">
                                See All Notifications
                            </div>
                        </div>
                    </li>


                    <li class="mx-3">
                        <a class="nav-link" href="#"
                        ><img
                            src="{{ asset('assets/notification-bing.png') }}"
                            alt=""
                            width="30"
                            height="30"
                        /></a>
                    </li>
                    <li class="mx-3">
                        <a class="nav-link " href="#"
                        ><img
                            src="{{ asset('assets/sms-tracking.png') }} "
                            alt=""
                            width="30"
                            height="30"
                        /></a>
                    </li>





                    <li class="mx-3">
                        <!-- dropdown start -->
                        <div class="more p-2 dropdown d-flex align-item-center" >
                            <p class="me-2 m-0 foy-profile-name"><a href="#">{{ auth()->user()->name }}</a></p>
                            <img src="{{ auth()->user()->image ? asset(auth()->user()->image) : asset('assets/defaultProfile.png')}}" alt="" width="30"
                            height="30" class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <ul class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton1">
                                <li>
                                    <a class="dd-item  dropdown-item py-2 border-bottom" href="#"><i class="fa-solid fa-user mx-2"></i>View Profile</a>
                                </li>
                                <li>
                                    <a class="dd-item  dropdown-item py-2 border-bottom" href="/logout"><i class="fa-solid fa-right-from-bracket mx-2"></i>Logout</a>
                                </li>
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
