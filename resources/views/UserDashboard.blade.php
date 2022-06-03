<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css" />

    <title>User Dashboard</title>
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
                  <ul class="navbar-nav ms-auto text-center">
                      <li class="mx-3 mt-2">
                        <div class="dropstart">
                          <i class="fa-solid fa-plus crt-sty " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>
                          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dd-item  dropdown-item" data-bs-toggle="modal"
                                data-bs-target="#createpopup">Create Classroom</a></li>
                            <li><a class="dd-item  dropdown-item" data-bs-toggle="modal"
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
                        <div class="more p-2 dropstart" >
                          <img src="assets/unsplash_lJJlaUWYrPE.png" alt="" width="30"
                          height="30" class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dd-item  dropdown-item" href="#"><i class="fa-solid fa-user mx-2"></i>View Profile</a></li>
                            <li><a class="dd-item  dropdown-item" href="#"><i class="fa-solid fa-right-from-bracket mx-2"></i>Logout</a></li>
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

      <!-- Create-class Modal -->
      <div
      class="modal fade"
      id="createpopup"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
      >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Create Class</h5>
            <button
              type="button"
                      class="btn-close"
                      data-bs-dismiss="modal"
                      aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form action="">
  
              <div class="p-2 m-2">
                  <input type="text" id="fname" class="p-2 pe-0 m-2 ms-0"name="fname" placeholder="Class name (required)" style="width:100%; background:#bde4f7; border:none">
  
                  <input type="text" id="fname" class="p-2 m-2 ms-0"name="fname" placeholder="Section" style="width:100%; background:#bde4f7; border:none">
  
                  <input type="text" id="fname" class="p-2 m-2 ms-0"name="fname" placeholder="Subject" style="width:100%; background:#bde4f7; border:none">
  
                  <input type="text" id="fname" class="p-2 m-2 ms-0"name="fname" placeholder="Keyword" style="width:100%; background:#bde4f7; border:none">
              </div>
  
              <div class="modal-footer"></div> 
              <div class="announce-postm-2 me-4 text-end">
                <button type="button" class="btn announce-b1 px-3 mx-2" data-bs-dismiss="modal">
                  Cancel
                </button>
                <button type="button" class="btn announce-b2 px-3">Post</button>
              </div>
  
          </div>
      </form>
        </div>
      </div>
      </div>
  
  
      <!-- Join-Class Modal -->
      <div
      class="modal fade"
      id="joinpopup"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Join Class</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form action="">
  
              <div class="m-3 p-2">
                  <h5>Class code</h5>
                  <p>Ask your teacher for the class code, then enter it here.</p>
                  <input type="text" id="fname" class="p-2"name="fname" placeholder="Class code">
              </div>
  
              <div class="modal-footer"></div>    
              <div class="announce-postm-2 me-4 text-end ">
                <button type="button" class="btn announce-b1 px-3 mx-2 " data-bs-dismiss="modal">
                  Cancel
                </button>
                <button type="button" class="btn announce-b2 px-3">Post</button>
              </div>
  
          </div>
      </form>
        </div>
      </div>
    </div>


    <!-- welcom text start -->
    <section class="welcome">
      <div class="container">
        <h2 class="my-5">Welcome, Shah Fayez!</h2>
      </div>
    </section>
    <!-- welcom text end -->

    <section class="main-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="pc d-flex">
              <div class="col-6 d-flex">
                <p>Pinned class</p>
                <img
                  class="mx-2 mt-1"
                  src="assets/redpin.png"
                  alt=""
                  width="16"
                  height="16"
                />
              </div>
              <div class="col-6 text-end">
                <p class="as-dt">view all</p>
              </div>
            </div>

            <!-- pinned classes start -->
            <div class="d-flex flex-wrap justify-content-between">
              <div
                class="st-card col-sm-12 col-lg-4 col-md-12 d-flex align-items-center p-2 pe-0 my-2"
              >
                <img
                  class="st-img rounded-circle mx-2"
                  src="assets/download (3).jpg"
                  alt=""
                  width="42"
                  height="42"
                />
                <div class="course-tn">
                  <p class="course-t m-0">CSE-3213 Digital Signal</p>
                  <p class="course-n m-0">Ryann Rodgers</p>
                </div>
              </div>
              <div
                class="st-card col-sm-12 col-lg-4 col-md-12 d-flex align-items-center p-2 pe-0 my-2"
              >
                <img
                  class="st-img rounded-circle mx-2"
                  src="assets/pexels-nitin-khajotia-1516680.jpg"
                  alt=""
                  width="42"
                  height="42"
                />
                <div class="course-tn">
                  <p class="course-t m-0">CSE-3213 Digital Signal</p>
                  <p class="course-n m-0">Ryann Rodgers</p>
                </div>
              </div>
              <div
                class="st-card col-sm-12 col-lg-4 col-md-12 d-flex align-items-center p-2 pe-0 my-2"
              >
                <img
                  class="st-img rounded-circle mx-2"
                  src="assets/irene-strong-v2aKnjMbP_k-unsplash.jpg"
                  alt=""
                  width="42"
                  height="42"
                />
                <div class="course-tn">
                  <p class="course-t m-0">CSE-3213 Digital Signal</p>
                  <p class="course-n m-0">Ryann Rodgers</p>
                </div>
              </div>
            </div>
            <!-- pinned classes end -->

            <!-- Teaching start -->
            <div class="pc d-flex my-3">
              <div class="col-6 d-flex">
                <p>Teaching<span class="dash-notification badge rounded-pill pb-1 ms-2"
                  >3</span</p>
              </div>
              <div class="col-6 text-end">
                <pclass="as-dt">view all</p>
              </div>
            </div>

            <div
              class="st-card col-lg-12 d-flex justify-content-between py-3 my-2"
            >
              <div class="d-flex align-items-center">
                <img
                  class="st-img rounded-circle mx-3"
                  src="assets/pexels-italo-melo-2379004.jpg"
                  alt=""
                  width="52"
                  height="52"
                />
                <div class="lvr vr "></div>
                <div class="course-tn mx-4">
                  <p class="course-t m-0 ">CSE-3213 Digital Signal</p>
                  <p class="course-n m-0">Ryann Rodgers</p>
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
                <img
                  class="st-img rounded-circle mx-3"
                  src="assets/alexander-krivitskiy-yIitNO2Bgdo-unsplash.jpg"
                  alt=""
                  width="52"
                  height="52"
                />
                <div class="lvr vr "></div>
                <div class="course-tn mx-4">
                  <p class="course-t m-0 ">CSE-3213 Digital Signal</p>
                  <p class="course-n m-0">Ryann Rodgers</p>
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
                <img
                  class="st-img rounded-circle mx-3"
                  src="assets/michael-dam-mEZ3PoFGs_k-unsplash.jpg"
                  alt=""
                  width="52"
                  height="52"
                />
                <div class="lvr vr "></div>
                <div class="course-tn mx-4">
                  <p class="course-t m-0 ">CSE-3213 Digital Signal</p>
                  <p class="course-n m-0">Ryann Rodgers</p>
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
            <!-- Teaching end -->


            

            <!-- Joined Classes start -->
            <div class="pc d-flex my-3">
              <div class="col-6 d-flex">
                <p>Joined Classes<span class="dash-notification badge rounded-pill pb-1 ms-2"
                  >3</span</p>
              </div>
              <div class="col-6 text-end">
                <p class="as-dt">view all</p>
              </div>
            </div>

            <div
              class="st-card col-lg-12 d-flex justify-content-between py-3 my-2"
            >
              <div class="d-flex align-items-center">
                <img
                  class="st-img rounded-circle mx-3"
                  src="assets/pexels-italo-melo-2379004.jpg"
                  alt=""
                  width="52"
                  height="52"
                />
                <div class="lvr vr "></div>
                <div class="course-tn mx-4">
                  <p class="course-t m-0 ">CSE-3213 Digital Signal</p>
                  <p class="course-n m-0">Ryann Rodgers</p>
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
                <img
                  class="st-img rounded-circle mx-3"
                  src="assets/midas-hofstra-tidSLv-UaNs-unsplash.jpg"
                  alt=""
                  width="52"
                  height="52"
                />
                <div class="lvr vr "></div>
                <div class="course-tn mx-4">
                  <p class="course-t m-0 ">CSE-3213 Digital Signal</p>
                  <p class="course-n m-0">Ryann Rodgers</p>
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
                <img
                  class="st-img rounded-circle mx-3"
                  src="assets/priscilla-du-preez-YFC9Aky2rUg-unsplash.jpg"
                  alt=""
                  width="52"
                  height="52"
                />
                <div class="lvr vr "></div>
                <div class="course-tn mx-4">
                  <p class="course-t m-0 ">CSE-3213 Digital Signal</p>
                  <p class="course-n m-0">Ryann Rodgers</p>
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


            <!-- Joined Classes end -->

            <!-- star-student-start -->
            <div class="pc d-flex my-3">
              <div class="col-6 d-flex">
                <p >Star students<span class="dash-notification badge rounded-pill pb-1 ms-2"
                  >3</span</p>
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

          <div class="col-lg-4 col-md-12">
            <div class="pc d-flex">
              <div class="col-6 d-flex">
                <p>To Do <span class="dash-notification badge rounded-pill pb-1"
                  >3</span</p>
              </div>
              <div class="col-6 text-end">
                <p class="as-dt">view all</p>
              </div>
            </div>
            <div class="assignment">
              <div class="assignment-box d-flex p-3">
                <div class="col-6">
                  <p class="assignment-title">Assignment 01</p>
                  <p class="as-sub m-0">Digital Signal Processing</p>
                  <p class="as-dt m-0">Today | 02:00 pm</p>
                </div>
                <div class="col-6 text-end">
                  <p class="as-sub">100 points</p>
                </div>
              </div>
              <div class="assignment-box d-flex p-3">
                <div class="col-6">
                  <p class="assignment-title">Assignment 01</p>
                  <p class="as-sub m-0">Digital Signal Processing</p>
                  <p class="as-dt m-0">Today | 02:00 pm</p>
                </div>
                <div class="col-6 text-end">
                  <p class="as-sub">100 points</p>
                </div>
              </div>
              <div class="assignment-box d-flex p-3">
                <div class="col-6">
                  <p class="assignment-title">Assignment 01</p>
                  <p class="as-sub m-0">Digital Signal Processing</p>
                  <p class="as-dt m-0">Today | 02:00 pm</p>
                </div>
                <div class="col-6 text-end">
                  <p class="as-sub">100 points</p>
                </div>
              </div>
            </div>
            <div class="pc d-flex my-2">
              <div class="col-6 d-flex">
                <p>
                  To Review
                  <span class="dash-notification badge rounded-pill pb-1"
                    >3</span
                  >
                </p>
              </div>
              <div class="col-6 text-end">
                <p class="as-dt">view all</p>
              </div>
            </div>
            <div class="assignment">
              <div class="assignment-box d-flex p-3">
                <div class="col-6">
                  <p class="assignment-title">Assignment 04</p>
                  <p class="as-sub m-0">Digital Signal Processing</p>
                  <p class="as-dt m-0">Today | 02:00 pm</p>
                </div>
                <div class="col-6 text-end">
                  <p class="as-sub">100 points</p>
                </div>
              </div>
              <div class="assignment-box d-flex p-3">
                <div class="col-6">
                  <p class="assignment-title">Assignment 05</p>
                  <p class="as-sub m-0">Digital Signal Processing</p>
                  <p class="as-dt m-0">Today | 02:00 pm</p>
                </div>
                <div class="col-6 text-end">
                  <p class="as-sub">100 points</p>
                </div>
              </div>
              <div class="assignment-box d-flex p-3">
                <div class="col-6">
                  <p class="assignment-title">Assignment 05</p>
                  <p class="as-sub m-0">Digital Signal Processing</p>
                  <p class="as-dt m-0">Today | 02:00 pm</p>
                </div>
                <div class="col-6 text-end">
                  <p class="as-sub">100 points</p>
                </div>
              </div>
            </div>
          </div>
        </div>
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

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
