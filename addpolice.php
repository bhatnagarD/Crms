<?php
include('admin.php');
include('config.php');
error_reporting(0);

if (isset($_POST['submit'])){
    $pstation = $_POST['pstation'];
    $pid = $_POST['pid'];
    $pname = $_POST['pname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $pass = $_POST['pass'];
    $doj = $_POST['doj'];

    $sql = "INSERT INTO addpolice (pstation, pid, pname, email, contact, address, pass, doj)
            VALUES('$pstation', '$pid', '$pname', '$email', '$contact', '$address', '$pass', '$doj')";
    $result = mysqli_query($conn, $sql);
    if ($result){
        echo "<script>alert('New Police Added!')</script>";
        $pstation = "";
        $pid = "";
        $pname = "";
        $email = "";
        $contact = "";
        $address = "";
        $pass = "";
        $doj = "";

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
    <span class="text" style='font-size:24pt;'>POLICE > <b>ADD POLICE</b></span>

    <div style="background: linear-gradient(120deg,#2980b9, #8e44ad);">

    <br>
    <div style='width:1000px;margin:auto;'>
    <div>
    <form action="" method="POST">
                <table class="table table-dark table-hover">
                <tr>
                    <th colspan=4>ADD POICE</th>
                </tr>
                <tr>
                    <td>Police Station</td>
                    <td colspan=3>
                    <select class='form-control' name="pstation" required>
                        <option>Police Station</option>
                        <option value='Vasant Vihar Police Station'>Vasant Vihar Police Station</option>
                        <option value='New Delhi Police Station'>New Delhi Police Station</option>
                        <option value='Rohini Police Station'>Rohini Police Station</option>
                        <option value='Chanakya Puri Police Station'>Chanakya Puri Police Station</option>
                        <option value='Dwarka Police Station'>Dwarka Police Station</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>Police ID</td><td><input type="text" name="pid" class='form-control' required></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type='text' name="pname" value='' class='form-control' required></td>
                </tr>
                <tr>
                    <td>Email-ID</td>
                    <td><input type="email" name="email" value='' class='form-control'></td>
                </tr>
                <tr>
                    <td>Contact Number</td>
                    <td><input type="text"  name="contact" value='' pattern="[6789][0-9]{9}" minlength="10" maxlength="10" class='form-control' required></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td colspan=3><textarea rows=2 cols=30 name="address" class='form-control' required></textarea></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="pass" value='' class='form-control'></td>
                </tr>
                <tr>
                    <td>Joining Date</td>
                    <td><input type="date" name="doj" value='' class='form-control'></td>
                </tr>
                <tr>
                    <td colspan="4" align="center"><input type="submit" name="submit" value="ADD" class='btn btn-secondary'></td>
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