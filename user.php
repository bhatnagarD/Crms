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

        <span class="logo_name">CRMS <sub>User</sub></span>
  </div>
    <ul class="nav-links">
      <li>
        <a href="udashboard.php">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Dashboard</a></li>
        </ul>
      </li>
      <li>
        <a href="ufirform.php">
        <i class='bx bx-envelope'></i>
          <span class="link_name">FIR Form</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">FIR Form</a></li>
        </ul>
      </li>
      <li>
        <a href="ufirhistory.php">
        <i class='bx bx-history'></i>
          <span class="link_name">FIR History</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">FIR History</a></li>
        </ul>
      </li>
      <li>
        <a href="uchargesheet.php">
        <i class='bx bx-spreadsheet' ></i>
          <span class="link_name">Blotter</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Blotter</a></li>
        </ul>
      </li>
      <li>
        <a href="logout.php">
            <i class='bx bx-log-out-circle' ></i>
          <span class="link_name">Log Out</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="home.php">Log Out</a></li>
        </ul>
      </li>
</ul>
  </div>
  <section class="home-section" >
      
    
      <!-- <span class="text">DELHI POLICE PORTAL</span>
    </div>
  </section> 
  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>
</body>
</html> -->