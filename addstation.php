<?php
include('admin.php');
include('config.php');
error_reporting(0);

if (isset($_POST['submit'])){
    $pstation_name = $_POST['pstation_name'];
    $pstation_code = $_POST['pstation_code'];

    $sql = "INSERT INTO addstation (pstation_name, pstation_code)
            VALUES('$pstation_name', '$pstation_code')";
    $result = mysqli_query($conn, $sql);
    if ($result){
        echo "<script>alert('New Police Station Added!')</script>";
        $pstation_name = "";
        $pstation_code = "";

    } else {
        echo "<script>alert('Opps! Something went wrong!!!')</script>";
    }
}
?>

<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
    <div style="background: #1d1b31; color: #fff;" class='table-responsive'>
    <i class='bx bx-menu' style='font-size:24pt;' ></i>
    <span class="text" style='font-size:24pt;'>POLICE STATION > <b>ADD POLICE STATION</b></span>

    <div style="background: linear-gradient(120deg,#2980b9, #8e44ad);">

    <br><br>
    <div style='width:1000px;margin:auto;'>
    <div>
    <form action="" method="POST" enctype="multipart/form-data">
        <table class="table table-dark table-hover">           
            <tr>
                <td>Police Station Name</td><td><input type="text" name="pstation_name" class='form-control' required></td>
            </tr>
            <tr>
                <td>Police station Code</td><td><input type="text" name="pstation_code" class='form-control' required></td>
            </tr>
            <tr>
                    <td colspan="2" align="center"><input type="submit" name="submit" value="ADD" class='btn btn-secondary'></td>
            </tr>
        </table>
    </form> 
    </div>
    <br>
    </body>
</html>

<?php
include 'footer.php';
?>