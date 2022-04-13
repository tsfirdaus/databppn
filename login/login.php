<?php 
require 'config.php';
if (isset($_POST["login"])){


    $username = $_POST["username"];
    $password = $_POST["password"];

    mysqli_query($kon,"SELECT * FROM masuk WHERE username = '$username'");

    //cek username
    if(mysqli_num_rows($Result) === 1){
      //cek pass
      $row = mysqli_fetch_assoc($Result);
      if ($password === $row["password"]){
        header('location: ../../index.php');
        exit;
      }
      
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Login Admin</title>
</head>
<body>
  <form action="" method="post">
    <h1>login admin</h1>
    <input type="text" name="username" placeholder="username">
    <input type="password" name="username" placeholder="password">
    <input type="submit" name="login" value="login">
  </form>
</body>
</html>
