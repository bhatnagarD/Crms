<?php
ob_start();
include('user.php');
include('config.php');
$id=$_REQUEST["a"];

$fid=$_REQUEST["b"];
$r=mysqli_query($conn,"select * from usignup where id='$id'");
$row=mysqli_fetch_row($r);

$rr=mysqli_query($conn,"select * from ufirform where id='$fid'");
$rows=mysqli_fetch_row($rr);

?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
    <div style="background: #1d1b31; color: #fff;" class='table-responsive'>
    <i class='bx bx-menu' style='font-size:24pt;' ></i>
    <span class="text" style='font-size:24pt;'> <b>CHARGESHEET DETAILS</b></span>
    <div style="min-height:664px;background: linear-gradient(120deg,#2980b9, #8e44ad);">

    
    <br><br>
    <div style='width:1345px;margin:auto;'>
            <table class="table table-dark table-hover">
            <tr><td align='center' colspan=6><b>FIR Number : </b><?php echo $row[0]; ?></td></tr>
            <tr><td colspan=6><b>Complainer Details : </b></td></tr>
            <tr>
                <td><b>Name</b></td>
                <td><?php echo $row[1]; ?></td>
                <td><b>Mobile Number</b></td>
                <td><?php echo $row[4]; ?></td>
                <td><b>Email</b></td>
                <td><?php echo $row[2]; ?></td>
            </tr>
            <tr><td colspan=6><b>FIR Details : </b></td></tr>
            <tr>
                <td><b>Police Station</b></td>
                <td><?php echo $rows[1]; ?></td>
                <td><b>Crime type</b></td>
                <td><?php echo $rows[2]; ?></td>
                <td><b>Name of accused</b></td>  
                <td><?php echo $rows[3]; ?></td>              
            </tr>
            <tr>
                <td><b>Name of Applicant</b></td>
                <td><?php echo $rows[4]; ?></td>
                <td><b>Parentage of Applicant</b></td>
                <td><?php echo $rows[5]; ?></td>
                <td><b>Contact Number</b></td>  
                <td><?php echo $rows[6]; ?></td>              
            </tr>
            <tr>
                <td><b>Address</b></td>
                <td colspan='1'><?php echo $rows[7]; ?></td>
                <td><b>Pupose of FIR</b></td>
                <td colspan='3'><?php echo $rows[9]; ?></td>             
            </tr>
            <tr>
                     <td><b>Relation with Accused</b></td>
                <td colspan='1'><?php echo $rows[8]; ?></td>
                <td><b>Date of FIR</b></td>
                <td colspan='3'><?php echo $rows[11]; ?></td>              
            </tr>
            <tr>
                <td><b>Order Final Status</b></td>  
                <td><?php   if($rows[15]==1) 
                    echo "Chargesheet Completed"; 
                    else
                    echo "Your FIR has been ready for making Chargesheet";  ?></td>
                <td colspan=3><b>Police Remark</b></td>  
                <td><?php echo $rows[19]; ?></td>
            </tr>
            <tr><td colspan=6><b>Chargesheet Details : </b></td></tr>
            <tr>
                <td><b>Section of Law</b></td>
                <td colspan='1'><?php echo $rows[16]; ?></td>
                <td><b>Name of Investigation Officer</b></td>
                <td colspan='3'><?php echo $rows[17]; ?></td>
            </tr>
            <tr>
                <td><b>Investigation Detail</b></td>
                <td colspan='5'><?php echo $rows[18]; ?></td>
            </tr>
            </table>
            <br>
            </div>
            </div>
            </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </div>
    </body>
</html>

<?php
include('footer.php');
?>
