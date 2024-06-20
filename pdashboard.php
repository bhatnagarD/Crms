<?php
ob_start();
session_start();
if(!isset( $_SESSION['pname']))
    header("location:policelogin.php");

include('police.php');
?> 

<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
    <div style="background: #1d1b31; color: #fff;" class='table-responsive'>
    <i class='bx bx-menu' style='font-size:24pt;' ></i>
    <span class="text" style='font-size:24pt;'> <b>WELCOME TO DELHI POLICE PORTAL - <?php echo $_SESSION['pname'] ?></b></span>
    <div style="min-height:664px;background: linear-gradient(120deg,#2980b9, #8e44ad);">
    <br>
    <br><br>
    <br>
    <div style='width:1300px;margin:auto;'>
        <table class="table table-dark table-hover">
            <div class="container overflow-hidden">
            <div class="row gy-5">
                <div class="col-2">
                <div class="p-3 border bg-dark">Total New FIR : 4</div>
                </div>
                <div class="col-3">
                <div class="p-3 border bg-dark">Total Approved FIR : 2</div>
                </div>
                <br>
                <div class="col-3">
                <div class="p-3 border bg-dark">FIR send for Chargesheet : 4</div>
                </div>
                <div class="col-2">
                <div class="p-3 border bg-dark">Total Criminals : 1</div>
                </div>
            </div>
            </div>
            <!-- <tr>
                <td>
                <div class="box">
                    <div class="right-side">
                    <div class="box-topic">Total New FIR</div>
                    <div class="number">0</div>
                    <div class="indicator"></div>
                    </div>
                </div>
                </td>
                <td>
                <div class="box">
                    <div class="right-side">
                    <div class="box-topic">Total Approved FIR</div>
                    <div class="number">0</div>
                    <div class="indicator"></div>
                    </div>
                </div> 
                </td>
            </tr>

            <tr>
                <td>
                <div class="box">
                    <div class="right-side">
                    <div class="box-topic">FIR send for Chargesheet</div>
                    <div class="number">0</div>
                    <div class="indicator"></div>
                    </div>
                </div> 
                </td>
                <td>
                <div class="box">
                    <div class="right-side">
                    <div class="box-topic">Total Completed Chargesheet</div>
                    <div class="number">0</div>
                    <div class="indicator"></div>
                    </div>
                </div> 
                </td>
            </tr>

            <tr>
                <td>
                <div class="box">
                    <div class="right-side">
                    <div class="box-topic">Total Criminals</div>
                    <div class="number">0</div>
                    <div class="indicator"></div>
                    </div>
                </div> 
                </td>
                <td>
                <div class="box">
                    <div class="right-side">
                    <div class="box-topic">Total Rejected FIR</div>
                    <div class="number">0</div>
                    <div class="indicator"></div>
                    </div>
                </div> 
                </td>
            </tr> -->
        </table>
    </body>
</html>


<?php
include('footer.php');
?>