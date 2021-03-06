 @include('shared.header')

  {{-- <style>
    .ui-sortable-placeholder {
        border: 1px dashed black!important;
        visibility: visible !important;
        background: #eeeeee78 !important;
    }
    .ui-sortable-placeholder * { visibility: hidden; }
    .RearangeBox.dragElemThumbnail{opacity:0.6;}
    /* .RearangeBox {
        width: 180px;
        height:135px;
        cursor: all-scroll;
        float: left;
        border: 1px solid #9E9E9E;
        font-family: sans-serif;
        display: inline-block;
        margin: 5px!important;
        text-align: center;
        color: #673AB7;
        background: #FFFFFF;
        border-radius: 8px;
    } */
    .RearangeBox {
        width: 155px;
        cursor: all-scroll;
        float: left;
        margin: 5px!important;
        text-align: center;
    }
    .imgThumbContainer .imgName {
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden !important;
    }

    .foy-imgThumbnail {
        height: 75px;
        margin: auto;
        background-color: #FFFFFF;
        border-radius: 8px 8px 0px 0px;
    }
    .foy-thumbnail{
        height: 75px;
        margin: auto;
        border: 1px solid #29A3DA;
        padding-top: 5px;
        padding-bottom: 5px;
        border-radius: 9px 9px 0px 0px;
    }
    .foy-imgThumbnail img{
        width:100%;
        height:100%;
        border-radius: 8px 8px 0px 0px;
        border: 1px solid #efefefd1;
    }
    .foy-thumbnail img{
        max-width:100%;
        max-height:100%;
    }

    /* .imgThumbContainer{
        max-width: 200px;
        margin:4px;
        border: solid;
        display: inline-block;
        justify-content: center;
        position: relative;
        border: 1px solid rgba(0,0,0,0.14);
    } */
    .imgThumbContainer {
        margin: 10px !important;
        display: inline-block;
        justify-content: center;
        position: relative;
        border: none;
    }
    .foy-info{
        box-shadow: 4.52514px 4.52514px 9.05028px rgba(173, 173, 173, 0.15);
        border-radius: 0px 0px 9px 9px;
        border-left: 1px solid #efefefd1;
        border-right: 1px solid #efefefd1;
        border-bottom: 1px solid #efefefd1;

    }
    .imgThumbContainer .imgName{
        font-family: 'Poppins';
        font-weight: 400;
        text-align:left;
        overflow: hidden;
        line-height: 18px;
        font-size: 10px;
        color: #1A3447;
        padding: 3px 10px 0px 10px;
    }
    .imgThumbContainer .type{
        font-family: 'Poppins';
        font-weight: 400;
        text-align:left;
        /* padding: 2px 6px;
        margin-top:4px; */
        font-size: 10px;
        line-height: 10px;
        padding: 0px 10px 7px 10px;
        overflow: hidden;
        color: #1A3447;
        opacity: 0.5;
    }

    .imgThumbContainer .foy-action-button{
        position: absolute;
        color: #29A3DA;
        right: 4px;
        top: 4px;
        cursor: pointer;
        display: none;
    }

    .RearangeBox:hover .foy-action-button{
        display: block;
    }

    /* utilities.scss */
    .foy-classroom-head {
        margin: 1rem!important;
        display: inline !important;
        float: right;
    }
    .foy-image-upload>input {
      opacity: 0;
    width: 24px;
    position: absolute;
    }
    #sortableImgThumbnailPreview{
      height: "";
    }
</style> --}}

