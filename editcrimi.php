<?php
ob_start();
include 'police.php';
?>

<html>
    <head>
        <script>
            function a1(){
                alert("Record Updated Successfully!")
            }
        </script>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
    <div style="background: #1d1b31; color: #fff;" class='table-responsive'>
    <i class='bx bx-menu' style='font-size:24pt;' ></i>
    <span class="text" style='font-size:24pt;'><b>EDIT CRIMINAL</b></span>

    <div style="background: linear-gradient(120deg,#2980b9, #8e44ad);">

    <br><br>
    <div style='width:900px;margin:auto;'>
    <div>
    
    <?php
    include 'config.php';
    $id=$_REQUEST["a"];
    $result=mysqli_query($conn,"select * from addcrimi where id='$id'");
    $rows=mysqli_fetch_row($result);
    ?>

    <form action="" method="post" enctype="multipart/form-data">
    <table class="table table-dark table-hover">
                <tr>
                    <th colspan=4>CRIMINAL DETAILS</th>
                </tr>
                <tr>
                    <td colspan=4><input type="hidden" value='<?php echo $rows[0];?>' name='id'></td>
                </tr>
                <tr>
                    <td>Police Station</td>
                    <td colspan=3>
                    <select class='form-control' name="pstation">
                        <option value="<?php echo $rows[1];?>"><?php echo $rows[1];?></option>
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
                    <select class='form-control' name="ctype">
                        <option value="<?php echo $rows[2];?>"><?php echo $rows[2];?></option>
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
                    <td>Crime Date</td><td><input type="date" name="cdate" class='form-control' value="<?php echo $rows[3];?>"></td>
                    <td>Crime Time</td><td><input type="time" name="ctime" class='form-control' value="<?php echo $rows[4];?>"></td>
                </tr>
                <tr>
                    <td>Select Prison</td>
                    <td>
                    <select class='form-control' name="prison">
                    <option value="<?php echo $rows[5];?>"><?php echo $rows[5];?></option>
                        <option value='Mandoli Prison'>Mandoli Prison</option>
                        <option value='Rohini Prison'>Rohini Prison</option>
                        <option value='Tihar Jail'>Tihar Jail</option>
                        <option value='Women Jail'>Women Jail</option>
                        <option value='Juvenile Home'>Juvenile Home</option>
                    </select>
                    </td>
                    <td>Select Court</td>
                    <td>
                    <select class='form-control' name="court">
                    <option value="<?php echo $rows[6];?>"><?php echo $rows[6];?></option>
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
                    <td><input type='text' name="pname"  class='form-control' value="<?php echo $rows[7];?>"></td>
                    <td>Contact Number</td>
                    <td><input type="text"  name="contact"  pattern="[6789][0-9]{9}" minlength="10" maxlength="10" class='form-control' value="<?php echo $rows[8];?>"></td>
                </tr>
                <tr>
                    <td>Height</td>
                    <td><input type='number' name="height" class='form-control' value="<?php echo $rows[9];?>"></td>
                    <td>Weight</td>
                    <td><input type="text" name="weight" class='form-control' value="<?php echo $rows[10];?>"></td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td><input type="date" name="dob" class='form-control' value="<?php echo $rows[11];?>"></td>
                    <td>Email-ID</td>
                    <td><input type="email" name="email"  class='form-control' value="<?php echo $rows[12];?>"></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td colspan=3><textarea rows=2 cols=30 name="address" class='form-control' value=""><?php echo $rows[13];?></textarea></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><input type="text" name="city" class='form-control' value="<?php echo $rows[14];?>"></td>
                    <td>State</td>
                    <td><input type="text" name="state" class='form-control' value="<?php echo $rows[15];?>"></td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td><input type="text" name="country" class='form-control' value="<?php echo $rows[16];?>"></td>
                    <td>ZipCode</td>
                    <td><input type="number" name="zipcode" class='form-control' value="<?php echo $rows[17];?>"></td>
                </tr>
                <tr>
                    <td>Photo</td>
                    <td colspan=3><input type="file" name="pp" class='form-control' value=""><?php echo $rows[18];?></td>
                </tr>
                <tr>
                    <td colspan="4" align="center"><input type="submit" value="UPDATE" 
                    name="sub" class='btn btn-secondary' ></td>
                </tr>
            </table>
        </form>
        
    <?php
    //UPDATE QUERY
    if(isset($_REQUEST["sub"]))
    {
        $id=$_POST["id"];
        $pstation=$_POST["pstation"];
        $ctype=$_POST["ctype"];
        $cdate=$_POST["cdate"];
        $ctime=$_POST["ctime"];
        $prison=$_POST["prison"];
        $court=$_POST["court"];
        $pname=$_POST["pname"];
        $contact=$_POST["contact"];
        $height=$_POST["height"];
        $weight=$_POST["weight"];
        $dob=$_POST["dob"];
        $email=$_POST["email"];
        $address=$_POST["address"];
        $city=$_POST["city"];
        $state=$_POST["state"];
        $country=$_POST["country"];
        $zipcode=$_POST["zipcode"];
        $pp=$_FILES["pp"]["name"];

        if($_FILES["pp"]["name"]==""){
        $result=mysqli_query($conn,"update addcrimi set pstation='$pstation', ctype='$ctype', cdate='$cdate', 
        ctime='$ctime', prison='$prison', court='$court',
         pname='$pname', contact='$contact', height='$height', weight='$weight',
          dob='$dob', email='$email', address='$address', city='$city', state='$state', country='$country',
           zipcode='$zipcode' where id='$id'");
        
        }
        else
        {
            $result=mysqli_query($conn,"update addcrimi set pstation='$pstation', ctype='$ctype', cdate='$cdate', 
            ctime='$ctime', prison='$prison', court='$court',
             pname='$pname', contact='$contact', height='$height', weight='$weight',
              dob='$dob', email='$email', address='$address', city='$city', state='$state', country='$country',
               zipcode='$zipcode', photo='$pp' where id='$id'");
            
               move_uploaded_file($_FILES["pp"]["tmp_name"],"CrimiPhoto/".$_FILES["pp"]["name"]);
               
        }
           if($result)

            header("location:managecrimi.php");
            else
            echo mysqli_error($conn);
    }
    ?>
    </div>
   <br>
    </body>
</html>

<?php
include 'footer.php';
?>