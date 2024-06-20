<?php
include 'police.php';
?>

<!-- Add editcrimi.php in ACTION & delete.php in DELETE -->
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
    <div style="background: #1d1b31; color: #fff;" class='table-responsive'>
    <i class='bx bx-menu' style='font-size:24pt;' ></i>
    <span class="text" style='font-size:24pt;'>CRIMINAL > <b>MANAGE CRIMINALS</b></span>
    <div style="min-height:664px;background: linear-gradient(120deg,#2980b9, #8e44ad);">

    <br><br>
    <div style='width:1000px;margin:auto;'>

    <?php
    include 'config.php';
    $result=mysqli_query($conn,"Select * from addcrimi");
    ?>

    <div>
    <table class="table table-dark table-hover">
    <thead>
    <tr>
        <th scope="col">S no.</th>
        <th scope="col">Police Station</th>
        <th scope="col">Criminals ID</th>
        <th scope="col">Name</th>
        <th scope="col">Mobile No.</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <?php
        $sno=1;
        while($row=mysqli_fetch_array($result)){
    ?>
    <tbody>
        <tr>
            <td><?php echo $sno; ?></td>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row[7]; ?></td>
            <td><?php echo $row[8]; ?></td>
            <td align='center'><?php echo "<a href='editcrimi.php?a=$row[0]'><i class='bx bxs-pencil'></i></a>&nbsp<a href='delete.php?a=$row[0]'><i class='bx bxs-eraser'></i></a>" ?></td>
        </tr>
    </tbody>
    
    <?php
        $sno++;
        }
    ?>
    </table>
    </div>
</body>
</html>

<?php
include 'footer.php';
?>