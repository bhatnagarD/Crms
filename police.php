<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="dashboard.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar close">
  <div class="logo-details">
       <a href='index.php'>
          <i class='bx bx-shield-quarter'></i></a>

        <span class="logo_name">CRMS <sub>Police</sub></span>
  </div>
    <ul class="nav-links">
      <li>
        <a href="pdashboard.php">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Dashboard</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
          <i class='bx bxs-book-content'></i>
            <span class="link_name">Criminal</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Criminal</a></li>
          <li><a href="addcrimi.php">Add Criminal</a></li>
          <li><a href="managecrimi.php">Manage Criminal</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
          <i class='bx bxl-firebase'></i>
            <span class="link_name">FIR</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">FIR</a></li>
          <li><a href="newfir.php">New FIR</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-spreadsheet' ></i>
            <span class="link_name">Blotter</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Blotter</a></li>
          <li><a href="newcharge.php">New Chargesheet</a></li>
          </ul>
      </li>
      <li>
        <a href="logout.php">
            <i class='bx bx-log-out-circle' ></i>
          <span class="link_name">Log Out</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="index.php">Log Out</a></li>
        </ul>
      </li>
</ul>
  </div>
  <section class="home-section">
    <!-- <div class="home-content"> 
      <i class='bx bx-menu' ></i> -->