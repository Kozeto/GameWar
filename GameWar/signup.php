<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
   
    <link rel="stylesheet" href="css/signup.css">
  </head>
  <body>
<div class="login-box">
  <h1>Sign Up</h1>
  <!-- Form -->
  <form class="text-center" style="color: #757575;" action="register.php" method="post">
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="firstname" placeholder="First Name">
  </div>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="lastname" placeholder="Last Name">
  </div>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="email" name="email"placeholder="Email">
  </div>


  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" name="pass" placeholder="Password">
  </div>
  <div class="textbox">
    <i class="fas fa-user"></i>
    Avatar<input class="button" type="file" name="pic" placeholder="pro pic">
  </div>

  <input type="submit" class="btn" name="reg" value="Sign Up">
</div>
</form>
        <!-- Form -->
  </body>
</html>
