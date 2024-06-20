<?php
session_start();
ob_start();include "config.php"; 


error_reporting(0);

if (isset($_POST['submit'])){
  $pid = $_POST['pid'];
  $pass = $_POST['pass'];
  $sql="SELECT * FROM addpolice WHERE pid='$pid' AND pass='$pass'";
  $result=mysqli_query($conn,$sql);
    if($result->num_rows>0){
    $row=mysqli_fetch_assoc($result);
    $_SESSION['pname']=$row['pname'];
    header("Location:pdashboard.php");
  }else{
    echo "<script>alert('Woops!! Police ID or Password is Wrong.')</script>";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POLICE LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="center">
        <h1>POLICE LOGIN</h1>
        <form action="" method="post">
          <div class="txt_field">
            <input type="text" name="pid" required>
            <span></span>
            <label>Police-Id</label>
          </div>
          <div class="txt_field">
            <input type="password" name="pass" required>
            <span></span>
            <label>Password</label>
          </div>
          <div class="pass">Forgot Password?</div>
          <input type="submit" value="Login" name="submit">
        </form>
      </div>
</body>
</html>