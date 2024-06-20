<?php
 session_start();
include('user.php');
include('config.php');
error_reporting(0);

if (isset($_POST['submit'])){
    $pstation = $_POST['pstation'];
    $ctype = $_POST['ctype'];
    $accname = $_POST['accname'];
    $appname = $_POST['appname'];
    $parentage = $_POST['parentage'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $relation = $_POST['relation'];
    $purposefir = $_POST['purposefir'];
    $uid=$_SESSION["useridd"];

    $sql = "INSERT INTO ufirform (pstation, ctype, accname, appname, parentage, contact, address, relation, purposefir,userid)
            VALUES('$pstation', '$ctype', '$accname', '$appname', '$parentage', '$contact', '$address', '$relation', '$purposefir','$uid')";
    $result = mysqli_query($conn, $sql);
    if ($result){
        echo "<script>alert('Your FIR request has been send to us.We will contact you soon!')</script>";
        $pstation = "";
        $ctype = "";
        $accname = "";
        $appname = "";
        $parentage = "";
        $contact = "";
        $address = "";
        $relation = "";
        $purposefir = "";

    } else {
        echo "<script>alert('Opps! Something went wrong!!!')</script>";
    }
}

?>

<html>
    <head>
        <!-- <script>
            function a1(){
                alert("Your FIR request has been send to us.We will contact you soon!")
            }
        </script> -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
    <div style="background: #1d1b31; color: #fff;" class='table-responsive'>
    <i class='bx bx-menu' style='font-size:24pt;' ></i>
    <span class="text" style='font-size:24pt;'> <b>FIR FORM</b></span>
    <div style="min-height:664px;background: linear-gradient(120deg,#2980b9, #8e44ad);">

    
    <br>
    <div style='width:900px;margin:auto;'>
        <form action="" method="POST">
            <table class="table table-dark table-hover">
                <tr>
                    <td>Police Station</td>
                    <td>
                    <select class='form-control' name="pstation" required>
                        <option>Police Station</option>
                        <option value='Vasant Vihar Police Station'>Vasant Vihar Police Station</option>
                        <option value='New Delhi Police Station'>New Delhi Police Station </option>
                        <option value='Rohini Police Station'>Rohini Police Station</option>
                        <option value='Chanakya Puri Police Station'>Chanakya Puri Police Station</option>
                        <option value='Dwarka Police Station'>Dwarka Police Station</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>Crime Type</td>
                    <td>
                    <select required class='form-control' name="ctype">
                        <option>Choose Crime Type</option>
                        <option value='Robbery'>Robbery</option>
                        <option value='Cyber Crime'>Cyber Crime</option>
                        <option value='Sexual/Violent Assault'>Sexual/Violent Assault</option>
                        <option value='Murder/Attempt to Murde'>Murder/Attempt to Murder</option>
                        <option value='Wildlife Trade'>Wildlife Trade</option>
                        <option value='Terrorism'>Terrorism</option>
                        <option value='Money Laundering'>Money Laundering</option>
                        <option value='Domestic Violence'>Domestic Violence</option>
                        <option value='Corruption'>Corruption</option>
                        <option value='Smuggling'>Smuggling</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>Name of Accused</td>
                    <td><input type='text' name="accname" class='form-control' value='' size=80 placeholder='Enter Accused Name'></td>
                </tr>
                <tr>
                    <th colspan='2'>APPLICANT's DETAILS (VICTIM)</th>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type='text' name="appname" value='' class='form-control' size=80 placeholder='Enter Victim Name' required></td>
                </tr>
                <tr>
                    <td>Parentage</td>
                    <td><input type='text' name="parentage" value='' size=80 class='form-control' placeholder='Enter your Parentage' required></td>
                </tr>
                <tr>
                    <td>Contact Number</td>
                    <td><input type="text"  name="contact" value='' pattern="[6789][0-9]{9}" class='form-control' minlength="10" maxlength="10" required></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><textarea rows=2 cols=30 name="address" required class='form-control'></textarea></td>
                </tr>
                <tr>
                    <td>Relation with accussed person</td>
                    <td><input type="text" name="relation" value='' class='form-control' size=80 placeholder='Enter your Relation with accused person' required></td>
                </tr>
                <tr>
                    <td>Purpose of applying copy of FIR</td>
                    <td><input type="text" name="purposefir" value='' size=80 class='form-control' placeholder='Enter the Pupose of applying for copy of FIR' required></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="submit" value="SUBMIT" class='btn btn-secondary'></td>
                </tr>
            </table>
        </form>
        <br>
    </body>
</html>

<?php
include('footer.php');
?>