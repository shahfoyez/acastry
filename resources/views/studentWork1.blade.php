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


    <title>Stream</title>
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
            box-shadow: 0px 5px 10px rgba(205, 205, 205, 0.08);
            border-radius: 15px 15px 15px 15px;
       }
       .foy-acastry-tr th{
        font-weight: 400;
        font-size: 18px;
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
            padding: 10px 10px 10px 50px!important;
        }
       .foy-table .form-control{
            padding: 0.25rem 0.1rem 0.25rem 0.25rem !important;
       }
       .foy-table-image{
        /* box-shadow: 0 3px 10px rgb(0 0 0 / 0.2) !important; */
            box-shadow: 4px 4px 12px rgba(158, 158, 158, 0.2) !important;

       }
       /* .foy-table td{
            border-right: 1px solid #29a3da54;

       } */
       /* .foy-table td:nth-child('4'){
            border-right: none;
       } */
       /* .foy-table td:last-child{
            border-right: none;
       } */
       .foy-table td:nth-last-child(2){
            border-right: none;
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
                            <table class="table align-middle table-hover foy-table">
                                <thead>
                                <tr class="foy-acastry-tr">
                                    <th width="45%" scope="col">Name</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Grade</th>
                                    <th scope="col">Grade</th>
                                    <th width="5%" scope="col"></th>
                                </tr>
                                </thead>
                                    <tbody>
                                        <tr class="table-active">
                                            <td>
                                                <img src="{{ asset('assets/image.jpg') }}" width="45" height="45" alt="..." class="foy-table-image rounded-circle border border-2 border-white mr-2 float-start">
                                                <p class="foy-p">Shah Foyez <img src="{{ asset('assets/star1.png') }}"></p>
                                            </td>
                                            <td>
                                                <h6 class="graded" style="color: rgb(58, 66, 175);">gg</h6>
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
                                                    <div class="more dropdown">
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
                                            <td>
                                                <img src="{{ asset('assets/image.jpg') }}" width="45" height="45" alt="..." class="foy-table-image rounded-circle border border-2 border-white mr-2 float-start">
                                                <p class="foy-p">Shah Foyez <img src="{{ asset('assets/star1.png') }}"></p>
                                            </td>
                                            <td>
                                                <h6 class="graded text-center" style="color: #29A3DA;">Graded</h6>
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
                                                    <div class="more dropdown">
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
                                            <td>
                                                <img src="{{ asset('assets/image.jpg') }}" width="45" height="45" alt="..." class="foy-table-image rounded-circle border border-2 border-white mr-2 float-start">
                                                <p class="foy-p">Shah Foyez <img src="{{ asset('assets/star1.png') }}"></p>
                                            </td>
                                            <td>
                                                <h6 class="graded text-center"  style="color: #2E7D32">Submitted</h6>
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
                                                    <div class="more dropdown">
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
                                            <td>
                                                <img src="{{ asset('assets/image.jpg') }}" width="45" height="45" alt="..." class="foy-table-image rounded-circle border border-2 border-white mr-2 float-start">
                                                <p class="foy-p">Shah Foyez <img src="{{ asset('assets/star1.png') }}"></p>
                                            </td>
                                            <td>
                                                <h6 class="graded" style="color: rgb(58, 66, 175);">gg</h6>
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
                                                    <div class="more dropdown">
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
                        <div class="col-lg-12">
                            <h3><i class="fa fa-book" aria-hidden="true"></i> Hello</h3>
                        </div>
                        <div class="col">
                            <ul class="navbar-nav">
                                <div class="row">
                                    <li class="nav-item ml-2 submitted">
                                        <h1>55</h1>
                                        <h6>Submitted</h6>
                                    </li>
                                    <li class="nav-item ml-4 missing">
                                        <h1>99</h1>
                                        <h6>Missing</h6>
                                    </li>
                                    <li class="nav-item ml-4 late">
                                        <h1> 55</h1>
                                        <h6>Late</h6>
                                    </li>
                                    <li class="nav-item ml-4 graded">
                                        <h1>55</h1>
                                        <h6>Graded</h6>
                                    </li>
                                </div>
                            </ul>
                        </div>
                        <div class="row mt-2 mb-3">
                            <div class="col-6">
                                <div class="dropdown">
                                    <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Assigned
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color: #ebebeb; padding:0px">
                                        <a class="dropdown-item graded pt-0 pb-0" href="#"><h6>All</h6></a>
                                        <a class="dropdown-item submitted pt-0 pb-0" href="#"><h6>Assigned</h6></a>
                                        <a class="dropdown-item missing pt-0 pb-0" href="#"><h6>Missing</h6> </a>
                                        <a class="dropdown-item late pt-0 pb-0" href="#"><h6>Late</h6> </a>
                                        <a class="dropdown-item graded pt-0 pb-0" href="#"><h6>Graded</h6> </a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class='foy-as-RearangeBox foy-as-imgThumbContainer'>
                                <div class='foy-as-head'>
                                        <div class="foy-author-imgThumbnail" >
                                            <img class="" src="{{ asset('assets/image.jpg') }}">
                                        </div>
                                        <div>
                                            <a class="text-decoration-none" href="#"><p class='foy-as-an'>Stella Zoe <img class="foy-star-student" src="{{ asset('assets/star.png') }}"></p></a>
                                        </div>
                                        <div>
                                        <a class="text-decoration-none" href="#"><p class='foy-as-attachment'>2 attachments</p></a>
                                        </div>
                                </div>
                                <!-- <a href="image.jpg" download><i class='fa-solid fa-download foy-action-button foy-action-button-as' download> -->
                                </i></a>
                                <div class="foy-as-imgThumbnail" >
                                    <video id="bb" class="foy-video foy-blurEffect foy-border-radius-none" height="100%" width="100%">
                                        <source src="video.mp4" type=video/mp4>
                                        <source src= "error.webm" type=video/webm>
                                    </video>
                                    <div class="foy-content foy-content-as">
                                        <div class="foy-play">►</div>
                                    </div>
                                </div>
                                <div class='foy-as-info'>
                                    <div>
                                        <a href="video.mp4" target="_blank" ><p class='foy-as-imgName'>NewVideo.mp4</p></a>
                                    </div>
                                    <div>
                                        <p class='foy-as-type'>Video</p>
                                    </div>
                                </div>
                            </div>


                            <div class='foy-as-RearangeBox foy-as-imgThumbContainer'>
                                <div class='foy-as-head'>
                                    <div class="foy-author-imgThumbnail" >
                                        <img class="" src="{{ asset('assets/image.jpg') }}">
                                    </div>
                                    <div>
                                        <a class="text-decoration-none" href="#"><p class='foy-as-an'>Stella Zoe  <img class="foy-star-student" src="{{ asset('assets/star.png') }}"></p></a>
                                    </div>
                                    <div>
                                    <a class="text-decoration-none" href="#"><p class='foy-as-attachment'>2 attachments</p></a>
                                    </div>
                                </div>
                                <!-- <a href="image.jpg" download><i class='fa-solid fa-download foy-action-button foy-action-button-as' download> -->
                                </i></a>
                                <div class="foy-as-imgThumbnail" >
                                    <a href="image.jpg" target="_blank" ><img class="foy-border-none" src="{{ asset('assets/image.jpg') }}"></a>
                                </div>
                                <div class='foy-as-info'>
                                    <div>
                                        <a href="image.jpg" target="_blank" ><p class='foy-as-imgName'>MyImage.jpg</p></a>
                                    </div>
                                    <div>
                                        <p class='foy-as-type'>Image</p>
                                    </div>
                                </div>
                            </div>

                            <div class='foy-as-RearangeBox foy-as-imgThumbContainer'>
                                <div class='foy-as-head'>
                                        <div class="foy-author-imgThumbnail" >
                                            <img class="" src="{{ asset('assets/image.jpg') }}">
                                        </div>
                                        <div>
                                            <!-- <img src="star.png"> -->
                                            <a class="text-decoration-none" href="#"><p class='foy-as-an'>Stella Zoe <img class="foy-star-student" src="{{ asset('assets/star.png') }}"></p></a>
                                        </div>
                                        <div>
                                        <a class="text-decoration-none" href="#"><p class='foy-as-attachment'>2 attachments</p></a>
                                        </div>
                                </div>
                                <!-- <a href="pdf.pdf" download><i class='fa-solid fa-download foy-action-button foy-action-button-as' download> -->
                                </i></a>
                                <div class="foy-as-thumbnail foy-border-radius-none" >
                                    <a href="pdf.pdf" download="" ><img src="{{ asset('assets/pdf.png') }}"></a>
                                </div>
                                <div class='foy-as-info'>
                                    <div>
                                        <a href="pdf.pdf" target="_blank" ><p class='foy-as-imgName'>MyPdfFile.pdf</p></a>
                                    </div>
                                    <div>
                                        <p class='foy-as-type'>PDF</p>
                                    </div>
                                </div>
                            </div>
                            <div class='foy-as-RearangeBox foy-as-imgThumbContainer'>
                                <div class='foy-as-head'>
                                    <div class="foy-author-imgThumbnail" >
                                        <img class="" src="{{ asset('assets/image.jpg') }}">
                                    </div>
                                    <div>
                                        <a class="text-decoration-none" href="#"><p class='foy-as-an'>Stella Zoe  <img class="foy-star-student" src="{{ asset('assets/star.png') }}"></p></a>
                                    </div>
                                    <div>
                                    <a class="text-decoration-none" href="#"><p class='foy-as-attachment'>2 attachments</p></a>
                                    </div>
                                </div>
                                <div class="foy-as-thumbnail foy-border-radius-none" >
                                    <a href="doc.doc" download="" ><img src="{{ asset('assets/doc.png') }}"></a>
                                </div>
                                <div class='foy-as-info'>
                                    <div>
                                        <a href="doc.doc" download="" ><p class='foy-as-imgName'>MyDocFile.doc</p></a>
                                    </div>
                                    <div>
                                        <p class='foy-as-type'>DOC</p>
                                    </div>
                                </div>
                            </div>
                            <div class='foy-as-RearangeBox foy-as-imgThumbContainer'>
                                <div class='foy-as-head'>
                                    <div class="foy-author-imgThumbnail" >
                                        <img class="" src="{{ asset('assets/image.jpg') }}">
                                    </div>
                                    <div>
                                        <a class="text-decoration-none" href="#"><p class='foy-as-an'>Stella Zoe  <img class="foy-star-student" src="star.png"></p></a>
                                    </div>
                                    <div>
                                    <a class="text-decoration-none" href="#"><p class='foy-as-attachment'>2 attachments</p></a>
                                    </div>
                                </div>
                                <div class="foy-as-thumbnail foy-border-radius-none" >
                                    <a href="zip.doc" download="" ><img src="{{ asset('assets/zip.png') }}"></a>
                                </div>
                                <div class='foy-as-info'>
                                    <div>
                                        <a href="zip.zip" download="" ><p class='foy-as-imgName'>MyZipFile.doc</p></a>
                                    </div>
                                    <div>
                                        <p class='foy-as-type'>ZIP</p></a>
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
