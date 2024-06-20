<?php
include 'police.php';
?>
<!-- chargeaction.php in ACTION and add table for TAKE ACTION (button)  -->
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
        h4{
            font-family:"serif";
        }
    </style>
    </head>
    <body>
    <div style="background: #1d1b31; color: #fff;" class='table-responsive'>
    <i class='bx bx-menu' style='font-size:24pt;' ></i>
    <span class="text" style='font-size:24pt;'>BLOTTER > <b>NEW CHARGESHEET</b></span>
    <div style="min-height:664px;background: linear-gradient(120deg,#2980b9, #8e44ad);">

    <br><br>
    <div style='width:1000px;margin:auto;'>

    <?php
    include 'config.php';
    $result=mysqli_query($conn,"Select * from ufirform");
    ?>
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <td colspan=7><h4>Approved FIR for Chargesheet</h4></td>
            </tr>
        </thead>
        <thead>
            <tr>
                <th scope="col">FIR no.</th>
                <th scope="col">Name(s)</th>
                <th scope="col">Mobile Number</th>
                <th scope="col">Email</th>
                <th scope="col">FIR Date</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

    <?php
        while($row=mysqli_fetch_array($result)){
    
            $rr=mysqli_query($conn,"select * from usignup where id='$row[10]'");
            $rows=mysqli_fetch_row($rr);
    ?>
    <tbody>
        <tr>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row[4]; ?></td>
            <td><?php echo $row[6]; ?></td>
            <td><?php echo $rows[2]; ?></td>
            <td><?php echo $row[11]; ?></td>
            <td><?php   if($row[15]==1) 
                    echo "Chargesheet Completed"; 
                    else
                    echo "Your FIR has been ready for making Chargesheet";  ?></td>
            <td align='center'><a href="chargeaction.php?a=<?php echo $rows[0] ?>&b=<?php echo $row[0];?>"><i class="bi bi-pencil-square"></i></a></td>
        </tr>
    </tbody>
    <?php
        }
    ?>
    </table>
    </body>
</html>

<?php
include 'footer.php';
?>