{{-- <style>

  .ui-sortable-placeholder {
      border: 1px dashed black!important;
      visibility: visible !important;
      background: #eeeeee78 !important;
     }
  .ui-sortable-placeholder * { visibility: hidden; }
  .RearangeBox.dragElemThumbnail{opacity:0.6;}
  /* .RearangeBox {
      width: 180px;
      height:135px;
      cursor: all-scroll;
      float: left;
      border: 1px solid #9E9E9E;
      font-family: sans-serif;
      display: inline-block;
      margin: 5px!important;
      text-align: center;
      color: #673AB7;
      background: #FFFFFF;
      border-radius: 8px;
  } */
  .foy-post-RearangeBox {
      width: 200px;
      /* cursor: all-scroll; */
      float: left;
      text-align: center;
  }
  /* .imgThumbContainer{
      max-width: 200px;
      margin:4px;
      border: solid;
      display: inline-block;
      justify-content: center;
      position: relative;
      border: 1px solid rgba(0,0,0,0.14);
  } */
  .foy-post-imgThumbContainer {
      margin: 10px !important;
      display: inline-block;
      justify-content: center;
      position: relative;
      border: none;
  }
  .foy-post-imgThumbContainer .imgName {
      display: -webkit-box;
      -webkit-line-clamp: 1;
      -webkit-box-orient: vertical;
      overflow: hidden !important;
  }

  .foy-post-imgThumbnail {
      height: 120px;
      margin: auto;
      background-color: #FFFFFF;
      border-radius: 8px 8px 0px 0px;
  }
  .foy-post-thumbnail{
      height: 110px;
      margin: auto;
      border: 1px solid #29A3DA;
      padding-top: 5px;
      padding-bottom: 5px;
      border-radius: 9px 9px 0px 0px;
  }
  .foy-post-imgThumbnail img{
      width:99%;
      height:100%;
      border-radius: 8px 8px 0px 0px;
      border: 1px solid #efefefd1;
  }
  .foy-post-thumbnail img{
      max-width:100%;
      max-height:100%;
  }
  .foy-post-imgThumbnail video{
      width: 99%;
      height:100%;
      border-radius: 8px 8px 0px 0px;
      border: 1px solid #efefefd1;
  }


  .foy-post-info{
      box-shadow: 4.52514px 4.52514px 9.05028px rgba(173, 173, 173, 0.15);
      border-radius: 0px 0px 9px 9px;
      border-left: 1px solid #efefefd1;
      border-right: 1px solid #efefefd1;
      border-bottom: 1px solid #efefefd1;
  }
  .foy-post-info a{
      text-decoration: none;
  }
  .foy-post-imgThumbContainer .foy-post-imgName{
      font-family: 'Poppins';
      font-weight: 400;
      text-align:left;
      overflow: hidden;
      line-height: 18px;
      font-size: 10px;
      color: #1A3447;
      padding: 3px 10px 0px 10px;
      margin: 0px;
  }
  .foy-post-imgThumbContainer .foy-post-type{
      font-family: 'Poppins';
      font-weight: 400;
      text-align:left;
      /* padding: 2px 6px;
      margin-top:4px; */
      font-size: 10px;
      line-height: 10px;
      padding: 0px 10px 7px 10px;
      overflow: hidden;
      color: #1A3447;
      opacity: 0.5;
      margin: 0px;
  }

  .foy-post-imgThumbContainer .foy-action-button{
      position: absolute;
      color: #29A3DA;
      right: 5px;
      top: 5px;
      cursor: pointer;
      display: none;
  }

  .foy-post-RearangeBox:hover .foy-action-button{
      display: block;
  }
  .foy-blurEffect {
      -webkit-filter: blur(1px);
      -o-filter: blur(1px);
      -moz-filter: blur(1px);
      -ms-filter: blur(1px);
      filter: blur(1px);
  }
  .foy-video{
      background: black;
      height: 110px;
      width: 130px;
  }
  .foy-content {
      position: absolute;
      display: inline-block;
      transform: translate(-50%,-70%);
      top: 50%;
      left: 50%;
      color: #FFF;
      width: 100%;
      text-align: center;
      z-index: 999;
  }
  .foy-play {
      font-size: 30px;
      cursor: pointer;
      display: inline-block;
      text-align: center;
      padding: 20px;
  }
  .foy-hidden{
      display: none;
  }
  .foy-play:hover {
      color: red;
  }

</style>  --}}
<style>
    .foy-nav-item{
        background:  #FFFFFF;
        margin-bottom: 10px;
        border-bottom: 1px solid rgba(41, 163, 218, 0.1);
        border-top: 1px solid rgba(41, 163, 218, 0.1);
        /* filter: drop-shadow(0px 10px 30px rgba(183, 183, 183, 0.1)); */
    }
    .foy-nav-link{
        padding: 15px 12px;
        font-weight: 400;
        font-size: 15px;
        line-height: 25px;
        color: #1A3447;
    }
    .foy-table tr td:first-child{
        padding-right:0px !important;
    }
    .foy-nav-pills li:first-child{

    }
    ul li:last-child {
        border-radius: 0px 10px 10px 0px;
        border-right: 1px solid rgba(41, 163, 218, 0.1);
    }
    ul li:first-child {
        border-radius: 10px 0px 0px 10px;
        border-left: 1px solid rgba(41, 163, 218, 0.1);
    }

    .foy-copy input#myInput {
    height: 47px;
    text-align: center;
    /* padding: 10px 30px; */
    background: #FFFFFF;
    /* box-shadow: inset 0px 0px 4px rgb(0 0 0 / 25%); */
    border-radius: 10px 0 0 10px;
    font-weight: 600;
    font-size: 18px;
    /* line-height: 27px; */
    color: #1A3447;
    background: #FFFFFF;
    border: none;
    border-radius: 6px 0px 0px 6px;
    width: 70%;
    }
    button.foy-copy-button {
    font-weight: 600;
    font-weight: 500;
    width: 30%
    font-size: 18px;
    color: #fff;
    background: #29a3da;
    /* width: 188px; */
    height: 47px;
    border: none;
    /* box-shadow: 5px 6px 30px rgb(41 163 218 / 20%); */
    border-radius: 0px 6px 6px 0px;
}
/* @media only screen and (min-width: 768px) and (max-width: 1024px) {
    .foy-copy {
        width: 80% !important;
    }
} */
/*@media only screen and (min-width: 320px) and (max-width: 640px) {*/

