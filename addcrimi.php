<?php
include('police.php');
include('config.php');
error_reporting(0);

if (isset($_POST['submit'])){
    $pstation = $_POST['pstation'];
    $ctype = $_POST['ctype'];
    $cdate = $_POST['cdate'];
    $ctime = $_POST['ctime'];
    $prison = $_POST['prison'];
    $court = $_POST['court'];
    $pname = $_POST['pname'];
    $contact = $_POST['contact'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $zipcode = $_POST['zipcode'];

    $result=move_uploaded_file($_FILES["pp"] ["tmp_name"], "CrimiPhoto/".$_FILES["pp"]["name"]);
    $cphoto=$_FILES["pp"]["name"];

    $sql = "INSERT INTO addcrimi (pstation, ctype, cdate, ctime, prison, court, pname, contact, height, weight, dob, email, address, city, state, country, zipcode, photo)
            VALUES('$pstation', '$ctype', '$cdate', '$ctime', '$prison', '$court', '$pname', '$contact', '$height', '$weight', '$dob', '$email', '$address', '$city', '$state', '$country', '$zipcode', '$cphoto')";
    $result = mysqli_query($conn, $sql);
    if ($result){
        echo "<script>alert('New Criminal is added to the record!')</script>";
        $pstation = "";
        $ctype = "";
        $cdate = "";
        $ctime = "";
        $prison = "";
        $court = "";
        $pname = "";
        $contact = "";
        $height = "";
        $weight = "";
        $dob = "";
        $email = "";
        $address = "";
        $city = "";
        $state = "";
        $country = "";
        $zipcode = "";
        $photo = "";

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
    <span class="text" style='font-size:24pt;'>CRIMINAL > <b>ADD CRIMINALS</b></span>

    <div style="background: linear-gradient(120deg,#2980b9, #8e44ad);">

    <br><br>
    <div style='width:1000px;margin:auto;'>
    <div>
    <form action="" method="POST" enctype="multipart/form-data">
                <table class="table table-dark table-hover">
                <tr>
                    <th colspan=4>CRIMINAL DETAILS</th>
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
                    <td>Crime Type</td>
                    <td colspan=3>
                    <select class='form-control' name="ctype" required>
                        <option>Choose Crime Type</option>
                        <option value='Robbery'>Robbery</option>
                        <option value='Cyber Crime'>Cyber Crime</option>
                        <option value='Sexual/Violence Assault'>Sexual/Violence Assault</option>
                        <option value='Murder/Attempt to Murder'>Murder/Attempt to Murder</option>
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
                    <td>Crime Date</td><td><input type="date" name="cdate" class='form-control' required></td>
                    <td>Crime Time</td><td><input type="time" name="ctime" class='form-control' required></td>
                </tr>
                <tr>
                    <td>Select Prison</td>
                    <td>
                    <select class='form-control' name="prison" required>
                        <option>Select Prison</option>
                        <option value='Mandoli Prison'>Mandoli Prison</option>
                        <option value='Rohini Prison'>Rohini Prison</option>
                        <option value='Tihar Jail'>Tihar Jail</option>
                        <option value='Women Jail'>Women Jail</option>
                        <option value='Juvenile Home'>Juvenile Home</option>
                    </select>
                    </td>
                    <td>Select Court</td>
                    <td>
                    <select class='form-control' name="court" required>
                        <option>Select Court</option>
                        <option value='Delhi High Court'>Delhi High Court</option>
                        <option value='District Court Rohini'>District Court Rohini</option>
                        <option value='Tis Hazari Court'>Tis Hazari Court</option>
                        <option value='Patiala House Court'>Patiala House Court</option>
                        <option value='Supreme Court of India'>Supreme Court of India</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th colspan='4' align="left">PERSONAL DETAILS</th>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type='text' name="pname" value='' class='form-control' required></td>
                    <td>Contact Number</td>
                    <td><input type="text"  name="contact" value='' pattern="[6789][0-9]{9}" minlength="10" maxlength="10" class='form-control' required></td>
                </tr>
                <tr>
                    <td>Height</td>
                    <td><input type='number' name="height" value='' class='form-control' required></td>
                    <td>Weight</td>
                    <td><input type="text" name="weight" value='' class='form-control' required></td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td><input type="date" name="dob" value='' class='form-control' required></td>
                    <td>Email-ID</td>
                    <td><input type="email" name="email" value='' class='form-control'></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td colspan=3><textarea rows=2 cols=30 name="address" class='form-control' required></textarea></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><input type="text" name="city" value='' class='form-control' required></td>
                    <td>State</td>
                    <td><input type="text" name="state" value='' class='form-control' required></td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td><input type="text" name="country" value='' class='form-control' required></td>
                    <td>ZipCode</td>
                    <td><input type="number" name="zipcode" value='' class='form-control' reqired></td>
                </tr>
                <tr>
                    <td>Photo</td>
                    <td colspan=3><input type="file" name="pp" value='' class='form-control' required></td>
                </tr>
                <tr>
                    <td colspan="4" align="center"><input type="submit" name="submit" value="SUBMIT" class='btn btn-secondary'></td>
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