<?php
session_start();
    include 'config.php';
    include('user.php');
    $id=$_SESSION["useridd"];
    $result=mysqli_query($conn,"Select * from ufirform where userid='$id'");
?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    </head>
    <body>
    <div style="background: #1d1b31; color: #fff;">
    <i class='bx bx-menu' style='font-size:24pt;' ></i>
    <span class="text" style='font-size:24pt;'> <b>FIR HISTORY</b></span>
    <div style="min-height:664px;background: linear-gradient(120deg,#2980b9, #8e44ad);">
    <br><br>
    <div style='width:900px;margin:auto;'>
        <table class="table table-dark table-hover">
        <thead>
            <tr>
            <th scope="col">FIR no.</th>
            <th scope="col">Name</th>
            <th scope="col">Mobile number</th>
            <th scope="col">Email</th>
            <th scope="col">FIR date</th>
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
            <td><?php   if($row[12]==1) 
                    echo "Approved"; 
                    else if($row[12]==2) echo "Rejected";
                    else
                    echo "Requested";  ?></td>
            <td align='center'><a href="firhistoryaction.php?a=<?php echo $row[10] ?>&b=<?php echo $row[0];?>"><i class="bi bi-eye-fill"></i></a></td>
        </tr>
    </tbody>
    <?php
        }
    ?>
    </table>
    </body>
</html>
<?php
include('footer.php');
?>