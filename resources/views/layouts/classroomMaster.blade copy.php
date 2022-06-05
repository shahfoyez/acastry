    @include('shared.header')
    <body class="People-Page">
        @include('navbar.navbar')
        
        {{-- start:main content --}}
        @yield('content')
        {{-- end:main content --}}


        <!-- footer start -->
        @include('shared.footer')
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
                            var src= "{{ asset('assets/images/pdf.png') }}}";
                            var type= "PDF";
                            var class_name= "foy-thumbnail";
                        }else if(fileTypeSecond=='x-zip-compressed'){
                            var src= "{{asset('assets/images/zip.png')}}";
                            var type= "Zip";
                            var class_name= "foy-thumbnail";
                        }else if(fileTypeSecond=='msword'){
                            var src= "{{ asset('assets/doc.png') }}";
                            var type= "DOC";
                            var class_name= "foy-thumbnail";
                        }
                    }else if(fileTypeFirst == "video"){
                        var src= "{{ asset('assets/video.png') }}";
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
        <!-- Option 1: Public Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>