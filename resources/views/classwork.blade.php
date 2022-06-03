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
    <link rel="stylesheet" href="assets/css/style.css" />

    <title>Class Work</title>
  </head>
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
                <!-- dropdown start -->
                <div class="more p-2 dropdown" >
                  <img src="assets/Group 41.png" alt="" width="30"
                  height="30" class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dd-item  dropdown-item" href="#">Create Classroom</a></li>
                    <li><a class="dd-item  dropdown-item" href="#">Join Classroom</a></li>
                  </ul>
              </div>
              <!-- dropdown end -->
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
                <a class="nav-link" href="#"
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
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dd-item  dropdown-item" href="#">View Profile</a></li>
                    <li><a class="dd-item  dropdown-item" href="#">Logout</a></li>
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
        <!-- sub-dtls start -->
        <div class="sub-dtls card text-white my-4">
          <img
            class="sub-dtls-img card-img"
            src="assets/Group 335941.png"
            alt="Card image"
          />
          <div class="card-img-overlay">
            <a href="#" class="d-flex justify-content-end m-3">
              <img src="assets/more-white.png" alt="" />
            </a>
            <h5 class="card-title mt-4 ms-4">
              CSE-3213 Digital Signal Processing.
            </h5>
            <p class="sub-dtls-sec card-text ms-4">Section C</p>
            <p class="card-text my-4 ms-4">Jerome Shaw</p>
          </div>
        </div>
        <!-- sub-dtls end -->

        <div class="row">
            <div class="col-lg-9">

                <!-- classroom nav start-->
                <div class="col-12 my-4">
                    <ul class="classroom-nav nav nav-pills justify-content-between">
                    <li class="nav-item">
                        <a class="nav-link" href="/stream">Stream</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/classwork">Classwork</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Material</a>
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


               <!-- Lecture-note start-->

                <!-- headline start -->
                <div class="pc d-flex my-3">
                <div class="col-6 d-flex">
                    <p>Lecture Notes <span class="dash-notification badge rounded-pill pb-1"
                    >02</span></p>
                </div>
                </div>
                <!-- headline end -->

                <div
                    class="st-card col-lg-12 d-flex justify-content-between py-3 my-2"
                >

                    <div class="d-flex">
                        <div class="lvr vr mx-4"></div>
                        <img
                        class="st-img rounded-circle mx-2"
                        src="assets/Group 33642.png"
                        alt=""
                        width="42"
                        height="42"
                        />

                        <div class="course-tn">
                        <p class="course-t m-0">New Material: Resource-03</p>
                        <p class="course-n m-0">Posted on May 25</p>
                        </div>
                    </div>

                     <!-- dropdown start -->
                    <div class="more p-2 dropstart" >
                        <img src="assets/more.png" alt=""  class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dd-item  dropdown-item" href="#">Edit</a></li>
                          <li><a class="dd-item  dropdown-item" href="#">Delete</a></li>
                        </ul>
                    </div>
                <!-- dropdown end -->

                </div>

                <div
                    class="st-card col-lg-12 d-flex justify-content-between py-3 my-2"
                >

                    <div class="d-flex">
                        <div class="lvr vr mx-4"></div>
                        <img
                        class="st-img rounded-circle mx-2"
                        src="assets/Group 336421.png"
                        alt=""
                        width="42"
                        height="42"
                        />

                        <div class="course-tn">
                        <p class="course-t m-0">New Material: Resource-03</p>
                        <p class="course-n m-0">Posted on May 25</p>
                        </div>
                    </div>

                     <!-- dropdown start -->
                    <div class="more p-2 dropstart" >
                        <img src="assets/more.png" alt=""  class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dd-item  dropdown-item" href="#">Edit</a></li>
                          <li><a class="dd-item  dropdown-item" href="#">Delete</a></li>
                        </ul>
                    </div>
                <!-- dropdown end -->

                </div>

                <!-- Lecture-note end -->


                <!-- Class-Notes start -->

                <!-- headline start -->
                <div class="pc d-flex my-3">
                    <div class="col-6 d-flex">
                        <p>Class Notes <span class="dash-notification badge rounded-pill pb-1"
                        >03</span></p>
                    </div>
                </div>
                    <!-- headline end -->

                    <div
                        class="st-card col-lg-12 d-flex justify-content-between py-3 my-2"
                    >

                        <div class="d-flex">
                            <div class="lvr vr mx-4"></div>
                            <img
                            class="st-img rounded-circle mx-2"
                            src="assets/Group 336421.png"
                            alt=""
                            width="42"
                            height="42"
                            />

                            <div class="course-tn">
                            <p class="course-t m-0">Class Notes: Resource-03</p>
                            <p class="course-n m-0">Posted on May 25</p>
                            </div>
                        </div>

                         <!-- dropdown start -->
                        <div class="more p-2 dropstart" >
                            <img src="assets/more.png" alt=""  class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dd-item  dropdown-item" href="#">Edit</a></li>
                              <li><a class="dd-item  dropdown-item" href="#">Delete</a></li>
                            </ul>
                        </div>
                      <!-- dropdown end -->

                    </div>
                    <div
                        class="st-card col-lg-12 d-flex justify-content-between py-3 my-2"
                    >

                        <div class="d-flex">
                            <div class="lvr vr mx-4"></div>
                            <img
                            class="st-img rounded-circle mx-2"
                            src="assets/Group 336422.png"
                            alt=""
                            width="42"
                            height="42"
                            />

                            <div class="course-tn">
                            <p class="course-t m-0">Class Notes: Resource-02</p>
                            <p class="course-n m-0">Posted on May 25</p>
                            </div>
                        </div>

                         <!-- dropdown start -->
                        <div class="more p-2 dropstart" >
                            <img src="assets/more.png" alt=""  class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dd-item  dropdown-item" href="#">Edit</a></li>
                              <li><a class="dd-item  dropdown-item" href="#">Delete</a></li>
                            </ul>
                        </div>
                    <!-- dropdown end -->

                    </div>
                    <div
                        class="st-card col-lg-12 d-flex justify-content-between py-3 my-2"
                    >

                        <div class="d-flex">
                            <div class="lvr vr mx-4"></div>
                            <img
                            class="st-img rounded-circle mx-2"
                            src="assets/Group 33642.png"
                            alt=""
                            width="42"
                            height="42"
                            />

                            <div class="course-tn">
                            <p class="course-t m-0">Class Notes: Resource-01</p>
                            <p class="course-n m-0">Posted on May 25</p>
                            </div>
                        </div>

                         <!-- dropdown start -->
                        <div class="more p-2 dropstart" >
                            <img src="assets/more.png" alt=""  class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dd-item  dropdown-item" href="#">Edit</a></li>
                            <li><a class="dd-item  dropdown-item" href="#">Delete</a></li>
                            </ul>
                        </div>
                    <!-- dropdown end -->

                    </div>

                    <!-- Class-Notes end -->

            </div>


            <div class="col-lg-3 col-md-12">
                <button type="button" class="btn create-b my-4"  class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Create <img src="assets/add.png" alt=""></button>

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
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dd-item  dropdown-item" href="#">Add materials</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dd-item dropdown-item" href="#">Add Topics</a></li>
                  </ul>



                <div class="sub-dtls card text-white my-4">
                    <img
                      class="sub-dtls-img card-img"
                      src="assets/bg1.png"
                      alt="Card image"
                    />
                    <div class="card-img-overlay">
                      <p class="sub-dtls-sec card-text ms-4">All topics</p>
                      <p class="card-text my-4 ms-4">Lecture notes</p>
                      <p class="card-text my-4 ms-4">Class notes</p>
                    </div>
                  </div>
            </div>
        </div>


      </div>

    </section>
                <!-- Modal -->
                <div
                class="modal fade"
                id="assignmentModal"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
              >
                <div class="modal-dialog modal-xl modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Assignment</h5>
                      <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                      ></button>
                    </div>
                    <div class="modal-body">
                      <form action="">
                        <div class="d-flex m-3">
                          <div class="points m-2">
                            <p>Points</p>
                            <select
                              class="form-select"
                              aria-label="Default select example"
                              style="background-color: #F6F6F6;"
                            >
                              <option selected>100</option>
                              <option value="1">70</option>
                              <option value="2">80</option>
                              <option value="3">90</option>
                              <option value="3">100</option>
                            </select>
                          </div>
                          <div class="due m-2">
                            <p>Due</p>
                            <input type="datetime-local" id="birthdaytime" name="birthdaytime">
                            <!-- <select
                              class="form-select"
                              aria-label="Default select example"
                              style="background-color: #F6F6F6;"
                            >
                              <option selected>No Due</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select> -->
                          </div>
                          <div class="tpic m-2">
                            <p>Topic</p>
                            <select
                              class="form-select"
                              aria-label="Default select example"
                              style="background-color: #F6F6F6;"
                            >
                              <option selected>No Topic</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                        </div>
                        <div class="m-3 p-2">
                          <textarea
                            class="form-control txt-area-title"
                            id="floatingTextarea"
                            placeholder="Assignment title goes here..."
                          ></textarea>
                          <label for="floatingTextarea" class="txt-area-title-label"
                            >Title</label
                          >
                        </div>
                        <div class="announce-txt m-3 p-2">
                          <div class="form-floating">
                            <textarea
                              class="form-control txt-area"
                              id="floatingTextarea"
                            ></textarea>
                            <label for="floatingTextarea course-n"
                              >Instructions (optional)</label
                            >
                          </div>
                        </div>

                        <div class="d-flex justify-content-between align-content-center m-3">
                          <div class="sortableImgThumbnailPreview" id="sortableImgThumbnailPreview">
                          </div>

                        </div>

                        <div class="d-flex justify-content-between align-content-center">
                          <div class="announce-icon m-2 ms-4">

                            <!-- image preview div -->

                            <div class="foy-image-upload">

                              <input id="files" type="file" multiple/>
                              <label for="file-input">
                                <img src="assets/Frame 33589.png"/>
                              </label>
                          </div>
                        </div>
                        <div class="announce-postm-2 me-4 text-end">
                          <button type="button" class="btn announce-b1 px-3 mx-2">
                            Cancel
                          </button>
                          <button type="button" class="btn announce-b2 px-3">Post</button>
                        </div>
                      </div>

                        <!-- <div class="d-flex justify-content-between my-4 pt-2" style="border-top:1px solid #29A3DA; ">
                            <div class="announce-icon m-2 ms-4">
                              <button class="upload-bt">
                                <input type="file" name="myfile" multiple />
                                <img class="mx-2" src="assets/Frame 33589.png" alt="" />
                              </button>
                              <a href="#"><img src="assets/Vectora.png" alt="" /></a>
                            </div>

                            <div class="announce-postm-2 me-4">
                              <button type="button" class="btn announce-b1 px-3 mx-2">
                                Cancel
                              </button>
                              <button type="button" class="btn announce-b2 px-3">Post</button>
                            </div>
                          </div>             -->
                    </div>
                </form>
                  </div>
                </div>
              </div>

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
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
