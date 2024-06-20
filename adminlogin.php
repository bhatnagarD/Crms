<?php
// connection.php is created for Admin DB connection
  require("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="logo-details">
          <a href='home.php'>
              <i class='bx bx-shield-quarter'></i></a>
    </div>
    <div class="center">
        <h1>ADMIN LOGIN</h1>
        <form method="post">
          <div class="txt_field">
            <input type="text" name="AdminName" required>
            <label>Username</label>
          </div>
          <div class="txt_field">
            <input type="password" name="AdminPassword" required>
            <label>Password</label>
          </div>
          <div class="pass">Forgot Password?</div>
          <input type="submit" value="Login" name="login">
        </form>
      </div>

<?php

if (isset($_POST['login']))
{
  $query="SELECT * FROM `admin_login` WHERE `Admin_Name`='$_POST[AdminName]' AND `Admin_Password`='$_POST[AdminPassword]'";
  $result=mysqli_query($conn,$query);
  if(mysqli_num_rows($result)==1)
  {
     session_start();
     $_SESSION['AdminLoginID']=$_POST['AdminName'];
     header("location: adashboard.php");
  }
  else{
    echo "<script>alert('Incorrect Password');</script>";
  }
}

?>
</body>
</html>