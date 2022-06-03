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
    <link rel="stylesheet" href="assets/css/styleAdded.css" />


    <title>StudentWorkSingle</title>
   </head>
   <style>
    .foy-exp-btn{
         background: #29A3DA;
         border-radius: 5px;
    }
    .foy-exp-btn h6{
         font-size: 14px !important;
         font-weight: 400;
         margin: 0px;
    }
    .foy-acastry-border{
         padding-bottom: 1.5rem !important;
         border-bottom: 1.5px solid #29A3DA !important;
    }
    .foy-top-rounded-card{
         box-shadow: 0px 5px 10px rgba(205, 205, 205, 0.08);
         border-radius: 15px 15px 0px 0px;
    }
    .foy-rounded-card{
         padding: 27px 44px;
         box-shadow: 0px 5px 10px rgba(205, 205, 205, 0.08);
         border-radius: 15px 15px 15px 15px;
    }
    .foy-acastry-tr th{
        font-weight: 400;
        font-size: 15px;
        color: #000000;
    }
    .table h6{
        margin: 0px;
    }
    .table p{
        margin: 0px;
    }
    .table .foy-p {
         color: #1A3447;
         font-weight: 400;
         font-size: 16px;
         padding: 10px 0px 10px 50px!important;
     }
    .foy-table .form-control{
         padding: 0.25rem 0.1rem 0.25rem 0.25rem !important;
    }
    .foy-table-image{
         box-shadow: 4px 4px 12px rgba(158, 158, 158, 0.2) !important;

    }
    .foy-table td{
         border-right: 1px solid #29a3da54;
    }
    /* .foy-table td:nth-child('4'){
         border-right: none;
    } */
    .foy-table td:last-child{
         border-right: none;
         padding: 0px;
    }
    .foy-table td:nth-last-child(2){
         border-right: none;
    }

    .foy-a-head{
     }
     .foy-a-imgThumbContainer .foy-a-imgName{
         font-weight: 400;
         text-align:left;
         line-height: 18px;
         border: 2.5385px solid #FFFFFF;
         box-shadow: 4.23084px 4.23084px 12.6925px rgba(147, 147, 147, 0.1);
         font-size: 10px;
         padding: 3px 10px 0px 10px;
         margin: 0px;
         position: absolute;
         width: 59px;
         height: 57.84px;
         left: 0px;
         top: 0.08px;
     }

    .foy-a-an{
    font-weight: 400;
    font-size: 24px;
    color: #1A3447;
    text-align: left;
    overflow: hidden;
    padding: 6px 10px 0px 10px;
    margin: 0px;
    line-height: 15px;
    }

.foy-a-attachment{
 text-align:left;
 padding: 0px 10px 7px 10px;
 overflow: hidden;
 margin: 0px;
 font-family: 'Poppins';
 font-style: normal;
 font-weight: 400;
 font-size: 16px;
 color: #1A3447;
 opacity: 0.7;
}
.foy-a-dcard{
 background: #FFFFFF;
 box-shadow: 0px 11.6413px 29.1032px rgba(0, 0, 0, 0.05);
 border-radius: 10.0186px;
}
/* .foy-text{
 font-weight: 400;
 font-size: 24px;
 line-height: 28px;
 align-items: center;
}
.foy-text2{
 font-weight: 500;
 font-size: 14px;
 color: #1A3447;
} */
.foy-text{
     font-weight: 600;
     font-size: 36px;
     align-items: center;
 }
 .foy-text2{
     font-weight: 500;
     font-size: 14px;
     color: #1A3447;
 }
.foy-a-button{
 background: #29A3DA;
 color: #ffffff;
}
.foy-a-single-img{
 box-shadow: 4px 4px 12px rgb(158 158 158 / 20%);
 border-radius: 50%;
 border: 2px solid white;
 height: 44px;
 width: 44px;
}
.foy-dot{
 font-size: 6px;
 color: #1A3447;
}

.foy-a-title{
 font-weight: 400;
 font-size: 24px;
 line-height: 28px;
 color: #1A3447;
}


.foy-at-bottom{
 font-weight: 400;
 font-size: 16px;
 line-height: 25px;
 color: #1A3447;
 opacity: 0.6;
}
.foy-hr{
 color: #29A3DA;
 opacity: 0.2;
}

.foy-sa-an {
 font-weight: 400;
 font-size: 18px;
 line-height: 27px;
 color: #1A3447;
}

