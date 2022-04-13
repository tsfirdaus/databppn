<?php 
require '../../config.php';
if (isset($_POST["login"])){


    $username = $_POST["username"];
    $password = $_POST["password"];

    mysqli_query($kon,"SELECT * FROM user WHERE username = '$username'");


    //cek username
    if(mysqli_num_rows($Result) === 1){
      //cek pass
      $row = mysqli_fe
    }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Admin</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass"></div>
        <input type="submit" value="Login">
        <div class="signup_link">
          <a href="#"></a>
        </div>
      </form>
    </div>

  </body>
</html>
