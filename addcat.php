<?php
include('admin.php');
include('config.php');
error_reporting(0);

if (isset($_POST['submit'])){
    $cname = $_POST['cname'];
    $cdiscription = $_POST['cdiscription'];

    $sql = "INSERT INTO addcat (cname, cdiscription)
            VALUES('$cname', '$cdiscription')";
    $result = mysqli_query($conn, $sql);
    if ($result){
        echo "<script>alert('New Crime Category Added!')</script>";
        $cname = "";
        $cdiscription = "";

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
    <span class="text" style='font-size:24pt;'>CRIME CATEGORY > <b>ADD CATEGORY</b></span>

    <div style="background: linear-gradient(120deg,#2980b9, #8e44ad);">

    <br><br>
    <div style='width:1000px;margin:auto;'>
    <div>
    <form action="" method="POST">
                <table class="table table-dark table-hover">
                <tr>
                    <th colspan=4>ADD POICE</th>
                </tr>
                <tr>
                    <td>Category Name</td>
                    <td><input type='text' name="cname" value='' class='form-control' required></td>
                </tr>
                <tr>
                    <td>Category Discription</td>
                    <td colspan=3><textarea rows=2 cols=30 name="cdiscription" class='form-control' required></textarea></td>
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