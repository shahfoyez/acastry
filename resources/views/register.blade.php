<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/Acastrysignin.css" />
    <!-- Bootstrap CSS -->

    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap"
      rel="stylesheet"
    />

    <script
      src="https://kit.fontawesome.com/e525419fbd.js"
      crossorigin="anonymous"
    ></script>
    <title>Acastrysignin</title>
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
  </style>

  <body>
    <!--header start-->
    <div class="header">
      <div class="logo">
        <img src="assets/logo1.png" alt="" />
      </div>
      <div class="bt">
        <p>Already a member?</p>
        <a href="/login">Sign In</a>
      </div>
    </div>
    <!--header end-->
    <!--container start-->
    <div class="foy-container container">
      <div class="image">
        <img src="assets/Animated Student GIF.gif" alt="" />
      </div>
      <form class="login-form" action="/createAccount" method="POST">
        @csrf
        <p class="title">Create an account</p>
        <div class="grp">
          <div class="input-group">
            <input name="name" required type="text" class="input" />
            <label class="placeholder">Name</label>
            @error('name')
                <span class="error-msg">{{ "*".$message }}</span>
            @enderror
            <!-- <span class="error-msg">*Name cannot be blank</span> -->
          </div>
          <div class="input-group">
            <input name="username" required type="text" class="input" />
            <label class="placeholder">User Name</label>
            @error('username')
                <span class="error-msg">{{ "*".$message }}</span>
            @enderror
            <!-- <span class="error-msg">*User Name cannot be blank</span> -->
          </div>
        </div>
        <div class="grp">
          <div class="input-group">
            <input required type="email" class="input" name="email" />
            <label class="placeholder">Email address</label>
            @error('email')
                <span class="error-msg">{{ "*".$message }}</span>
            @enderror
            <!-- <span class="error-msg">*Not a valid email</span> -->
          </div>
          <div class="input-group">
            <select name="role" class="input">
              <option hidden value="">Student</option>
              <option class="opcolor" value="student">Student</option>
              <option class="opcolor" value="teacher">Teacher</option>
              <option class="opcolor" value="industry">Industry</option>
            </select>
            <label class="placeholder"
              >Regester as <i class="fa-solid fa-angle-down"></i
            ></label>
            @error('role')
                <span class="error-msg">{{ "*".$message }}</span>
            @enderror
          </div>
        </div>
        <div class="grp">
          <div class="input-group">
            <input required type="Password" class="input" name="password" />
            <label class="placeholder">Password</label>
            @error('password')
                <span class="error-msg">{{ "*".$message }}</span>
            @enderror
            <!-- <span class="error-msg">*Password cannot be blank</span> -->
          </div>
          <div class="input-group">
            <input
              required
              type="Password"
              class="input"
              name="password_confirmation"
            />
            <label class="placeholder">Confirm Password</label>
            @error('password_confirmation')
                <span class="error-msg">{{ "*".$message }}</span>
            @enderror
            <!-- <span class="error-msg">*Passwords does not match</span> -->
          </div>
        </div>
        <button class="submit">Create account</button>
        <div class="row">
          <input class="cl" type="checkbox" />
          <span class="fsize"
            >Creating an account means you’re okay with our
            <a href="#">Terms of Service</a> and
            <a href="#">Privacy Policy</a>.</span
          >
        </div>
      </form>
    </div>
    <!--container end-->
  </body>
</html>
