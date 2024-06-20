<?php
ob_start();
include('police.php');
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
    <span class="text" style='font-size:24pt;'> <b>FIR FORM</b></span>
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
                <td colspan='2'><?php echo $rows[7]; ?></td>
                <td><b>Pupose of FIR</b></td>
                <td colspan='2'><?php echo $rows[9]; ?></td>             
            </tr>
            <tr>
                     <td><b>Relation with Accused</b></td>
                <td colspan='2'><?php echo $rows[8]; ?></td>
                <td><b>Date of FIR</b></td>
                <td colspan='2'><?php echo $rows[11]; ?></td>              
            </tr>
            <tr>
                <td><b>Order Final Status</b></td>  
                <td><?php if($rows[12]==1) 
                    echo "Approved"; 
                    else if($rows[12]==2) echo "Rejected";
                    else
                    echo "Requested"; 
                ?></td>
                <td><b>Police Remark</b></td>  
                <td><?php echo $rows[13]; ?></td>
                <td><b>Police Remark Date</b></td>  
                <td><?php echo $rows[14]; ?></td>
            </tr>
            <tr>
                <!-- Button trigger modal -->
                <td colspan=6 align="center"><button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">TAKE ACTION</button></td>
                <!-- <td ><input type="submit"  class='btn btn-secondary' onclick='a1()'></td> -->
            </tr>
            </table>
        </form>
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div style="background: #000000;" class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Take Action</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
        <form action="" method="POST">
                        
                        <table class="table table-dark table-hover">
                        <tr>
                            <td>Remark : <input type="hidden" name="id" value="<?php echo $_REQUEST["b"]; ?>"> 
                            <input type="hidden" name="id1" value="<?php echo $_REQUEST["a"]; ?>"> </td>
                            <td><textarea rows=7 cols=30 name="remark" class='form-control'></textarea></td>

                            </td>
                        </tr>
                        <tr>
                            <td>Status : </td>
                            <td>
                                <select class='form-control' name="status">
                                    <option>Select Status</option>
                                    <option value='1'>Approved</option>
                                    <option value='2'>Cancelled</option>
                                </select>
                            </td>
                        </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="update">Update</button>
                    </div>
</form>                    </div>
                </div>
                </div>
                <?php
    //UPDATE QUERY
    if(isset($_REQUEST["update"]))
    {
        $remark=$_POST["remark"];
        $status=$_POST["status"];
        $id=$_POST["id"];

        $id1=$_POST["id1"];
        $date=date('Y-m-d');
        $result=mysqli_query($conn,"update ufirform set remark='$remark', status='$status',remarkdate='$date' where id='$id'");

        if($result)

        header("location:firaction.php?a=$id1&b=$id");
        else
        echo mysqli_error($conn);
    }
    ?>
        <br>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>

<?php
include('footer.php');
?>
