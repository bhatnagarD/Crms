<?php
ob_start();
session_start();
if(!isset( $_SESSION['username']))
    header("location:userlogin.php");


include('user.php');

?>
<html>
    <body>
    <div style='width:1458px;margin:left;background:#1d1b31;'>
        <div style="background: #1d1b31; color: #fff;">
        <i class='bx bx-menu' style='font-size:24pt;' ></i>
    <span class="text" style='font-size:24pt;'><b>WELCOME TO CRIME PORTAL !!! <?php echo $_SESSION['username'] ?></b></span>
    <div style="min-height:664px;background: linear-gradient(120deg,#2980b9, #8e44ad);">
    </body>
</div>
</div></div>
</html>

<?php

include('footer.php');

?>