/*	.foy-copy-input {*/
/*            border-radius: 0px 0 0 0px !important; */
/*            padding: 16px !important;*/
/*            margin-left: 27px !important;*/
/*	}*/
/*}*/
/*@media only screen and (min-width: 320px) and (max-width: 640px) {*/

/*	.foy-copy-button {*/
/*             padding: 18px 110px !important;*/
/*             border-radius: 0 0px 0px 0 !important;*/
/*             margin-left: 26px !important;*/
/*	}*/
/*}*/
/*@media only screen and (min-width: 768px) and (max-width: 991px) {	*/
/*	.foy-copy-input{*/
/*		border-radius: 0px 0 0 0px !important;*/
/*		padding: 16px !important;*/
/*	}*/
/*}*/




</style>
  <body class="People-Page">
    <!-- navbar start -->
    @include('navbar.navbar')
    <!-- navbar end -->

    <section class="main-content">
        <div class="container">
        <!-- sub-dtls start -->
        <div class="sub-dtls card text-white my-4">
            <img
            class="sub-dtls-img card-img"
            src="assets/Group 335941.png"
            alt="Card image"
            />
            <div class="card-img-overlay">
              <div class="d-flex justify-content-between">
                <h5 class="card-title mt-3 ms-4">
                  CSE-3213 Digital Signal Processing
                </h5>
                <!-- dropdown start -->
                <div class="more m-3 dropdown">
                  <img
                    src="assets/more-white.png"
                    alt=""
                    class="dropdown-toggle"
                    type="button"
                    id="dropdownMenuButton1"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  />
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dd-item dropdown-item" href="#">Remove</a></li>
                    <li><a class="dd-item dropdown-item" href="#">Make host</a></li>
                  </ul>
                </div>
                <!-- dropdown end -->
              </div>
                <p class="sub-dtls-sec card-text ms-4">Section C</p>
                <p class="card-text my-4 ms-4">Jerome Shaw</p>

                <div class="class-code d-flex align-items-center my-4 ms-4">
                    <p class="class-code-p px-3 m-0">xbl23nlai7ja</p>
                    <button type="button" class="btn class-code-b px-3">copy</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <!-- classroom nav start-->
                <div class="d-flex my-4">
                    <ul class="classroom-nav nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Stream</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ClassWork.html">Classwork</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="materials.html">Material</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Industry work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="People.html">People</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Discussion</a>
                    </li>
                    </ul>
                </div>
                <!-- classroom nav end-->

                <!-- announce-card start -->
                <a class="st-card col-lg-12 d-flex justify-content-between py-2 px-2 my-2" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"
                >
                  <div class="d-flex m-2">
                    <img
                      class="st-img rounded-circle mx-2"
                      src="assets/irene-strong-v2aKnjMbP_k-unsplash.jpg"
                      alt=""
                      width="42"
                      height="42"
                    />

                    <p class="say-same-p m-2 ms-4">Announce something to your class...</p>
                  </div>
                </a>

                <div class="collapse st-card col-lg-12 py-3 my-2" id="collapseExample">
                  <div class="announce-txt m-3 p-2">

                    <textarea
                      class="form-control course-n"
                      id="floatingTextarea"
                      placeholder="Assignment title goes here..."
                      rows="4"
                    ></textarea>
                  </div>
                  <div class="d-flex justify-content-between align-content-center m-3">
                    <div class="sortableImgThumbnailPreview" id="sortableImgThumbnailPreview">
                    </div>

                  </div>

                  <div class="d-flex justify-content-between align-content-center">
                    <div class="announce-icon m-2 ms-4">

                      <!-- image preview div -->

                      <div class="foy-image-upload">

                        <input id="files" type="file" multiple accept="application/zip, application/msword, application/pdf, image/*"/>
                        <label for="file-input">
                          <img src="assets/Frame 33589.png"/>
                        </label>
                    </div>
                  </div>
                  <div class="announce-postm-2 me-4 text-end">
                    <!-- <button type="button" class="btn announce-b1 px-3 mx-2" id="cancel-post-collapse">
                      Cancel
                    </button> -->
                    <button class="btn announce-b1 px-3 mx-2" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false">
                      Cancel
                    </button>
                    <button type="button" class="btn announce-b2 px-3">Post</button>
                  </div>
                </div>

                </div>
              <!-- announce-card end -->

                <!-- date-assignment-card start-->
                <div class="st-card col-lg-12 d-flex justify-content-between py-3 px-2 my-2">
                  <div class="d-flex align-items-center">
                    <div class="cd-date mx-3">
                        <p class="cd-date-p1 m-0">APR</p>
                        <p class="cd-date-p2 m-0">25</p>
                    </div>
                    <div class="lvr vr"></div>
                      <img
                        class="st-img rounded-circle mx-3"
                        src="assets/Group 3364222.png"
                        alt=""
                        width="42"
                        height="42"
                      />
                      <div class="course-tn">
                        <div class="d-flex">
                          <p class="course-t m-0">New Material: Resource 01</p>
                          <i class="fa-solid fa-thumbtack mx-3"></i>
                          <p class="course-n m-0">Pinned</p>
                        </div>
                        <p class="course-n m-0">Jerome Shaw</p>
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
                class="st-card col-lg-12 d-flex justify-content-between py-3 px-2 my-2"
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
                          <p class="course-t m-0">Jerome Shaw has posted a new assignment.</p>
                          <i class="fa-solid fa-thumbtack mx-3"></i>
                          <p class="course-n m-0">Pinned</p>
                        </div>
                        <p class="course-n m-0">Due Monday | 12:00 am </p>
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

                <div
                  class="st-card col-lg-12 d-flex justify-content-between py-3 px-2 my-2"
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
                        <p class="course-t m-0">Jerome Shaw has posted a new assignment.</p>
                        <i class="fa-solid fa-thumbtack mx-3"></i>
                        <p class="course-n m-0">Pinned</p>
                      </div>
                      <p class="course-n m-0">Due Monday | 12:00 am </p>
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
                        <li><p class="dropdown-item" href="#">Email Address:</p></li>
                        <li>
                          <p class="dropdown-item" href="#">Ryann Rodgers@gmail.com</p>
                        </li>
                        <li><hr class="dropdown-divider" /></li>
                      </div>
                      <li><a class="dd-item dropdown-item" href="#">Remove</a></li>
                      <li><a class="dd-item dropdown-item" href="#">Make host</a></li>
                    </ul>
                  </div>
                  <!-- dropdown end -->
                </div>
                <!-- date-assignment-card end-->

                <!-- teacher-post start -->
                <div class=" st-card col-lg-12 py-3 px-2my-2">
                  <div class="d-flex justify-content-between">
                    <div class="d-flex">
                      <img
                        class="st-img rounded-circle mx-4"
                        src="assets/download (3).jpg"
                        alt=""
                        width="42"
                        height="42"
                      />
                      <div class="course-tn">
                        <div class="d-flex">
                          <p class="course-t m-0">Jerome Shaw</p>
                          <i class="fa-solid fa-thumbtack mx-3"></i>
                          <p class="course-n m-0">Pinned</p>
                        </div>
                        <p class="course-n m-0">Apr 18, 2022</p>
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
                          <li><p class="dropdown-item" href="#">Email Address:</p></li>
                          <li>
                            <p class="dropdown-item" href="#">Ryann Rodgers@gmail.com</p>
                          </li>
                          <li><hr class="dropdown-divider" /></li>
                        </div>
                        <li><a class="dd-item dropdown-item" href="#">Remove</a></li>
                        <li><a class="dd-item dropdown-item" href="#">Make host</a></li>
                      </ul>
                    </div>
                    <!-- dropdown end -->
                  </div>
                  <p class="announce-txt-p m-2 ms-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                    imperdiet, nulla et dictum interdum, nisi lorem egestas vitae
                    scel<span id="dots">...</span
                    ><span id="more"
                      >erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices
                      nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue
                      ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum
                      dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare
                      turpis. Donec vitae dui eget tellus gravida venenatis. Integer
                      fringilla congue eros non fermentum. Sed dapibus pulvinar nibh
                      tempor porta.</span
                    >
                    <button class="readmore-bt" onclick="myFunction()" id="myBtn1">
                      Read more
                    </button>
                  </p>
                  <!-- slider -->
                  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="cards-wrapper">
                        <!-- <div class="card"> -->
                            <div class='foy-post-RearangeBox foy-post-imgThumbContainer'>
                                <a href="image.jpg" download><i class='fa-solid fa-cloud-arrow-down foy-action-button' download>
                                </i></a>
                                <div class="foy-post-imgThumbnail" >
                                    <video id="bb" class="foy-video foy-blurEffect" height="100%" width="100%">
                                        <source src="video.mp4" type=video/mp4>
                                        <source src= "error.webm" type=video/webm>
                                    </video>
                                    <div class="foy-content">
                                        <div class="foy-play">???</div>
                                    </div>
                                </div>
                                <div class='foy-post-info'>
                                    <div>
                                        <a href="video.mp4" target="_blank" ><p class='foy-post-imgName'>NewVideo.mp4</p></a>
                                    </div>
                                    <div>
                                        <p class='foy-post-type'>Video</p>
                                    </div>
                                </div>
                            </div>
                        <!-- </div> -->
                        <!-- <div class="card d-none d-md-block"> -->
                            <div class='foy-post-RearangeBox foy-post-imgThumbContainer d-none d-md-block'>
                                <a href="image.jpg" download><i class='fa-solid fa-cloud-arrow-down foy-action-button' download>
                                </i></a>
                                <div class="foy-post-imgThumbnail" >
                                    <video id="bb" class="foy-video foy-blurEffect" height="100%" width="100%">
                                        <source src="video.mp4" type=video/mp4>
                                        <source src= "error.webm" type=video/webm>
                                    </video>
                                    <div class="foy-content">
                                        <div class="foy-play">???</div>
                                    </div>
                                </div>
                                <div class='foy-post-info'>
                                    <div>
                                        <a href="video.mp4" target="_blank" ><p class='foy-post-imgName'>NewVideo.mp4</p></a>
                                    </div>
                                    <div>
                                        <p class='foy-post-type'>Video</p>
                                    </div>
                                </div>
                            </div>
                        <!-- </div> -->
                        <!-- <div class="card d-none d-md-block"> -->
                            <div class='foy-post-RearangeBox foy-post-imgThumbContainer d-none d-md-block'>
                                <a href="image.jpg" download><i class='fa-solid fa-cloud-arrow-down foy-action-button' download>
                                </i></a>
                                <div class="foy-post-imgThumbnail" >
                                    <video id="bb" class="foy-video foy-blurEffect" height="100%" width="100%">
                                        <source src="video.mp4" type=video/mp4>
                                        <source src= "error.webm" type=video/webm>
                                    </video>
                                    <div class="foy-content">
                                        <div class="foy-play">???</div>
                                    </div>
                                </div>
                                <div class='foy-post-info'>
                                    <div>
                                        <a href="video.mp4" target="_blank" ><p class='foy-post-imgName'>NewVideo.mp4</p></a>
                                    </div>
                                    <div>
                                        <p class='foy-post-type'>Video</p>
                                    </div>
                                </div>
                            </div>
                        <!-- </div> -->
                      </div>
                      </div>
                      <div class="carousel-item">
                        <div class="cards-wrapper">
                            <!-- <div class="card"> -->
                                <div class='foy-post-RearangeBox foy-post-imgThumbContainer'>
                                    <a href="image.jpg" download><i class='fa-solid fa-cloud-arrow-down foy-action-button' download>
                                    </i></a>
                                    <div class="foy-post-imgThumbnail" >
                                        <video id="bb" class="foy-video foy-blurEffect" height="100%" width="100%">
                                            <source src="video.mp4" type=video/mp4>
                                            <source src= "error.webm" type=video/webm>
                                        </video>
                                        <div class="foy-content">
                                            <div class="foy-play">???</div>
                                        </div>
                                    </div>
                                    <div class='foy-post-info'>
                                        <div>
                                            <a href="video.mp4" target="_blank" ><p class='foy-post-imgName'>NewVideo.mp4</p></a>
                                        </div>
                                        <div>
                                            <p class='foy-post-type'>Video</p>
                                        </div>
                                    </div>
                                </div>
                            <!-- </div> -->
                            <!-- <div class="card d-none d-md-block"> -->
                                <div class='foy-post-RearangeBox foy-post-imgThumbContainer d-none d-md-block'>
                                    <a href="image.jpg" download><i class='fa-solid fa-cloud-arrow-down foy-action-button' download>
                                    </i></a>
                                    <div class="foy-post-imgThumbnail" >
                                        <video id="bb" class="foy-video foy-blurEffect" height="100%" width="100%">
                                            <source src="video.mp4" type=video/mp4>
                                            <source src= "error.webm" type=video/webm>
                                        </video>
                                        <div class="foy-content">
                                            <div class="foy-play">???</div>
                                        </div>
                                    </div>
                                    <div class='foy-post-info'>
                                        <div>
                                            <a href="video.mp4" target="_blank" ><p class='foy-post-imgName'>NewVideo.mp4</p></a>
                                        </div>
                                        <div>
                                            <p class='foy-post-type'>Video</p>
                                        </div>
                                    </div>
                                </div>
                            <!-- </div> -->
                            <!-- <div class="card d-none d-md-block"> -->
                                <div class='foy-post-RearangeBox foy-post-imgThumbContainer d-none d-md-block'>
                                    <a href="image.jpg" download><i class='fa-solid fa-cloud-arrow-down foy-action-button' download>
                                    </i></a>
                                    <div class="foy-post-imgThumbnail" >
                                        <video id="bb" class="foy-video foy-blurEffect" height="100%" width="100%">
                                            <source src="video.mp4" type=video/mp4>
                                            <source src= "error.webm" type=video/webm>
                                        </video>
                                        <div class="foy-content">
                                            <div class="foy-play">???</div>
                                        </div>
                                    </div>
                                    <div class='foy-post-info'>
                                        <div>
                                            <a href="video.mp4" target="_blank" ><p class='foy-post-imgName'>NewVideo.mp4</p></a>
                                        </div>
                                        <div>
                                            <p class='foy-post-type'>Video</p>
                                        </div>
                                    </div>
                                </div>
                            <!-- </div> -->
                          </div>
                      </div>
                      <div class="carousel-item">
                        <div class="cards-wrapper">
                            <!-- <div class="card"> -->
                                <div class='foy-post-RearangeBox foy-post-imgThumbContainer'>
                                    <a href="image.jpg" download><i class='fa-solid fa-cloud-arrow-down foy-action-button' download>
                                    </i></a>
                                    <div class="foy-post-imgThumbnail" >
                                        <video id="bb" class="foy-video foy-blurEffect" height="100%" width="100%">
                                            <source src="video.mp4" type=video/mp4>
                                            <source src= "error.webm" type=video/webm>
                                        </video>
                                        <div class="foy-content">
                                            <div class="foy-play">???</div>
                                        </div>
                                    </div>
                                    <div class='foy-post-info'>
                                        <div>
                                            <a href="video.mp4" target="_blank" ><p class='foy-post-imgName'>NewVideo.mp4</p></a>
                                        </div>
                                        <div>
                                            <p class='foy-post-type'>Video</p>
                                        </div>
                                    </div>
                                </div>
                            <!-- </div> -->
                            <!-- <div class="card d-none d-md-block"> -->
                                <div class='foy-post-RearangeBox foy-post-imgThumbContainer d-none d-md-block'>
                                    <a href="image.jpg" download><i class='fa-solid fa-cloud-arrow-down foy-action-button' download>
                                    </i></a>
                                    <div class="foy-post-imgThumbnail" >
                                        <video id="bb" class="foy-video foy-blurEffect" height="100%" width="100%">
                                            <source src="video.mp4" type=video/mp4>
                                            <source src= "error.webm" type=video/webm>
                                        </video>
                                        <div class="foy-content">
                                            <div class="foy-play">???</div>
                                        </div>
                                    </div>
                                    <div class='foy-post-info'>
                                        <div>
                                            <a href="video.mp4" target="_blank" ><p class='foy-post-imgName'>NewVideo.mp4</p></a>
                                        </div>
                                        <div>
                                            <p class='foy-post-type'>Video</p>
                                        </div>
                                    </div>
                                </div>
                            <!-- </div> -->
                            <!-- <div class="card d-none d-md-block"> -->
                                <div class='foy-post-RearangeBox foy-post-imgThumbContainer d-none d-md-block'>
                                    <a href="image.jpg" download><i class='fa-solid fa-cloud-arrow-down foy-action-button' download>
                                    </i></a>
                                    <div class="foy-post-imgThumbnail" >
                                        <video id="bb" class="foy-video foy-blurEffect" height="100%" width="100%">
                                            <source src="video.mp4" type=video/mp4>
                                            <source src= "error.webm" type=video/webm>
                                        </video>
                                        <div class="foy-content">
                                            <div class="foy-play">???</div>
                                        </div>
                                    </div>
                                    <div class='foy-post-info'>
                                        <div>
                                            <a href="video.mp4" target="_blank" ><p class='foy-post-imgName'>NewVideo.mp4</p></a>
                                        </div>
                                        <div>
                                            <p class='foy-post-type'>Video</p>
                                        </div>
                                    </div>
                                </div>
                            <!-- </div> -->
                          </div>
                      </div>
                    </div>
                    <a class="carousel-control-next next-width" href="#carouselExampleControls" role="button"  data-bs-slide="next">
                      <span class="next-bt" aria-hidden="true">
                        <i class="fas fa-angle-right "></i>
                      </span>
                    </a>
                  </div>
                  <!-- slider -->

                  <hr class="style1 my-4" />
                  <div class="comments">
                    <div class="d-flex m-3 justify-content-between">
                      <div class="d-flex justify-content-between align-items-center">
                        <img
                          class="st-img rounded-circle mx-4 me-0"
                          src="assets/charlie-green-3JmfENcL24M-unsplash (1).jpg"
                          alt=""
                          width="34"
                          height="34"
                        />
                        <p class="course-t m-0 mx-2">foyez ahmed</p>
                        <p class="course-n m-0 mx-2">1 month ago</p>
                      </div>
                      <p class="course-n m-0 mx-2 align-items-center">Show More</p>
                    </div>
                    <div class="mx-4">
                      <p class="course-n mx-4 my-3">
                        lerom ipsom kjhasd jkha asj akljas alkj<br />
                        lerom ipsom kjhasd jkha asj akljas alkj ashkl
                      </p>
                    </div>
                  </div>
                  <div class="d-flex">
                    <img
                      class="st-img rounded-circle mx-4 me-0"
                      src="assets/download (3).jpg"
                      alt=""
                      width="42"
                      height="42"
                    />
                    <textarea
                      class="comment-box form-control mx-4"
                      placeholder="Add a comment???"
                      rows="1"
                    ></textarea>
                    <button type="button" class="btn announce-b2 px-3 me-3">Send</button>
                  </div>
                </div>
                <!-- teacher-post end -->

                <!-- date-assignment-card end-->

            </div>

            <!-- To-Do & To Review start-->
            <div class="col-lg-4 col-md-12">
              <div class="pc d-flex mt-5">
                <div class="col-6 d-flex">
                  <p class="as-tt">To Do <span class="dash-notification badge rounded-pill pb-1"
                    >3</span></p>
                </div>
                <div class="col-6 text-end">
                  <a class="as-dt" href="#">view all</a>
                </div>
              </div>
              <div class="assignment">
                <div class="assignment-box d-flex p-3">
                  <div class="col-12">
                    <p class="assignment-title d-inline">Assignment 01</p>
                    <p class="as-sub d-inline float-end">100 points</p>
                    <p class="as-sub mb-3 d-block">Digital Signal Processing</p>
                    <p class="as-dt m-0 d-block">Today | 02:00 pm</p>
                  </div>
                </div>
                <div class="assignment-box d-flex p-3">
                    <div class="col-12">
                      <p class="assignment-title d-inline">Assignment 01</p>
                      <p class="as-sub d-inline float-end">100 points</p>
                      <p class="as-sub mb-3 d-block">Digital Signal Processing</p>
                      <p class="as-dt m-0 d-block">Today | 02:00 pm</p>
                    </div>
                  </div>
                  <div class="assignment-box d-flex p-3">
                    <div class="col-12">
                      <p class="assignment-title d-inline">Assignment 01</p>
                      <p class="as-sub d-inline float-end">100 points</p>
                      <p class="as-sub mb-3 d-block">Digital Signal Processing</p>
                      <p class="as-dt m-0 d-block">Today | 02:00 pm</p>
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
                <div class="assignment-box d-flex p-3">
                    <div class="col-12">
                        <p class="assignment-title d-inline">Assignment 01</p>
                        <p class="as-sub d-inline float-end">100 points</p>
                        <p class="as-sub mb-3 d-block">Digital Signal Processing</p>
                        <p class="as-dt m-0 d-block">Today | 02:00 pm</p>
                    </div>
                </div>
                <div class="assignment-box d-flex p-3">
                    <div class="col-12">
                        <p class="assignment-title d-inline">Assignment 01</p>
                        <p class="as-sub d-inline float-end">100 points</p>
                        <p class="as-sub mb-3 d-block">Digital Signal Processing</p>
                        <p class="as-dt m-0 d-block">Today | 02:00 pm</p>
                    </div>
                </div>
                <div class="assignment-box d-flex p-3">
                    <div class="col-12">
                        <p class="assignment-title d-inline">Assignment 01</p>
                        <p class="as-sub d-inline float-end">100 points</p>
                        <p class="as-sub mb-3 d-block">Digital Signal Processing</p>
                        <p class="as-dt m-0 d-block">Today | 02:00 pm</p>
                    </div>
                </div>
              </div>
            </div>
            <!-- To-Do & To Review end-->
          </div>
        </div>
    </section>

    <!-- footer start -->
    <section class="footer">
      <hr class="new2 my-5" />
      <div class="container">
        <div class="footer d-flex flex-wrap justify-content-between my-4">
          <div class="s-icon d-flex m-auto">
            <img src="assets/images/Linkedin.png" alt="" width="42" height="42" />
            <img
              class="mx-3"
              src="assets/images/facebook.png"
              alt=""
              width="42"
              height="42"
            />
            <img src="assets/images/Twitter.png" alt="" width="42" height="42" />
          </div>
          <div class="f-logo d-flex align-items-center m-auto">
            <p class="m-3">A product of</p>
            <img src="asset('assets/images/logo1.png')" alt="" />
          </div>
          <div class="f-rights d-flex align-items-center m-auto">
            <p>?? 2022 ACASTRY. All rights reserved.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- footer end -->

    <script>
      $(document).on("click", ".cancel-post-collapse", function() {
        var collapse = $(this).closest(".collapse");
        $(collapse).collapse('toggle');
      });
      function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");
        var btnText = document.getElementById("myBtn1");

        if (dots.style.display === "none") {
          dots.style.display = "inline";
          btnText.innerHTML = "Read more";
          moreText.style.display = "none";
        } else {
          dots.style.display = "none";
          btnText.innerHTML = "Read less";
          moreText.style.display = "inline";
        }
      }
    </script>
    <script>
      // $(function() {
      //     $("#sortableImgThumbnailPreview").sortable({
      //         connectWith: ".RearangeBox",
      //         start: function( event, ui ) {
      //             $(ui.item).addClass("dragElemThumbnail");
      //             ui.placeholder.height(ui.item.height());
      //         },
      //         stop:function( event, ui ) {
      //             $(ui.item).removeClass("dragElemThumbnail");
      //         }
      //     });
      //     $("#sortableImgThumbnailPreview").disableSelection();
      // });

      document.getElementById('files').addEventListener('change', handleFileSelect, false);

      function handleFileSelect(evt) {

      var files = evt.target.files;
      var output = document.getElementById("sortableImgThumbnailPreview");

      // Loop through the FileList and render image files as thumbnails.
      for (var i = 0, f; f = files[i]; i++) {

          var fileType = event.target.files[i].type;
          var fileName = event.target.files[i].name;
          var fileType = fileType.split('/');
          var fileTypeFirst= fileType[fileType.length - 2];
          var fileTypeSecond= fileType[fileType.length - 1];

        var reader = new FileReader();
        // Closure to capture the file information.
        reader.onload = (function(theFile) {
          if(fileTypeFirst == "image"){
              var src= URL.createObjectURL(event.target.files[i]);
              var type= "Image";
              var class_name= "foy-imgThumbnail";
          }else if(fileTypeFirst == "application"){
              if(fileTypeSecond=='pdf'){
                  var src= "{{ asset('assets/images/pdf.png') }}";
                  var type= "PDF";
                  var class_name= "foy-thumbnail";
              }else if(fileTypeSecond=='x-zip-compressed'){
                  var src= "{{ asset('assets/images/zip.png') }}";
                  var type= "Zip";
                  var class_name= "foy-thumbnail";
              }else if(fileTypeSecond=='msword'){
                  var src= "{{ asset('assets/images/doc.png') }}";
                  var type= "DOC";
                  var class_name= "foy-thumbnail";
              }

          }else if(fileTypeFirst == "video"){
              var src= "{{ asset('assets/images/video.png') }}";
              var type= "Video";
              var class_name= "foy-thumbnail";
          }
          return function(e) {
              var imgThumbnailElem = "<div class='col-md-3 RearangeBox imgThumbContainer'><i class='far fa-times-circle foy-action-button' onclick='removeThumbnailIMG(this)'></i><div class='" +  class_name + "' ><img  src='" +  src + "'" + "title='"+ theFile.name + "'/></div><div class='foy-info'><div class='imgName'>"+ theFile.name +"</div><div class='type'>"+ type +"</div></div></div></div>";
              output.innerHTML = output.innerHTML + imgThumbnailElem;
          };
        })(f);

        // Read in the image file as a data URL.
        reader.readAsDataURL(f);
      }
    }

    function removeThumbnailIMG(elm){
      elm.parentNode.outerHTML='';
    }
  </script>

