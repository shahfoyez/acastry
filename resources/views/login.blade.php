<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/acastrysignup.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/e525419fbd.js" crossorigin="anonymous"></script>
    <title>Acastrysignup</title>
</head>
    <style>
        .input.error input {
        border: 1px solid #fa1515;
        }
        .error-msg {
        color: red;
        font-family: "Poppins";
        font-size: 14px;
        }
        .alert {
            padding: 15px;
            background-color: #fb6a5f;
            color: white;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover {
            color: black;
        }
    </style>
<body>
    <!--header start-->
    <div class="header">
        <div class="logo">
        <img src="assets/logo1.png" alt="" />
        </div>
        <div class="bt">
        <p>Not a member?</p>
        <a href="/register">Sign up now</a>
        </div>
    </div>
    <!--header end-->
    <!--container start-->
    <div class="container">
        <div class="image">
        <img id="image-img" src="assets/a.png" alt="" />
        <div class="img-title">
            <span class="im-title1"
            >Open Classroom for Your<span class="im-title2"> Effective Teaching!</span>
                </span
            ></span
            >
            <div class="im-p">
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy text
                ever since the 1500s, when an unknown printer took a galley of type
                and scrambled it to make a type specimen book.
            </p>
            </div>

            <div class="im-txt">
            <div class="im">
                <img src="assets/Male.png" alt="" />
                <img src="assets/Male1.png" alt="" />
                <img src="assets/Female2.png" alt="" />
                <img src="assets/Female3.png" alt="" />
            </div>
            <div class="txt">
                <p>3k+ Lorem Ipsum is simply dummy text of the printing.</p>
            </div>
            </div>
        </div>
        </div>
        <form class="login-form" method="POST" action="/session">
            @csrf
            <p class="title">Sign in</p>
            <div class="grp">
                @error('error')
                <div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    {{ $message }}
                </div>
                @enderror
                <div class="input-group">
                    <input required type="email" class="input" name="email" />
                    <label class="placeholder">Email address</label>
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="input-group">
                    <input name="password" required type="Password" class="input" id="myInput" />
                    <label class="placeholder">Password</label>
                    <span class="eye" onclick="myFunction()">
                        <i id="hide1" class="fa-solid fa-eye"></i>
                        <i id="hide2" class="fa-solid fa-eye-slash"></i>
                    </span>
                </div>
                <div class="row">
                    <div class="row-left">
                        <input class="cl" type="checkbox" />
                        <span class="fsize">Remember me</span>
                    </div>
                    <a href="#">Forgot password?</a>
                </div>
                <button class="submit">Sign in</button>
                <span class="fsize">Already have an account? <a href="#">Log In</a></span>

                <div class="or">
                    <span class="line"></span>
                    <span> or </span>
                    <span class="line"></span>
                </div>

                <a class="glink" href="">
                    <img src="assets/google.png" alt="" /> Sign up with Google
                </a>
            </div>
        </form>
    </div>
    <!--container end-->
<script>
    function myFunction() {
        var x = document.getElementById("myInput");
        var y = document.getElementById("hide1");
        var z = document.getElementById("hide2");

        if (x.type === "password") {
            x.type = "text";
            y.style.display = "block";
            z.style.display = "none";
        } else {
            x.type = "password";
            y.style.display = "none";
            z.style.display = "block";
        }
    }
</script>
</body>
</html>
