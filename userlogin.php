<?php
include "config.php";
session_start();
error_reporting(0);
if (isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql="SELECT * FROM usignup WHERE email='$email' AND password='$password'";
  $result=mysqli_query($conn,$sql);
  if($result->num_rows>0){
    $row=mysqli_fetch_assoc($result);
    $_SESSION['useridd']=$row["id"];
    $_SESSION['username']=$row['username'];
    header("Location:udashboard.php");
  }else{
    echo "<script>alert('Woops!! Email or Password is Wrong.')</script>";
    $email="";
    $password="";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!-- <nav><a href="index.php"><i class='bx bxs-home-alt-2'></i></a></nav> -->
    <div class="center">
        <h1>USER LOGIN</h1>
        <form action="" method="post">
          <div class="txt_field">
            <input type="email" name="email" value="<?php echo $email;?>" required>
            <span></span>
            <label>Email-Id</label>
          </div>
          <div class="txt_field">
            <input type="password" name="password" value="<?php echo $password;?>" required>
            <span></span>
            <label>Password</label>
          </div>
          <div class="pass">Forgot Password?</div>
          <input type="submit" name="submit" value="Login">
          <div class="signup_link">
            Not a member? <a href="Usignup.php">Sign up!</a>
          </div>
        </form>
      </div>
</body>
</html>