<script>
  $(document).ready(function(){
  $('.foy-play').click(function () {
      if($(this).parent().prev().get(0).paused){
          $(this).parent().prev().get(0).play();
          $(this).parent().prev().removeClass('foy-blurEffect');
          $(this).parent().prev().attr("controls", "");
          $(this).parent().addClass('foy-hidden');
          $(this).parent().prev().attr("progress", "");
      }
  });

  $('.foy-video').on('ended',function(){
      $(this).removeAttr("controls", "");
      $(this).addClass('foy-blurEffect');
      $(this).next().removeClass('foy-hidden');
  });
})
</script>
{{-- copy button --}}
<script>
    function myFunction() {
    var copyText = document.getElementById("myInput");
    copyText.select();
    copyText.setSelectionRange(0, 99999)
        document.execCommand("copy");
        document.getElementById("btn-copy").innerHTML="Copied";
    }

</script>
<script>
    $(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

   ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});
</script>

 <script>
     let items = document.querySelectorAll('.carousel .carousel-item')

items.forEach((el) => {
    const minPerSlide = 4
    let next = el.nextElementSibling
    for (var i=1; i<minPerSlide; i++) {
        if (!next) {
            // wrap carousel by using first child
        	next = items[0]
      	}
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
})

 </script>
    <!-- Option 1: Public Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
