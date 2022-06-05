@extends('layouts.classroomMaster')
@section('content')
{{-- start:main section --}}
<section class="main-content">
  <div class="container">
    @include('components.classHead')  
    <div class="row">
      <div class="col-lg-9">
        @include('navbar.classNav')
        {{-- start:session message(error) --}}
        @if (session()->has('message'))
              @include('components.alertBar')
        @endif
        {{-- end:session message(error) --}}


        <!-- Lecture-note start-->

        <!-- headline start -->
        <div class="pc d-flex my-4">
            <p class="m-0 my-3">Lecture Notes<span class="dash-notification badge rounded-pill pb-1 ms-2"
            >02</span></p>
        </div>
        <!-- headline end -->
        <div class="accordion my-2" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingone">
              <button class="accordion-button collapsed st-card-assign col-lg-12 d-flex justify-content-between" type="button" >
                <div class="d-flex align-items-center" data-bs-toggle="collapse" data-bs-target="#collapseone" aria-expanded="false"aria-controls="collapseone">
                  <div class="cd-date mx-3">
                    <p class="cd-date-p1 m-0">APR</p>
                    <p class="cd-date-p2 m-0">25</p>
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
                      <p class="course-t m-0">
                        Jerome Shaw has posted a new assignment.
                      </p>
                      <i class="fa-solid fa-thumbtack mx-3"></i>
                      <p class="course-n m-0">Pinned</p>
                    </div>
                    <p class="course-n m-0">Due Monday | 12:00 am</p>
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
            <div
              id="collapseone"
              class="accordion-collapse collapse"
              aria-labelledby="headingone"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <div>
                  <p class="announce-txt-p m-2 ms-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Phasellus imperdiet, nulla et dictum interdum, nisi lorem
                    egestas vitae scel<span id="dots">...</span
                    ><span id="more"
                      >erisque enim ligula venenatis dolor. Maecenas nisl est,
                      ultrices nec congue eget, auctor vitae massa. Fusce luctus
                      vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed
                      ullamcorper ipsum dignissim ac. In at libero sed nunc
                      venenatis imperdiet sed ornare turpis. Donec vitae dui eget
                      tellus gravida venenatis. Integer fringilla congue eros non
                      fermentum. Sed dapibus pulvinar nibh tempor porta.</span
                    >
                    <button
                      class="readmore-bt"
                      onclick="myFunction()"
                      id="myBtn1"
                    >
                      Read more
                    </button>
                  </p>
                  <!-- slider -->
                  <div
                    id="carouselExampleControls"
                    class="carousel slide"
                    data-bs-ride="carousel"
                  >
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="cards-wrapper">
                          <!-- <div class="card"> -->
                          <div
                            class="foy-post-RearangeBox foy-post-imgThumbContainer"
                          >
                            <a href="image.jpg" download
                              ><i
                                class="fa-solid fa-cloud-arrow-down foy-action-button"
                                download
                              >
                              </i
                            ></a>
                            <div class="foy-post-imgThumbnail">
                              <video
                                id="bb"
                                class="foy-video foy-blurEffect"
                                height="100%"
                                width="100%"
                              >
                                <source src="video.mp4" type=video/mp4> <source
                                src= "error.webm" type=video/webm>
                              </video>
                              <div class="foy-content">
                                <div class="foy-play">►</div>
                              </div>
                            </div>
                            <div class="foy-post-info">
                              <div>
                                <a href="video.mp4" target="_blank"
                                  ><p class="foy-post-imgName">NewVideo.mp4</p></a
                                >
                              </div>
                              <div>
                                <p class="foy-post-type">Video</p>
                              </div>
                            </div>
                          </div>
                          <!-- </div> -->
                          <!-- <div class="card d-none d-md-block"> -->
                          <div
                            class="foy-post-RearangeBox foy-post-imgThumbContainer d-none d-md-block"
                          >
                            <a href="image.jpg" download
                              ><i
                                class="fa-solid fa-cloud-arrow-down foy-action-button"
                                download
                              >
                              </i
                            ></a>
                            <div class="foy-post-imgThumbnail">
                              <video
                                id="bb"
                                class="foy-video foy-blurEffect"
                                height="100%"
                                width="100%"
                              >
                                <source src="video.mp4" type=video/mp4> <source
                                src= "error.webm" type=video/webm>
                              </video>
                              <div class="foy-content">
                                <div class="foy-play">►</div>
                              </div>
                            </div>
                            <div class="foy-post-info">
                              <div>
                                <a href="video.mp4" target="_blank"
                                  ><p class="foy-post-imgName">NewVideo.mp4</p></a
                                >
                              </div>
                              <div>
                                <p class="foy-post-type">Video</p>
                              </div>
                            </div>
                          </div>
                          <!-- </div> -->
                          <!-- <div class="card d-none d-md-block"> -->
                          <div
                            class="foy-post-RearangeBox foy-post-imgThumbContainer d-none d-md-block"
                          >
                            <a href="image.jpg" download
                              ><i
                                class="fa-solid fa-cloud-arrow-down foy-action-button"
                                download
                              >
                              </i
                            ></a>
                            <div class="foy-post-imgThumbnail">
                              <video
                                id="bb"
                                class="foy-video foy-blurEffect"
                                height="100%"
                                width="100%"
                              >
                                <source src="video.mp4" type=video/mp4> <source
                                src= "error.webm" type=video/webm>
                              </video>
                              <div class="foy-content">
                                <div class="foy-play">►</div>
                              </div>
                            </div>
                            <div class="foy-post-info">
                              <div>
                                <a href="video.mp4" target="_blank"
                                  ><p class="foy-post-imgName">NewVideo.mp4</p></a
                                >
                              </div>
                              <div>
                                <p class="foy-post-type">Video</p>
                              </div>
                            </div>
                          </div>
                          <!-- </div> -->
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="cards-wrapper">
                          <!-- <div class="card"> -->
                          <div
                            class="foy-post-RearangeBox foy-post-imgThumbContainer"
                          >
                            <a href="image.jpg" download
                              ><i
                                class="fa-solid fa-cloud-arrow-down foy-action-button"
                                download
                              >
                              </i
                            ></a>
                            <div class="foy-post-imgThumbnail">
                              <video
                                id="bb"
                                class="foy-video foy-blurEffect"
                                height="100%"
                                width="100%"
                              >
                                <source src="video.mp4" type=video/mp4> <source
                                src= "error.webm" type=video/webm>
                              </video>
                              <div class="foy-content">
                                <div class="foy-play">►</div>
                              </div>
                            </div>
                            <div class="foy-post-info">
                              <div>
                                <a href="video.mp4" target="_blank"
                                  ><p class="foy-post-imgName">NewVideo.mp4</p></a
                                >
                              </div>
                              <div>
                                <p class="foy-post-type">Video</p>
                              </div>
                            </div>
                          </div>
                          <!-- </div> -->
                          <!-- <div class="card d-none d-md-block"> -->
                          <div
                            class="foy-post-RearangeBox foy-post-imgThumbContainer d-none d-md-block"
                          >
                            <a href="image.jpg" download
                              ><i
                                class="fa-solid fa-cloud-arrow-down foy-action-button"
                                download
                              >
                              </i
                            ></a>
                            <div class="foy-post-imgThumbnail">
                              <video
                                id="bb"
                                class="foy-video foy-blurEffect"
                                height="100%"
                                width="100%"
                              >
                                <source src="video.mp4" type=video/mp4> <source
                                src= "error.webm" type=video/webm>
                              </video>
                              <div class="foy-content">
                                <div class="foy-play">►</div>
                              </div>
                            </div>
                            <div class="foy-post-info">
                              <div>
                                <a href="video.mp4" target="_blank"
                                  ><p class="foy-post-imgName">NewVideo.mp4</p></a
                                >
                              </div>
                              <div>
                                <p class="foy-post-type">Video</p>
                              </div>
                            </div>
                          </div>
                          <!-- </div> -->
                          <div
                            class="foy-post-RearangeBox foy-post-imgThumbContainer d-none d-md-block"
                          >
                            <a href="image.jpg" download
                              ><i
                                class="fa-solid fa-cloud-arrow-down foy-action-button"
                                download
                              >
                              </i
                            ></a>
                            <div class="foy-post-imgThumbnail">
                              <video
                                id="bb"
                                class="foy-video foy-blurEffect"
                                height="100%"
                                width="100%"
                              >
                                <source src="video.mp4" type=video/mp4> <source
                                src= "error.webm" type=video/webm>
                              </video>
                              <div class="foy-content">
                                <div class="foy-play">►</div>
                              </div>
                            </div>
                            <div class="foy-post-info">
                              <div>
                                <a href="video.mp4" target="_blank"
                                  ><p class="foy-post-imgName">NewVideo.mp4</p></a
                                >
                              </div>
                              <div>
                                <p class="foy-post-type">Video</p>
                              </div>
                            </div>
                          </div>
                          <!-- </div> -->
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="cards-wrapper">
                          <!-- <div class="card"> -->
                          <div
                            class="foy-post-RearangeBox foy-post-imgThumbContainer"
                          >
                            <a href="image.jpg" download
                              ><i
                                class="fa-solid fa-cloud-arrow-down foy-action-button"
                                download
                              >
                              </i
                            ></a>
                            <div class="foy-post-imgThumbnail">
                              <video
                                id="bb"
                                class="foy-video foy-blurEffect"
                                height="100%"
                                width="100%"
                              >
                                <source src="video.mp4" type=video/mp4> <source
                                src= "error.webm" type=video/webm>
                              </video>
                              <div class="foy-content">
                                <div class="foy-play">►</div>
                              </div>
                            </div>
                            <div class="foy-post-info">
                              <div>
                                <a href="video.mp4" target="_blank"
                                  ><p class="foy-post-imgName">NewVideo.mp4</p></a
                                >
                              </div>
                              <div>
                                <p class="foy-post-type">Video</p>
                              </div>
                            </div>
                          </div>
                          <!-- </div> -->
                          <!-- <div class="card d-none d-md-block"> -->
                          <div
                            class="foy-post-RearangeBox foy-post-imgThumbContainer d-none d-md-block"
                          >
                            <a href="image.jpg" download
                              ><i
                                class="fa-solid fa-cloud-arrow-down foy-action-button"
                                download
                              >
                              </i
                            ></a>
                            <div class="foy-post-imgThumbnail">
                              <video
                                id="bb"
                                class="foy-video foy-blurEffect"
                                height="100%"
                                width="100%"
                              >
                                <source src="video.mp4" type=video/mp4> <source
                                src= "error.webm" type=video/webm>
                              </video>
                              <div class="foy-content">
                                <div class="foy-play">►</div>
                              </div>
                            </div>
                            <div class="foy-post-info">
                              <div>
                                <a href="video.mp4" target="_blank"
                                  ><p class="foy-post-imgName">NewVideo.mp4</p></a
                                >
                              </div>
                              <div>
                                <p class="foy-post-type">Video</p>
                              </div>
                            </div>
                          </div>
                          <!-- </div> -->
                          <!-- <div class="card d-none d-md-block"> -->
                          <div
                            class="foy-post-RearangeBox foy-post-imgThumbContainer d-none d-md-block"
                          >
                            <a href="image.jpg" download
                              ><i
                                class="fa-solid fa-cloud-arrow-down foy-action-button"
                                download
                              >
                              </i
                            ></a>
                            <div class="foy-post-imgThumbnail">
                              <video
                                id="bb"
                                class="foy-video foy-blurEffect"
                                height="100%"
                                width="100%"
                              >
                                <source src="video.mp4" type=video/mp4> <source
                                src= "error.webm" type=video/webm>
                              </video>
                              <div class="foy-content">
                                <div class="foy-play">►</div>
                              </div>
                            </div>
                            <div class="foy-post-info">
                              <div>
                                <a href="video.mp4" target="_blank"
                                  ><p class="foy-post-imgName">NewVideo.mp4</p></a
                                >
                              </div>
                              <div>
                                <p class="foy-post-type">Video</p>
                              </div>
                            </div>
                          </div>
                          <!-- </div> -->
                        </div>
                      </div>
                    </div>
                    <a
                      class="carousel-control-next next-width"
                      href="#carouselExampleControls"
                      role="button"
                      data-bs-slide="next"
                    >
                      <span class="next-bt" aria-hidden="true">
                        <i class="fas fa-angle-right"></i>
                      </span>
                    </a>
                  </div>
                  <!-- slider end -->
  
                  <hr class="style1 my-4" />
                  <div class="d-flex justify-content-between mx-4">
                    <button type="button" class="btn announce-b2 px-3 me-3">
                      View Assignment
                    </button>
                    <div class="d-flex">
                      <a class="assign-bta mx-2">
                        <p class="cda-date-p2 m-0 mx-3">15</p>
                        <p class="cda-date-p1 m-0">Graded</p>
                      </a>
                      <a class="assign-bta mx-2">
                        <p class="cda-date-p2 m-0 mx-4">10</p>
                        <p class="cda-date-p1 m-0">Assigned</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Lecture-note end -->

        <!-- headline start -->
        <div class="pc d-flex my-4">
            <p class="m-0 my-3">Class Notes <span class="dash-notification badge rounded-pill pb-1 ms-2"
            >03</span></p>
        </div>
        <!-- headline end -->
        <div class="accordion my-2" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingfour">
              <button
                class="accordion-button collapsed st-card-assign col-lg-12 d-flex justify-content-between"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapsefour"
                aria-expanded="false"
                aria-controls="collapsefour"
              >
                <div class="d-flex align-items-center">
                  <div class="cd-date mx-3">
                    <p class="cd-date-p1 m-0">APR</p>
                    <p class="cd-date-p2 m-0">25</p>
                  </div>
                  <div class="lvr vr"></div>
                  <img
                    class="st-img rounded-circle mx-3"
                    src="{{ asset('assets/images/assets/a1.png') }}"
                    alt=""
                    width="42"
                    height="42"
                  />
                  <div class="course-tn">
                    <div class="d-flex">
                      <p class="course-t m-0">
                        Jerome Shaw has posted a new assignment.
                      </p>
                      <i class="fa-solid fa-thumbtack mx-3"></i>
                      <p class="course-n m-0">Pinned</p>
                    </div>
                    <p class="course-n m-0">Due Monday | 12:00 am</p>
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
                    <li><a class="dd-item dropdown-item" href="#">Remove</a></li>
                    <li>
                      <a class="dd-item dropdown-item" href="#">Make host</a>
                    </li>
                  </ul>
                </div>
                <!-- dropdown end -->
              </button>
            </h2>
            <div
              id="collapsefour"
              class="accordion-collapse collapse"
              aria-labelledby="headingone"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <div>
                  <p class="announce-txt-p m-2 ms-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Phasellus imperdiet, nulla et dictum interdum, nisi lorem
                    egestas vitae scel<span id="dots">...</span
                    ><span id="more"
                      >erisque enim ligula venenatis dolor. Maecenas nisl est,
                      ultrices nec congue eget, auctor vitae massa. Fusce luctus
                      vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed
                      ullamcorper ipsum dignissim ac. In at libero sed nunc
                      venenatis imperdiet sed ornare turpis. Donec vitae dui eget
                      tellus gravida venenatis. Integer fringilla congue eros non
                      fermentum. Sed dapibus pulvinar nibh tempor porta.</span
                    >
                    <button
                      class="readmore-bt"
                      onclick="myFunction()"
                      id="myBtn1"
                    >
                      Read more
                    </button>
                  </p>
                  <!-- slider -->
                  <div
                    id="carouselExampleControls"
                    class="carousel slide"
                    data-bs-ride="carousel"
                  >
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="cards-wrapper">
                          <!-- <div class="card"> -->
                          <div
                            class="foy-post-RearangeBox foy-post-imgThumbContainer"
                          >
                            <a href="image.jpg" download
                              ><i
                                class="fa-solid fa-cloud-arrow-down foy-action-button"
                                download
                              >
                              </i
                            ></a>
                            <div class="foy-post-imgThumbnail">
                              <video
                                id="bb"
                                class="foy-video foy-blurEffect"
                                height="100%"
                                width="100%"
                              >
                                <source src="video.mp4" type=video/mp4> <source
                                src= "error.webm" type=video/webm>
                              </video>
                              <div class="foy-content">
                                <div class="foy-play">►</div>
                              </div>
                            </div>
                            <div class="foy-post-info">
                              <div>
                                <a href="video.mp4" target="_blank"
                                  ><p class="foy-post-imgName">NewVideo.mp4</p></a
                                >
                              </div>
                              <div>
                                <p class="foy-post-type">Video</p>
                              </div>
                            </div>
                          </div>
                          <!-- </div> -->
                          <!-- <div class="card d-none d-md-block"> -->
                          <div
                            class="foy-post-RearangeBox foy-post-imgThumbContainer d-none d-md-block"
                          >
                            <a href="image.jpg" download
                              ><i
                                class="fa-solid fa-cloud-arrow-down foy-action-button"
                                download
                              >
                              </i
                            ></a>
                            <div class="foy-post-imgThumbnail">
                              <video
                                id="bb"
                                class="foy-video foy-blurEffect"
                                height="100%"
                                width="100%"
                              >
                                <source src="video.mp4" type=video/mp4> <source
                                src= "error.webm" type=video/webm>
                              </video>
                              <div class="foy-content">
                                <div class="foy-play">►</div>
                              </div>
                            </div>
                            <div class="foy-post-info">
                              <div>
                                <a href="video.mp4" target="_blank"
                                  ><p class="foy-post-imgName">NewVideo.mp4</p></a
                                >
                              </div>
                              <div>
                                <p class="foy-post-type">Video</p>
                              </div>
                            </div>
                          </div>
                          <!-- </div> -->
                          <!-- <div class="card d-none d-md-block"> -->
                          <div
                            class="foy-post-RearangeBox foy-post-imgThumbContainer d-none d-md-block"
                          >
                            <a href="image.jpg" download
                              ><i
                                class="fa-solid fa-cloud-arrow-down foy-action-button"
                                download
                              >
                              </i
                            ></a>
                            <div class="foy-post-imgThumbnail">
                              <video
                                id="bb"
                                class="foy-video foy-blurEffect"
                                height="100%"
                                width="100%"
                              >
                                <source src="video.mp4" type=video/mp4> <source
                                src= "error.webm" type=video/webm>
                              </video>
                              <div class="foy-content">
                                <div class="foy-play">►</div>
                              </div>
                            </div>
                            <div class="foy-post-info">
                              <div>
                                <a href="video.mp4" target="_blank"
                                  ><p class="foy-post-imgName">NewVideo.mp4</p></a
                                >
                              </div>
                              <div>
                                <p class="foy-post-type">Video</p>
                              </div>
                            </div>
                          </div>
                          <!-- </div> -->
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="cards-wrapper">
                          <!-- <div class="card"> -->
                          <div
                            class="foy-post-RearangeBox foy-post-imgThumbContainer"
                          >
                            <a href="image.jpg" download
                              ><i
                                class="fa-solid fa-cloud-arrow-down foy-action-button"
                                download
                              >
                              </i
                            ></a>
                            <div class="foy-post-imgThumbnail">
                              <video
                                id="bb"
                                class="foy-video foy-blurEffect"
                                height="100%"
                                width="100%"
                              >
                                <source src="video.mp4" type=video/mp4> <source
                                src= "error.webm" type=video/webm>
                              </video>
                              <div class="foy-content">
                                <div class="foy-play">►</div>
                              </div>
                            </div>
                            <div class="foy-post-info">
                              <div>
                                <a href="video.mp4" target="_blank"
                                  ><p class="foy-post-imgName">NewVideo.mp4</p></a
                                >
                              </div>
                              <div>
                                <p class="foy-post-type">Video</p>
                              </div>
                            </div>
                          </div>
                          <!-- </div> -->
                          <!-- <div class="card d-none d-md-block"> -->
                          <div
                            class="foy-post-RearangeBox foy-post-imgThumbContainer d-none d-md-block"
                          >
                            <a href="image.jpg" download
                              ><i
                                class="fa-solid fa-cloud-arrow-down foy-action-button"
                                download
                              >
                              </i
                            ></a>
                            <div class="foy-post-imgThumbnail">
                              <video
                                id="bb"
                                class="foy-video foy-blurEffect"
                                height="100%"
                                width="100%"
                              >
                                <source src="video.mp4" type=video/mp4> <source
                                src= "error.webm" type=video/webm>
                              </video>
                              <div class="foy-content">
                                <div class="foy-play">►</div>
                              </div>
                            </div>
                            <div class="foy-post-info">
                              <div>
                                <a href="video.mp4" target="_blank"
                                  ><p class="foy-post-imgName">NewVideo.mp4</p></a
                                >
                              </div>
                              <div>
                                <p class="foy-post-type">Video</p>
                              </div>
                            </div>
                          </div>
                          <!-- </div> -->
                          <div
                            class="foy-post-RearangeBox foy-post-imgThumbContainer d-none d-md-block"
                          >
                            <a href="image.jpg" download
                              ><i
                                class="fa-solid fa-cloud-arrow-down foy-action-button"
                                download
                              >
                              </i
                            ></a>
                            <div class="foy-post-imgThumbnail">
                              <video
                                id="bb"
                                class="foy-video foy-blurEffect"
                                height="100%"
                                width="100%"
                              >
                                <source src="video.mp4" type=video/mp4> <source
                                src= "error.webm" type=video/webm>
                              </video>
                              <div class="foy-content">
                                <div class="foy-play">►</div>
                              </div>
                            </div>
                            <div class="foy-post-info">
                              <div>
                                <a href="video.mp4" target="_blank"
                                  ><p class="foy-post-imgName">NewVideo.mp4</p></a
                                >
                              </div>
                              <div>
                                <p class="foy-post-type">Video</p>
                              </div>
                            </div>
                          </div>
                          <!-- </div> -->
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="cards-wrapper">
                          <!-- <div class="card"> -->
                          <div
                            class="foy-post-RearangeBox foy-post-imgThumbContainer"
                          >
                            <a href="image.jpg" download
                              ><i
                                class="fa-solid fa-cloud-arrow-down foy-action-button"
                                download
                              >
                              </i
                            ></a>
                            <div class="foy-post-imgThumbnail">
                              <video
                                id="bb"
                                class="foy-video foy-blurEffect"
                                height="100%"
                                width="100%"
                              >
                                <source src="video.mp4" type=video/mp4> <source
                                src= "error.webm" type=video/webm>
                              </video>
                              <div class="foy-content">
                                <div class="foy-play">►</div>
                              </div>
                            </div>
                            <div class="foy-post-info">
                              <div>
                                <a href="video.mp4" target="_blank"
                                  ><p class="foy-post-imgName">NewVideo.mp4</p></a
                                >
                              </div>
                              <div>
                                <p class="foy-post-type">Video</p>
                              </div>
                            </div>
                          </div>
                          <!-- </div> -->
                          <!-- <div class="card d-none d-md-block"> -->
                          <div
                            class="foy-post-RearangeBox foy-post-imgThumbContainer d-none d-md-block"
                          >
                            <a href="image.jpg" download
                              ><i
                                class="fa-solid fa-cloud-arrow-down foy-action-button"
                                download
                              >
                              </i
                            ></a>
                            <div class="foy-post-imgThumbnail">
                              <video
                                id="bb"
                                class="foy-video foy-blurEffect"
                                height="100%"
                                width="100%"
                              >
                                <source src="video.mp4" type=video/mp4> <source
                                src= "error.webm" type=video/webm>
                              </video>
                              <div class="foy-content">
                                <div class="foy-play">►</div>
                              </div>
                            </div>
                            <div class="foy-post-info">
                              <div>
                                <a href="video.mp4" target="_blank"
                                  ><p class="foy-post-imgName">NewVideo.mp4</p></a
                                >
                              </div>
                              <div>
                                <p class="foy-post-type">Video</p>
                              </div>
                            </div>
                          </div>
                          <!-- </div> -->
                          <!-- <div class="card d-none d-md-block"> -->
                          <div
                            class="foy-post-RearangeBox foy-post-imgThumbContainer d-none d-md-block"
                          >
                            <a href="image.jpg" download
                              ><i
                                class="fa-solid fa-cloud-arrow-down foy-action-button"
                                download
                              >
                              </i
                            ></a>
                            <div class="foy-post-imgThumbnail">
                              <video
                                id="bb"
                                class="foy-video foy-blurEffect"
                                height="100%"
                                width="100%"
                              >
                                <source src="video.mp4" type=video/mp4> <source
                                src= "error.webm" type=video/webm>
                              </video>
                              <div class="foy-content">
                                <div class="foy-play">►</div>
                              </div>
                            </div>
                            <div class="foy-post-info">
                              <div>
                                <a href="video.mp4" target="_blank"
                                  ><p class="foy-post-imgName">NewVideo.mp4</p></a
                                >
                              </div>
                              <div>
                                <p class="foy-post-type">Video</p>
                              </div>
                            </div>
                          </div>
                          <!-- </div> -->
                        </div>
                      </div>
                    </div>
                    <a
                      class="carousel-control-next next-width"
                      href="#carouselExampleControls"
                      role="button"
                      data-bs-slide="next"
                    >
                      <span class="next-bt" aria-hidden="true">
                        <i class="fas fa-angle-right"></i>
                      </span>
                    </a>
                  </div>
                  <!-- slider end -->
  
                  <hr class="style1 my-4" />
                  <div class="d-flex justify-content-between mx-4">
                    <button type="button" class="btn announce-b2 px-3 me-3">
                      View Assignment
                    </button>
                    <div class="d-flex">
                      <a class="assign-bta mx-2">
                        <p class="cda-date-p2 m-0 mx-3">15</p>
                        <p class="cda-date-p1 m-0">Graded</p>
                      </a>
                      <a class="assign-bta mx-2">
                        <p class="cda-date-p2 m-0 mx-4">10</p>
                        <p class="cda-date-p1 m-0">Assigned</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion my-2" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingfive">
              <button
                class="accordion-button collapsed st-card-assign col-lg-12 d-flex justify-content-between"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapsefive"
                aria-expanded="false"
                aria-controls="collapsefive"
              >
                <div class="d-flex align-items-center">
                  <div class="cd-date mx-3">
                    <p class="cd-date-p1 m-0">APR</p>
                    <p class="cd-date-p2 m-0">25</p>
                  </div>
                  <div class="lvr vr"></div>
                  <img
                    class="st-img rounded-circle mx-3"
                    src="assets/a1.png"
                    alt=""
                    width="42"
                    height="42"
                  />
                  <div class="course-tn">
                    <div class="d-flex">
                      <p class="course-t m-0">
                        Jerome Shaw has posted a new assignment.
                      </p>
                      <i class="fa-solid fa-thumbtack mx-3"></i>
                      <p class="course-n m-0">Pinned</p>
                    </div>
                    <p class="course-n m-0">Due Monday | 12:00 am</p>
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
                    <li><a class="dd-item dropdown-item" href="#">Remove</a></li>
                    <li>
                      <a class="dd-item dropdown-item" href="#">Make host</a>
                    </li>
                  </ul>
                </div>
                <!-- dropdown end -->
              </button>
            </h2>
            <div
              id="collapsefive"
              class="accordion-collapse collapse"
              aria-labelledby="headingfive"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <div>
                  <p class="announce-txt-p m-2 ms-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Phasellus imperdiet, nulla et dictum interdum, nisi lorem
                    egestas vitae scel<span id="dots">...</span
                    ><span id="more"
                      >erisque enim ligula venenatis dolor. Maecenas nisl est,
                      ultrices nec congue eget, auctor vitae massa. Fusce luctus
                      vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed
                      ullamcorper ipsum dignissim ac. In at libero sed nunc
                      venenatis imperdiet sed ornare turpis. Donec vitae dui eget
                      tellus gravida venenatis. Integer fringilla congue eros non
                      fermentum. Sed dapibus pulvinar nibh tempor porta.</span
                    >
                    <button
                      class="readmore-bt"
                      onclick="myFunction()"
                      id="myBtn1"
                    >
                      Read more
                    </button>
                  </p>
                  <!-- slider -->
                  <div
                    id="carouselExampleControls"
                    class="carousel slide"
                    data-bs-ride="carousel"
                  >
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="cards-wrapper">
                          <!-- <div class="card"> -->
                          <div
                            class="foy-post-RearangeBox foy-post-imgThumbContainer"
                          >
                            <a href="image.jpg" download
                              ><i
                                class="fa-solid fa-cloud-arrow-down foy-action-button"
                                download
                              >
                              </i
                            ></a>
                            <div class="foy-post-imgThumbnail">
                              <video
                                id="bb"
                                class="foy-video foy-blurEffect"
                                height="100%"
                                width="100%"
                              >
                                <source src="video.mp4" type=video/mp4> <source
                                src= "error.webm" type=video/webm>
                              </video>
                              <div class="foy-content">
                                <div class="foy-play">►</div>
                              </div>
                            </div>
                            <div class="foy-post-info">
                              <div>
                                <a href="video.mp4" target="_blank"
                                  ><p class="foy-post-imgName">NewVideo.mp4</p></a
                                >
                              </div>
                              <div>
                                <p class="foy-post-type">Video</p>
                              </div>
                            </div>
                          </div>
                          <!-- </div> -->
                          <!-- <div class="card d-none d-md-block"> -->
                          <div
                            class="foy-post-RearangeBox foy-post-imgThumbContainer d-none d-md-block"
                          >
                            <a href="image.jpg" download
                              ><i
                                class="fa-solid fa-cloud-arrow-down foy-action-button"
                                download
                              >
                              </i
                            ></a>
                            <div class="foy-post-imgThumbnail">
                              <video
                                id="bb"
                                class="foy-video foy-blurEffect"
                                height="100%"
                                width="100%"
                              >
                                <source src="video.mp4" type=video/mp4> <source
                                src= "error.webm" type=video/webm>
                              </video>
                              <div class="foy-content">
                                <div class="foy-play">►</div>
                              </div>
                            </div>
                            <div class="foy-post-info">
                              <div>
                                <a href="video.mp4" target="_blank"
                                  ><p class="foy-post-imgName">NewVideo.mp4</p></a
                                >
                              </div>
                              <div>
                                <p class="foy-post-type">Video</p>
                              </div>
                            </div>
                          </div>
                          <!-- </div> -->
                          <!-- <div class="card d-none d-md-block"> -->
                          <div
                            class="foy-post-RearangeBox foy-post-imgThumbContainer d-none d-md-block"
                          >
                            <a href="image.jpg" download
                              ><i
                                class="fa-solid fa-cloud-arrow-down foy-action-button"
                                download
                              >
                              </i
                            ></a>
                            <div class="foy-post-imgThumbnail">
                              <video
                                id="bb"
                                class="foy-video foy-blurEffect"
                                height="100%"
                                width="100%"
                              >
                                <source src="video.mp4" type=video/mp4> <source
                                src= "error.webm" type=video/webm>
                              </video>
                              <div class="foy-content">
                                <div class="foy-play">►</div>
                              </div>
                            </div>
                            <div class="foy-post-info">
                              <div>
                                <a href="video.mp4" target="_blank"
                                  ><p class="foy-post-imgName">NewVideo.mp4</p></a
                                >
                              </div>
                              <div>
                                <p class="foy-post-type">Video</p>
                              </div>
                            </div>
                          </div>
                          <!-- </div> -->
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="cards-wrapper">
                          <!-- <div class="card"> -->
                          <div
                            class="foy-post-RearangeBox foy-post-imgThumbContainer"
                          >
                            <a href="image.jpg" download
                              ><i
                                class="fa-solid fa-cloud-arrow-down foy-action-button"
                                download
                              >
                              </i
                            ></a>
                            <div class="foy-post-imgThumbnail">
                              <video
                                id="bb"
                                class="foy-video foy-blurEffect"
                                height="100%"
                                width="100%"
                              >
                                <source src="video.mp4" type=video/mp4> <source
                                src= "error.webm" type=video/webm>
                              </video>
                              <div class="foy-content">
                                <div class="foy-play">►</div>
                              </div>
                            </div>
                            <div class="foy-post-info">
                              <div>
                                <a href="video.mp4" target="_blank"
                                  ><p class="foy-post-imgName">NewVideo.mp4</p></a
                                >
                              </div>
                              <div>
                                <p class="foy-post-type">Video</p>
                              </div>
                            </div>
                          </div>
                          <!-- </div> -->
                          <!-- <div class="card d-none d-md-block"> -->
                          <div
                            class="foy-post-RearangeBox foy-post-imgThumbContainer d-none d-md-block"
                          >
                            <a href="image.jpg" download
                              ><i
                                class="fa-solid fa-cloud-arrow-down foy-action-button"
                                download
                              >
                              </i
                            ></a>
                            <div class="foy-post-imgThumbnail">
                              <video
                                id="bb"
                                class="foy-video foy-blurEffect"
                                height="100%"
                                width="100%"
                              >
                                <source src="video.mp4" type=video/mp4> <source
                                src= "error.webm" type=video/webm>
                              </video>
                              <div class="foy-content">
                                <div class="foy-play">►</div>
                              </div>
                            </div>
                            <div class="foy-post-info">
                              <div>
                                <a href="video.mp4" target="_blank"
                                  ><p class="foy-post-imgName">NewVideo.mp4</p></a
                                >
                              </div>
                              <div>
                                <p class="foy-post-type">Video</p>
                              </div>
                            </div>
                          </div>
                          <!-- </div> -->
                          <div
                            class="foy-post-RearangeBox foy-post-imgThumbContainer d-none d-md-block"
                          >
                            <a href="image.jpg" download
                              ><i
                                class="fa-solid fa-cloud-arrow-down foy-action-button"
                                download
                              >
                              </i
                            ></a>
                            <div class="foy-post-imgThumbnail">
                              <video
                                id="bb"
                                class="foy-video foy-blurEffect"
                                height="100%"
                                width="100%"
                              >
                                <source src="video.mp4" type=video/mp4> <source
                                src= "error.webm" type=video/webm>
                              </video>
                              <div class="foy-content">
                                <div class="foy-play">►</div>
                              </div>
                            </div>
                            <div class="foy-post-info">
                              <div>
                                <a href="video.mp4" target="_blank"
                                  ><p class="foy-post-imgName">NewVideo.mp4</p></a
                                >
                              </div>
                              <div>
                                <p class="foy-post-type">Video</p>
                              </div>
                            </div>
                          </div>
                          <!-- </div> -->
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="cards-wrapper">
                          <!-- <div class="card"> -->
                          <div
                            class="foy-post-RearangeBox foy-post-imgThumbContainer"
                          >
                            <a href="image.jpg" download
                              ><i
                                class="fa-solid fa-cloud-arrow-down foy-action-button"
                                download
                              >
                              </i
                            ></a>
                            <div class="foy-post-imgThumbnail">
                              <video
                                id="bb"
                                class="foy-video foy-blurEffect"
                                height="100%"
                                width="100%"
                              >
                                <source src="video.mp4" type=video/mp4> <source
                                src= "error.webm" type=video/webm>
                              </video>
                              <div class="foy-content">
                                <div class="foy-play">►</div>
                              </div>
                            </div>
                            <div class="foy-post-info">
                              <div>
                                <a href="video.mp4" target="_blank"
                                  ><p class="foy-post-imgName">NewVideo.mp4</p></a
                                >
                              </div>
                              <div>
                                <p class="foy-post-type">Video</p>
                              </div>
                            </div>
                          </div>
                          <!-- </div> -->
                          <!-- <div class="card d-none d-md-block"> -->
                          <div
                            class="foy-post-RearangeBox foy-post-imgThumbContainer d-none d-md-block"
                          >
                            <a href="image.jpg" download
                              ><i
                                class="fa-solid fa-cloud-arrow-down foy-action-button"
                                download
                              >
                              </i
                            ></a>
                            <div class="foy-post-imgThumbnail">
                              <video
                                id="bb"
                                class="foy-video foy-blurEffect"
                                height="100%"
                                width="100%"
                              >
                                <source src="video.mp4" type=video/mp4> <source
                                src= "error.webm" type=video/webm>
                              </video>
                              <div class="foy-content">
                                <div class="foy-play">►</div>
                              </div>
                            </div>
                            <div class="foy-post-info">
                              <div>
                                <a href="video.mp4" target="_blank"
                                  ><p class="foy-post-imgName">NewVideo.mp4</p></a
                                >
                              </div>
                              <div>
                                <p class="foy-post-type">Video</p>
                              </div>
                            </div>
                          </div>
                          <!-- </div> -->
                          <!-- <div class="card d-none d-md-block"> -->
                          <div
                            class="foy-post-RearangeBox foy-post-imgThumbContainer d-none d-md-block"
                          >
                            <a href="image.jpg" download
                              ><i
                                class="fa-solid fa-cloud-arrow-down foy-action-button"
                                download
                              >
                              </i
                            ></a>
                            <div class="foy-post-imgThumbnail">
                              <video
                                id="bb"
                                class="foy-video foy-blurEffect"
                                height="100%"
                                width="100%"
                              >
                                <source src="video.mp4" type=video/mp4> <source
                                src= "error.webm" type=video/webm>
                              </video>
                              <div class="foy-content">
                                <div class="foy-play">►</div>
                              </div>
                            </div>
                            <div class="foy-post-info">
                              <div>
                                <a href="video.mp4" target="_blank"
                                  ><p class="foy-post-imgName">NewVideo.mp4</p></a
                                >
                              </div>
                              <div>
                                <p class="foy-post-type">Video</p>
                              </div>
                            </div>
                          </div>
                          <!-- </div> -->
                        </div>
                      </div>
                    </div>
                    <a
                      class="carousel-control-next next-width"
                      href="#carouselExampleControls"
                      role="button"
                      data-bs-slide="next"
                    >
                      <span class="next-bt" aria-hidden="true">
                        <i class="fas fa-angle-right"></i>
                      </span>
                    </a>
                  </div>
                  <!-- slider end -->
  
                  <hr class="style1 my-4" />
                  <div class="d-flex justify-content-between mx-4">
                    <button type="button" class="btn announce-b2 px-3 me-3">
                      View Assignment
                    </button>
                    <div class="d-flex">
                      <a class="assign-bta mx-2">
                        <p class="cda-date-p2 m-0 mx-3">15</p>
                        <p class="cda-date-p1 m-0">Graded</p>
                      </a>
                      <a class="assign-bta mx-2">
                        <p class="cda-date-p2 m-0 mx-4">10</p>
                        <p class="cda-date-p1 m-0">Assigned</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="col-lg-3 col-md-12">
          <button type="button" class="btn create-b my-4"  class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Create <img src="{{ asset('assets/add.png')}}" alt=""></button>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li>
              <a
              class="dd-item  dropdown-item"
              data-bs-toggle="modal"
              data-bs-target="#assignmentModal"
            >
              Launch demo modal
            </a>
            </li>
            <li><hr class="dropdown-divider my-0"></li>
            <li><a class="dd-item  dropdown-item" 
              data-bs-toggle="modal"
              data-bs-target="#matarialsModal">
              Add materials
            </a></li>
            <li><hr class="dropdown-divider my-0"></li>
            <li><a class="dd-item dropdown-item" 
              data-bs-toggle="modal"
              data-bs-target="#addtopic">
              Add Topics</a></li>
            </ul>
          <div class="notice card text-white my-2 align-items-center">
                <p class="notice-p"><a href="#" class="text-decoration-none">All topics</a></p>                      
                <p class="notice-p"><a href="#" class="text-decoration-none">Lecture notes</a></p>
                <p class="notice-p"><a href="#" class="text-decoration-none">Class notes</a></p>
          </div>
      </div>
    </div>
  </div>
</section>
{{-- end:main section --}}
@endsection
