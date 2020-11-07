<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title></title>
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
    <!-- Form -->
    <form  action="validation.php" method="post">
    <div class="login-box">
      <h1>Login</h1>
      <div class="textbox">
        <i class="fas fa-user"></i>
        <input type="text" name="email" placeholder="User Email">
      </div>
    
      <div class="textbox">
        <i class="fas fa-lock"></i>
        <input type="password" name="pass" placeholder="Password">
      </div>
    
      <input type="submit" name="login" class="btn" value="Sign in">
      </form>
      <p class="regis">Not a member?
      <a href="signup.php">   Sign up</a>
      </p>
    </div>
      </body>
    </html>