.foy-sa-ac{
 font-weight: 400;
 font-size: 14px;
 line-height: 140%;
 color: #1A3447;
 opacity: 0.6;
}
.foy-table-status{
    font-size: 15px;
}
.foy-a-sc{
    padding:0px;
}
@media only screen and (min-width: 320px) and (max-width: 767px) {
    .foy-rounded-card{
        padding: 15px 10px;
    }
    .foy-rounded-card img.foy-at-img  {
        margin-right: 0px !important;
        height: 50px;
        width: 50px;
    }
    .foy-a-title {
        font-size: 18px;
        line-height: 18px;
    }
    .foy-at-bottom {
        font-size: 14px;
        line-height: 24px;
    }
    .foy-text {
        font-size: 25px;
    }
    .foy-a-dcard {
        padding: 10px;
    }
    .foy-text2 {
        font-size: 13px;
    }
    .foy-a-sc{
        gap: 6px !important;
    }
    .foy-s-nav{
        margin-top: 10px !important;
    }
    .foy-table tr td{
        padding-left: 6px !important;
    }
    .foy-table tr td:first-child{
        padding-right:0px !important;
    }
    .foy-tm{
        padding-right: 0px !important;
    }
    .foy-acastry-tr th{
        font-size: 14px;
    }
    .foy-table-image {
        height: 30px;
        width: 30px;
    }
    .table .foy-p {
        font-size: 15px;
        padding: 5px 0px 10px 35px!important;
    }
    .foy-tstar{
        height: 15px;
        width: 15px;
    }
    .foy-table-status {
        font-size: 12px;
    }
}

@media only screen and (min-width: 768px) and (max-width: 1024px) {

}

