<?php
include 'config.php';
$id=$_REQUEST["a"];
$result=mysqli_query($conn,"delete from addcrimi
        where id='$id'");
        if($result)
            header("location:managecrimi.php");
            else
            echo mysqli_error($conn);
?>