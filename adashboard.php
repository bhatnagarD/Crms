<?php
ob_start();
session_start();
if(!isset( $_SESSION['AdminLoginID']))
    header("location:adminlogin.php");
include('admin.php');
?>

<html>
    <body>
    <div style="background: #1d1b31; color: #fff;" class='table-responsive'>
    <i class='bx bx-menu' style='font-size:24pt;' ></i>
    <span class="text" style='font-size:24pt;'> <b>WELCOME TO ADMIN PANEL - <?php echo $_SESSION['AdminLoginID'] ?></b></span>
    <div style="min-height:664px;background: linear-gradient(120deg,#2980b9, #8e44ad);">
    <div style='width:1458px;margin:left;'>
    </body>
</html>

<?php
include('footer.php');
?>