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
    <link rel="stylesheet" href="assets/css/pias.css" />

    <link rel="stylesheet" href="assets/css/styleAdded.css" />


    <title>Stream</title>
  </head>
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
       <!-- Search & Filter -->
        <div class="container">
            <h2 class="pt-5 ">Welcome to Industrial Homepage!</h2>
            <div class="d-flex container">
                <div class="input-group mb-3 p-2 rounded  ">
                    <input type="text" class="form-control" placeholder="Search job title or keywords"
                        aria-label="Search job title or keywords">
                    <button class="input-group-text bg-primary text-white rounded ps-2">
                        Search</button>

                </div>
                <div class="d-flex p-2 ">
                    <div class="dropdown pe-2">
                        <button class="dropbtn dropdown-toggle shadow-sm  bg-body rounded">Location</button>
                        <div class="dropdown-content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                        </div>
                    </div>
                    <div class="dropdown ">
                        <button class="dropbtn dropdown-toggle shadow-sm  bg-body rounded">Keyword</button>
                        <div class="dropdown-content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                        </div>
                    </div>

                    <btn class="m-2  w-100">
                        <a href=""><i class="fa fa-solid fa-filter"></i></a>
                    </btn>
                </div>
            </div>

        </div>
        <!-- Card Section -->
        <div class="container">
            <h5 class="pb-3"><span style="text-decoration: underline; text-decoration-color:#007bff;">Industy</span> Work <span
                class="bg-primary text-white rounded-circle">12</span></h5>
            <div class="container">
                <div class="card mb-3 container">
                    <div class="card-body container">
                        <div class="d-flex container">
                            <div class="d-flex">
                                <div>
                                    <img class="bg-primary h-75 rounded-circle" src="assets/Mask group.png" alt="">
                                </div>
                                <div class="ps-3">
                                    <p class="mb-0 fw-bold fs-5">Facebook Inc.</p>
                                    <span>Menlo Park, CA 94025, United States</span><br>
                                    <span class=""><i class="fa fa-solid fa-calendar pe-1 text-primary "></i></span>3 dayes
                                        ago
                                    <span class="ps-2"><i class="fa fa-solid fa-clock pe-1 text-primary"></i></span>due
                                        tomorrow
                                    <a href="" style="text-decoration: none;"><span class="ps-2"><i class="fa fa-users pe-1" "></i>100
                                            People added</span></a>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="row d-flex  w-50 h-50 justify-content-end cards  ">
                                    <div class="single-counter col-lg-3 text-center border border-info rounded">
                                        <h5 class="text-info pt-2">100</h5>
                                        <p class="text-dark">points</p>
                                    </div>
                                    <div class="single-counter col-lg-3  text-center border border-info rounded">
                                        <h5 class="text-info pt-2 font-weight-bold">100</h5>
                                        <p class="text-dark">Points</p>
                                    </div>
                                    <div class="single-counter col-lg-3 text-center border border-info rounded">
                                        <h5 class="text-info font-weight-bold pt-2">100</h5>
                                        <p class="text-dark">Points</p>
                                    </div>
                                </div>
                                <div>
                                    <a href=""><i class="fa fa-ellipsis-v  dots"></i></a>
                                </div>
                            </div>



                            {{-- <div class="row d-flex  w-50 h-50 justify-content-end cards  ">
                                <div class="single-counter col-lg-3 text-center border border-info rounded">
                                    <h5 class="text-info pt-2">100</h5>
                                    <p class="text-dark">points</p>
                                </div>
                                <div class="single-counter col-lg-3  text-center border border-info rounded">
                                    <h5 class="text-info pt-2 font-weight-bold">100</h5>
                                    <p class="text-dark">Points</p>
                                </div>
                                <div class="single-counter col-lg-3 text-center border border-info rounded">
                                    <h5 class="text-info font-weight-bold pt-2">100</h5>
                                    <p class="text-dark">Points</p>
                                </div>
                            </div>
                            <div>
                                <a href=""><i class="fa fa-ellipsis-v  dots"></i></a>
                            </div> --}}
                        </div>
                        <div class="container pt-3 pb-3">
                            <h5 class="card-title pt-3">Looking for a Wordpress developerLooking for a Wordpress developer
                                Looking for
                                Looking for a Wordpress developer</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown
                                printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is
                                simply dummy text of the printing and typesetting industry...</p>
                        </div>
                        <div class="pt-3">
                            <a class="" href="#"><button class="btn btn-primary ">View Details</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="card mb-3 container">
                    <div class="card-body container">
                        <div class="d-flex container">
                            <div class="d-flex">
                                <div>
                                    <!-- <i class="fa fa-brands fa-facebook fa-4x rounded-circle px-5"></i> -->
                                    <img class="bg-primary h-75 rounded-circle" src="assets/Mask group.png" alt="">
                                </div>
                                <div class="ps-3">
                                    <p class="mb-0 fw-bold fs-5">Facebook Inc.</p>
                                    <span>Menlo Park, CA 94025, United States</span><br>
                                    <a href=""><span class=""><i class="fa fa-solid fa-calendar pe-1 "></i></span>3 dayes
                                        ago</a>
                                    <a href=""><span class="ps-2"><i class="fa fa-solid fa-clock pe-1"></i></span>due
                                        tomorrow</a>
                                    <a href=""><span class="ps-2"><i class="fa fa-users pe-1" aria-hidden="true"></i>100
                                            People added</span></a>
                                </div>
                            </div>


                            <div class="row d-flex  w-50 h-50 justify-content-end cards  ">
                                <div class="single-counter col-lg-3 text-center border border-info rounded">
                                    <h5 class="text-info pt-2">100</h5>
                                    <p class="text-dark">points</p>
                                </div>
                                <div class="single-counter col-lg-3  text-center border border-info rounded">
                                    <h5 class="text-info pt-2 font-weight-bold">100</h5>
                                    <p class="text-dark">Points</p>
                                </div>
                                <div class="single-counter col-lg-3 text-center border border-info rounded">
                                    <h5 class="text-info font-weight-bold pt-2">100</h5>
                                    <p class="text-dark">Points</p>
                                </div>
                            </div>
                            <div>
                                <a href=""><i class="fa fa-ellipsis-v  dots"></i></a>
                            </div>


                        </div>
                        <div class="container pt-3 pb-3">
                            <h5 class="card-title pt-3">Looking for a Wordpress developerLooking for a Wordpress developer
                                Looking for
                                Looking for a Wordpress developer</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown
                                printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is
                                simply dummy text of the printing and typesetting industry...</p>
                        </div>
                        <div class="pt-3">
                            <a class="" href="#"><button class="btn btn-primary ">View Details</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="card mb-3 container">
                    <div class="card-body container">
                        <div class="d-flex container">
                            <div class="d-flex">
                                <div>
                                    <!-- <i class="fa fa-brands fa-facebook fa-4x rounded-circle px-5"></i> -->
                                    <img class="bg-primary h-75 rounded-circle" src="assets/Mask group.png" alt="">
                                </div>
                                <div class="ps-3">
                                    <p class="mb-0 fw-bold fs-5">Facebook Inc.</p>
                                    <span>Menlo Park, CA 94025, United States</span><br>
                                    <a href=""><span class=""><i class="fa fa-solid fa-calendar pe-1 "></i></span>3 dayes
                                        ago</a>
                                    <a href=""><span class="ps-2"><i class="fa fa-solid fa-clock pe-1"></i></span>due
                                        tomorrow</a>
                                    <a href=""><span class="ps-2"><i class="fa fa-users pe-1" aria-hidden="true"></i>100
                                            People added</span></a>
                                </div>
                            </div>


                            <div class="row d-flex  w-50 h-50 justify-content-end cards  ">
                                <div class="single-counter col-lg-3 text-center border border-info rounded">
                                    <h5 class="text-info pt-2">100</h5>
                                    <p class="text-dark">points</p>
                                </div>
                                <div class="single-counter col-lg-3  text-center border border-info rounded">
                                    <h5 class="text-info pt-2 font-weight-bold">100</h5>
                                    <p class="text-dark">Points</p>
                                </div>
                                <div class="single-counter col-lg-3 text-center border border-info rounded">
                                    <h5 class="text-info font-weight-bold pt-2">100</h5>
                                    <p class="text-dark">Points</p>
                                </div>
                            </div>
                            <div>
                                <a href=""><i class="fa fa-ellipsis-v  dots"></i></a>
                            </div>


                        </div>
                        <div class="container pt-3 pb-3">
                            <h5 class="card-title pt-3">Looking for a Wordpress developerLooking for a Wordpress developer
                                Looking for
                                Looking for a Wordpress developer</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown
                                printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is
                                simply dummy text of the printing and typesetting industry...</p>
                        </div>
                        <div class="pt-3">
                            <a class="" href="#"><button class="btn btn-primary ">View Details</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="card mb-3 container">
                    <div class="card-body container">
                        <div class="d-flex container">
                            <div class="d-flex">
                                <div>
                                    <!-- <i class="fa fa-brands fa-facebook fa-4x rounded-circle px-5"></i> -->
                                    <img class="bg-primary h-75 rounded-circle" src="assets/Mask group.png" alt="">
                                </div>
                                <div class="ps-3">
                                    <p class="mb-0 fw-bold fs-5">Facebook Inc.</p>
                                    <span>Menlo Park, CA 94025, United States</span><br>
                                    <a href=""><span class=""><i class="fa fa-solid fa-calendar pe-1 "></i></span>3 dayes
                                        ago</a>
                                    <a href=""><span class="ps-2"><i class="fa fa-solid fa-clock pe-1"></i></span>due
                                        tomorrow</a>
                                    <a href=""><span class="ps-2"><i class="fa fa-users pe-1" aria-hidden="true"></i>100
                                            People added</span></a>
                                </div>
                            </div>


                            <div class="row d-flex  w-50 h-50 justify-content-end cards  ">
                                <div class="single-counter col-lg-3 text-center border border-info rounded">
                                    <h5 class="text-info pt-2">100</h5>
                                    <p class="text-dark">points</p>
                                </div>
                                <div class="single-counter col-lg-3  text-center border border-info rounded">
                                    <h5 class="text-info pt-2 font-weight-bold">100</h5>
                                    <p class="text-dark">Points</p>
                                </div>
                                <div class="single-counter col-lg-3 text-center border border-info rounded">
                                    <h5 class="text-info font-weight-bold pt-2">100</h5>
                                    <p class="text-dark">Points</p>
                                </div>
                            </div>
                            <div>
                                <a href=""><i class="fa fa-ellipsis-v  dots"></i></a>
                            </div>


                        </div>
                        <div class="container pt-3 pb-3">
                            <h5 class="card-title pt-3">Looking for a Wordpress developerLooking for a Wordpress developer
                                Looking for
                                Looking for a Wordpress developer</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown
                                printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is
                                simply dummy text of the printing and typesetting industry...</p>
                        </div>
                        <div class="pt-3">
                            <a class="" href="#"><button class="btn btn-primary ">View Details</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="card mb-3 container">
                    <div class="card-body container">
                        <div class="d-flex container">
                            <div class="d-flex">
                                <div>
                                    <!-- <i class="fa fa-brands fa-facebook fa-4x rounded-circle px-5"></i> -->
                                    <img class="bg-primary h-75 rounded-circle" src="assets/Mask group.png" alt="">
                                </div>
                                <div class="ps-3">
                                    <p class="mb-0 fw-bold fs-5">Facebook Inc.</p>
                                    <span>Menlo Park, CA 94025, United States</span><br>
                                    <a href=""><span class=""><i class="fa fa-solid fa-calendar pe-1 "></i></span>3 dayes
                                        ago</a>
                                    <a href=""><span class="ps-2"><i class="fa fa-solid fa-clock pe-1"></i></span>due
                                        tomorrow</a>
                                    <a href=""><span class="ps-2"><i class="fa fa-users pe-1" aria-hidden="true"></i>100
                                            People added</span></a>
                                </div>
                            </div>


                            <div class="row d-flex  w-50 h-50 justify-content-end cards  ">
                                <div class="single-counter col-lg-3 text-center border border-info rounded">
                                    <h5 class="text-info pt-2">100</h5>
                                    <p class="text-dark">points</p>
                                </div>
                                <div class="single-counter col-lg-3  text-center border border-info rounded">
                                    <h5 class="text-info pt-2 font-weight-bold">100</h5>
                                    <p class="text-dark">Points</p>
                                </div>
                                <div class="single-counter col-lg-3 text-center border border-info rounded">
                                    <h5 class="text-info font-weight-bold pt-2">100</h5>
                                    <p class="text-dark">Points</p>
                                </div>
                            </div>
                            <div>
                                <a href=""><i class="fa fa-ellipsis-v  dots"></i></a>
                            </div>


                        </div>
                        <div class="container pt-3 pb-3">
                            <h5 class="card-title pt-3">Looking for a Wordpress developerLooking for a Wordpress developer
                                Looking for
                                Looking for a Wordpress developer</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown
                                printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is
                                simply dummy text of the printing and typesetting industry...</p>
                        </div>
                        <div class="pt-3">
                            <a class="" href="#"><button class="btn btn-primary ">View Details</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
