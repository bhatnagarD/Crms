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

        <span class="logo_name">CRMS <sub>Admin</sub></span>
  </div>
    <ul class="nav-links">
      <li>
        <a href="adashboard.php">
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
          <i class='bx bxs-building'></i>
            <span class="link_name">Police Station</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
        <li><a class="link_name" href="#">Police Station</a></li>
          <li><a href="addstation.php">Add Police Station</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
          <i class='bx bx-street-view'></i>
            <span class="link_name">Police</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
        <li><a class="link_name" href="#">Police</a></li>
          <li><a href="addpolice.php">Add Police</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
          <i class='bx bxs-category-alt'></i>
            <span class="link_name">Crime Category</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
        <li><a class="link_name" href="#">Crime Category</a></li>
          <li><a href="addcat.php">Add Category</a></li>
        </ul>
      </li>
      <li>
        <a href="viewcrimi.php">
        <i class='bx bx-show-alt'></i>
          <span class="link_name">View Criminals</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="viewcrimi.php">View Criminals</a></li>
        </ul>
      </li>
      <li>
        <a href="viewfir.php">
        <i class='bx bxl-firebase'></i>
          <span class="link_name">View FIR</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="viewfir.php">View FIR</a></li>
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