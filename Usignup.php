<?php

include 'config.php';

error_reporting(0);

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];

    $sql = "SELECT * FROM usignup WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if(!$result->num_rows > 0){
        $sql = "INSERT INTO usignup (username, email, password, mobile)
            VALUES('$username', '$email', '$password', '$mobile')";
    $result = mysqli_query($conn, $sql);
    if ($result){
        echo "<script>alert('Wow!! User Registered Successfully.')</script>";
        $username = "";
        $email = "";
        $password = "";
        $mobile = "";
    } else {
        echo "<script>alert('Opps! Something went wrong!!!')</script>";
    }
    }else {
       echo "<script>alert('Oops!! Email already exist.')</script>";
       $email = "";
    }
}

?>

<!--Starting HTML-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>USER REGISTRATION</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
    .center{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 400px;
  background: white;
  border-radius: 10px;
  box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
}
    .center h2{
  text-align: center;
  padding: 20px 0;
  border-bottom: 1px solid silver;
}
</style>
</head>
<body>
    <!--navbar START-->
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-lg-3 py-lg-2 shadow-lg sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="home.php">CRIME RECORD MANAGEMENT </a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="">USER REGISTRATION</a>
                </li>
            </ul>
            </div>
        </div>
        </nav> -->
    <!--navbar END-->

    <!--form START-->
    <div class='center'>
        <h2 align='center'>USER REGISTRATION</h2>
        <form action="" method="POST">
            <div class="txt_field">
            <input type="text" name="username" value="<?php echo $username;?>" required>
            <span></span>
            <label>Full name</label>
            </div>
            <div class="txt_field">
            <input type="email" name="email" value="<?php echo $email;?>"  required>
            <span></span>
            <label>Email-Id</label>
            </div>
            <div class="txt_field">
            <input type="password" name="password" value="<?php echo $password;?>"  required>
            <span></span>
            <label>Password</label>
            </div>
            <div class="txt_field">
            <input type="text" name="mobile" pattern="[6789][0-9]{9}" minlength="10" maxlength="10" value="<?php echo $mobile;?>"  required>
            <span></span>
            <label>Mobile</label>
            </div>
            <div class="pass">Forgot Password?</div>
            <input type="submit" name="submit" value="Register">
            <div class="signup_link">
            Have an account? <a href="userlogin.php">Login here!</a>
          </div>
        </form>
    </div>
    <!--form END-->
</body>
</html>