@media only screen and (min-width: 1025px) and (max-width: 1920px) {

}
</style>
  <body class="People-Page">
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
                        <li class="mx-3">
                            <a class="nav-link" href="#"
                            ><img src="assets/Group 41.png" alt="" width="30" height="30"
                            /></a>
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
                            <a class="nav-link dropdown" href="#">
                                <img src="assets/unsplash_lJJlaUWYrPE.png" alt="" class="dropdown-toggle" type="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false" width="30" height="30"/>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>
    <!-- navbar end -->

    <section class="main-content">
        <!-- Begin Page Content -->
        <div class="container">
            <div class="row">
                <!-- Left -->
                <div class="col-lg-5 pl-2 mt-4">
                    <div class="bg-white foy-top-rounded-card">
                        <div class="col-lg-12 px-4 py-3 border-bottom foy-acastry-border">
                            <h5 class="d-inline "> All Students <i class="fa fa-users" aria-hidden="true"></i></h5>
                            <a href="/assignmentMark" class='btn btn-primary d-inline float-end foy-exp-btn'> <h6 class=" "><i class="fa-solid fa-cloud-arrow-down"></i> Export</h6></a>
                        </div>
                        <div class="table-wrapper-scroll-y my-custom-scrollbar" style="height: 600px;overflow: scroll;">
                            <table class="table align-middle table-hover table-borderless foy-table">
                                <thead>
                                <tr class="foy-acastry-tr">
                                    <th width="65%" scope="col" class="ps-4 foy-th-heading" >Name</th>
                                    <th width="10%" scope="col"  class="text-center foy-th-heading">Status</th>
                                    <th width="10%" scope="col" class="text-center foy-th-heading">Mark</th>
                                    <th width="10%" scope="col" class="text-center foy-th-heading">Mark</th>
                                    <th width="2%" scope="col"></th>
                                </tr>
                                </thead>
                                    <tbody>
                                        <tr class="table-active">
                                            <td  class="ps-4">
                                                <img src="{{ asset('assets/image.jpg') }}" width="45" height="45" alt="..." class="foy-table-image rounded-circle border border-2 border-white mr-2 float-start">
                                                <p class="foy-p">Shah Foyez <img class="foy-tstar" src="{{ asset('assets/star1.png') }}"></p>
                                            </td>
                                            <td>
                                                <h6 class="graded text-center foy-table-status" style="color: #FF4B3A;">Missing</h6>
                                            </td>
                                            <form method="post" action="/gradeSubmit }}" enctype="multipart/form-data">
                                                @csrf
                                                <td>
                                                    <input class="form-control" name="points" type="number">
                                                </td>
                                                <td>
                                                    <input class="form-control" name="points" type="number">
                                                </td>
                                                {{-- <td>
                                                    <h6 class="graded" style="color: rgb(58, 66, 175);">jf</h6>
                                                </td> --}}
                                                <td>
                                                    <!-- dropdown start -->
                                                    <div class="more dropdown pe-3 foy-tm">
                                                        <img
                                                        src="assets/more.png"
                                                        alt=""
                                                        class="dropdown-toggle"
                                                        type="button"
                                                        id="dropdownMenuButton1"
                                                        data-bs-toggle="dropdown"
                                                        aria-expanded="false"
                                                        />
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
                                                </td>
                                            </form>
                                        </tr>

                                        <tr class="">
                                            <td  class="ps-4">
                                                <img src="{{ asset('assets/image.jpg') }}" width="45" height="45" alt="..." class="foy-table-image rounded-circle border border-2 border-white mr-2 float-start">
                                                <p class="foy-p">Shah Foyez <img class="foy-tstar" src="{{ asset('assets/star1.png') }}"></p>
                                            </td>
                                            <td>
                                                <h6 class="graded text-center foy-table-status" style="color: #29A3DA;">Graded</h6>
                                            </td>
                                            <form method="post" action="/gradeSubmit }}" enctype="multipart/form-data">
                                                @csrf
                                                <td>
                                                    <input class="form-control" name="points" type="number">
                                                </td>
                                                <td>
                                                    <input class="form-control" name="points" type="number">
                                                </td>
                                                {{-- <td>
                                                    <h6 class="graded" style="color: rgb(58, 66, 175);">jf</h6>
                                                </td> --}}
                                                <td>
                                                    <!-- dropdown start -->
                                                    <div class="more dropdown pe-3">
                                                        <img
                                                        src="assets/more.png"
                                                        alt=""
                                                        class="dropdown-toggle"
                                                        type="button"
                                                        id="dropdownMenuButton1"
                                                        data-bs-toggle="dropdown"
                                                        aria-expanded="false"
                                                        />
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
                                                </td>
                                            </form>
                                        </tr>
                                        <tr class="">
                                            <td  class="ps-4">
                                                <img src="{{ asset('assets/image.jpg') }}" width="45" height="45" alt="..." class="foy-table-image rounded-circle border border-2 border-white mr-2 float-start">
                                                <p class="foy-p">Shah Foyez <img class="foy-tstar" src="{{ asset('assets/star1.png') }}"></p>
                                            </td>
                                            <td>
                                                <h6 class="graded text-center foy-table-status foy-table-status"  style="color: #2E7D32">Posted</h6>
                                            </td>
                                            <form method="post" action="/gradeSubmit }}" enctype="multipart/form-data">
                                                @csrf
                                                <td>
                                                    <input class="form-control" name="points" type="number">
                                                </td>
                                                <td>
                                                    <input class="form-control" name="points" type="number">
                                                </td>
                                                {{-- <td>
                                                    <h6 class="graded" style="color: rgb(58, 66, 175);">jf</h6>
                                                </td> --}}
                                                <td>
                                                    <!-- dropdown start -->
                                                    <div class="more dropdown pe-3">
                                                        <img
                                                        src="assets/more.png"
                                                        alt=""
                                                        class="dropdown-toggle"
                                                        type="button"
                                                        id="dropdownMenuButton1"
                                                        data-bs-toggle="dropdown"
                                                        aria-expanded="false"
                                                        />
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
                                                </td>
                                            </form>
                                        </tr>
                                        <tr class="">
                                            <td  class="ps-4">
                                                <img src="{{ asset('assets/image.jpg') }}" width="45" height="45" alt="..." class="foy-table-image rounded-circle border border-2 border-white mr-2 float-start">
                                                <p class="foy-p">Shah Foyez <img class="foy-tstar" src="{{ asset('assets/star1.png') }}"></p>
                                            </td>
                                            <td>
                                                <h6 class="graded text-center foy-table-status"  style="color: #FFC831 ">Late</h6>
                                            </td>
                                            <form method="post" action="/gradeSubmit }}" enctype="multipart/form-data">
                                                @csrf
                                                <td>
                                                    <input class="form-control" name="points" type="number">
                                                </td>
                                                <td>
                                                    <input class="form-control" name="points" type="number">
                                                </td>
                                                {{-- <td>
                                                    <h6 class="graded" style="color: rgb(58, 66, 175);">jf</h6>
                                                </td> --}}
                                                <td>
                                                    <!-- dropdown start -->
                                                    <div class="more dropdown pe-3">
                                                        <img
                                                        src="assets/more.png"
                                                        alt=""
                                                        class="dropdown-toggle"
                                                        type="button"
                                                        id="dropdownMenuButton1"
                                                        data-bs-toggle="dropdown"
                                                        aria-expanded="false"
                                                        />
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
                                                </td>
                                            </form>
                                        </tr>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Left -->
                <!-- Right -->
                <div class="col-lg-7 vl v mt-4 table-wrapper-scroll-y my-custom-scrollbar" >
                     <div class="bg-white foy-rounded-card ">
                        <div class="col-lg-12 d-flex align-items-center">
                            <img class="foy-at-img me-3" src="{{ asset('assets/min.png') }}">
                            <div>
                                <h3 class="foy-a-title m-0">Assignment 01</h3>
                                <p class="foy-at-bottom m-0">  Assignment 01 <i class="fa-solid fa-circle foy-dot align-item-center"></i> ssdryhuyhf</p>
                            </div>
                        </div>

                        <div class="col-lg-12 mt-4 mb-4">
                            <img class="d-inline float-start foy-a-single-img me-3" src="{{ asset('assets/image.jpg') }}">
                            <h6 class="foy-sa-an m-0">Shah Foyez <img class="" src="{{ asset('assets/star2.png') }}"></h6>
                            <p class="foy-sa-ac m-0"> 2 attachments</p>
                        </div>

                        <div class="row mt-2 mb-3">
                            <hr class="foy-hr">
                       </div>

                        <div class="row">
                            <div class='col-sm-4 foy-post-RearangeBox foy-post-imgThumbContainer'>
                                <a href="image.jpg" download><i class='fa-solid fa-cloud-arrow-down foy-action-button' download>
                                </i></a>
                                <div class="foy-post-imgThumbnail" >
                                    <video id="bb" class="foy-video foy-blurEffect" height="100%" width="100%">
                                        <source src="video.mp4" type=video/mp4>
                                        <source src= "error.webm" type=video/webm>
                                    </video>
                                    <div class="foy-content">
                                        <div class="foy-play">►</div>
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


                            <div class='col-sm-4 foy-post-RearangeBox foy-post-imgThumbContainer'>
                                <a href="image.jpg" download><i class='fa-solid fa-cloud-arrow-down foy-action-button' download>
                                </i></a>
                                <div class="foy-post-imgThumbnail" >
                                    <a href="image.jpg" target="_blank" ><img src="{{ asset('assets/image.jpg') }}"></a>
                                </div>
                                <div class='foy-post-info'>
                                    <div>
                                        <a href="image.jpg" target="_blank" ><p class='foy-post-imgName'>MyImage.jpg</p></a>
                                    </div>
                                    <div>
                                        <p class='foy-post-type'>Image</p>
                                    </div>
                                </div>
                            </div>
                            <div class='col-sm-4 foy-post-RearangeBox foy-post-imgThumbContainer'>
                                <a href="pdf.pdf" download><i class='fa-solid fa-cloud-arrow-down foy-action-button' download>
                                </i></a>
                                <div class="foy-post-thumbnail" >
                                    <a href="pdf.pdf" download="" ><img src="{{ asset('assets/pdf.png') }}"></a>
                                </div>
                                <div class='foy-post-info'>
                                    <div>
                                        <a href="pdf.pdf" target="_blank" ><p class='foy-post-imgName'>MyPdfFile.pdf</p></a>
                                    </div>
                                    <div>
                                        <p class='foy-post-type'>PDF</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>

                <!-- Right -->
            </div>
        <!-- Row -->
        </div>
        <!-- Container -->
    </section>

    <!-- footer start -->
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
                  var src= "assets/pdf.png";
                  var type= "PDF";
                  var class_name= "foy-thumbnail";
              }else if(fileTypeSecond=='x-zip-compressed'){
                  var src= "assets/zip.png";
                  var type= "Zip";
                  var class_name= "foy-thumbnail";
              }else if(fileTypeSecond=='msword'){
                  var src= "assets/doc.png";
                  var type= "DOC";
                  var class_name= "foy-thumbnail";
              }

          }else if(fileTypeFirst == "video"){
              var src= "assets/video.png";
              var type= "Video";
              var class_name= "foy-thumbnail";
          }
          return function(e) {
              var imgThumbnailElem = "<div class='RearangeBox imgThumbContainer'><i class='far fa-times-circle foy-action-button' onclick='removeThumbnailIMG(this)'></i><div class='" +  class_name + "' ><img  src='" +  src + "'" + "title='"+ theFile.name + "'/></div><div class='foy-info'><div class='imgName'>"+ theFile.name +"</div><div class='type'>"+ type +"</div></div></div></div>";
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


    <!-- Option 1: Public Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
