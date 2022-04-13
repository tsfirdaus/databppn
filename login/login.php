<?php 
session_start();
require '../config.php';
if (isset($_POST["login"])){


    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn,"SELECT * FROM administrator WHERE username = '$username'");

    //cek username
    if(mysqli_num_rows($result) === 1){
      //cek pass
      $row = mysqli_fetch_assoc($result);
      if ($password === $row["password"]){
        //set session
        $_SESSION["login"] = true;
        header('location: ../index.php');
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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Login Admin</title>
</head>

<body>
  <form class="box" action="" method="post">
    <h1>login admin</h1>
    <input type="text" name="username" placeholder="username">
    <input type="password" name="password" placeholder="password">
    <input type="submit" name="login" value="Verify">
  </form>
</body>

</html>