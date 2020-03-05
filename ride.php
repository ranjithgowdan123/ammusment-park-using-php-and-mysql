<?php
session_start();
if(!isset($_SESSION['user']))
{
  header('location:login.php');
}
$server="localhost";
$user="root";
$pass ="";
$dbname="project";
$conn = mysqli_connect($server,$user,$pass,$dbname);
if($conn->connect_error)
{
  die("connc failed".$conn->connect_error);
}

$sql = "SELECT KIOSK.KIOSK_ID,KIOSK.CONTRACT,MENU.ITEM_NAME,MENU.PRICE,STAFF.STAFF_ID,STAFF.NAME FROM KIOSK INNER JOIN MENU ON KIOSK.KIOSK_ID = MENU.KIOSK_ID INNER JOIN MAINTAINS ON KIOSK.KIOSK_ID = MAINTAINS.KIOSK_ID INNER JOIN STAFF ON MAINTAINS.STAFF_ID=STAFF.STAFF_ID";

//$result = $conn->query($sql);
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<script type="text/javascript">';
echo ' alert('.$row["KIOSK_ID"].')';  //not showing an alert box.
echo '</script>';
    }
} else {
    echo "0 results";
}

$sql1 = "SELECT RIDE.RIDE_ID,RIDE.RIDE_NAME,STAFF.STAFF_ID,STAFF.NAME FROM RIDE INNER JOIN MANAGES ON RIDE.RIDE_ID = MANAGES.RIDE_ID INNER JOIN STAFF ON MANAGES.STAFF_ID=STAFF.STAFF_ID";

$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) {
        echo '<script type="text/javascript">';
echo ' alert('.$row["RIDE_ID"].')';  //not showing an alert box.
echo '</script>';
    }
} else {
    echo "0 results";
}
?>

<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.7.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.7.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/amusement-text-122x100.png" type="image/x-icon">
  <meta name="description" content="Site Generator Description">
  <title>RIDES</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/datatables/data-tables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="menu cid-qParnhBzvx" once="menu" id="menu1-l">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="https://mobirise.com">
                         <img src="assets/images/amusement-text-122x100.png" alt="Mobirise" title="" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="stat.php">Lost World</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-white display-4" href="tourist.php"></a></li><li class="nav-item"><a class="nav-link link text-white display-4" href="tourist.php"></a></li><li class="nav-item"><a class="nav-link link text-white display-4" href="stat.html"><span class="mbri-laptop mbr-iconfont mbr-iconfont-btn"></span>
                        Services</a></li><li class="nav-item"><a class="nav-link link text-white display-4" href="tourist.php">
                        </a></li><li class="nav-item"><a class="nav-link link text-white display-4" href="tourist.php">
                        <span class="mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                        About Us
                    </a></li></ul>
           
        </div>
        <button id ="log" onclick="location.href='logout.php'">logout</button>
    </nav>
</section>


<section class="mbr-section form1 cid-qPaOkFf03L" id="form1-w">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                    Assign Staff</h2>
            </div>
        </div>
    </div>
    <div class="container" width="700px">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                    
            
                    <form class="mbr-form" action="booked.php" method="post">
                        <div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" data-for="name">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="name-form1-w">Staff ID</label>
                                    <input type="text" class="form-control" name="name" data-form-field="Name" required="" id="name-form1-w">
                                </div>
                            </div>
                            
                            <div class="col-md-4 multi-horizontal" data-for="phone">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-w">Ride/Kiosk ID</label>
                                    <input type="tel" class="form-control" name="phone" data-form-field="Phone" required=""id="phone-form1-w">
                                </div>
                            </div><br><br>                       
                        
            
                        <span class="input-group-btn"><button href="" type="submit" class="btn btn-primary btn-form display-4">Assign</button></span>
                    </form>
            </div>
        </div>
    </div>
</section>

<section class="engine"></section><section class="section-table cid-qPbaIzle5c" id="table1-18">

  
  
  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">
          Kiosks</h2>
      <h3 class="mbr-section-subtitle mbr-fonts-style align-center pb-5 mbr-light display-5">
            -     
      </h3>
      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="dataTables_filter">
                  <label class="searchInfo mbr-fonts-style display-7">Search:</label>
                  <input class="form-control input-sm" disabled="">
                </div>
            </div>
          </div>
        </div>

        <div class="container scroll">
          <table class="table isSearch" cellspacing="0">
            <thead>
              <tr class="table-heads ">
                  
                  
                  
                  
              <th class="head-item mbr-fonts-style display-7">
                      Kiosk ID</th><th class="head-item mbr-fonts-style display-7">
                      CONTRACT</th><th class="head-item mbr-fonts-style display-7">
                      MENU</th><th class="head-item mbr-fonts-style display-7">
                      PRICE</th><th class="head-item mbr-fonts-style display-7">
                      STAFF_ID</th><th class="head-item mbr-fonts-style display-7">
                      STAFF NAME</th>
            </thead>

            <tbody>
              
              
              
              
           <?php while($row = $result->fetch_assoc() ){  
              
            echo'
            <tr> 
              <td class="body-item mbr-fonts-style display-7">'.$row["KIOSK_ID"].'</td><td class="body-item mbr-fonts-style display-7">'.$row["CONTRACT"].'</td><td class="body-item mbr-fonts-style display-7">'.$row["ITEM_NAME"].'</td><td class="body-item mbr-fonts-style display-7">'.$row["PRICE"].'</td><td class="body-item mbr-fonts-style display-7">'.$row["STAFF_ID"].'</td><td class="body-item mbr-fonts-style display-7">'.$row["NAME"].'</td></tr>';
                
                }
            ?>
          </table>
        </div>
        <div class="container table-info-container">
          <div class="row info">
            <div class="col-md-6">
              <div class="dataTables_info mbr-fonts-style display-7">
                <span class="infoBefore">Showing</span>
                <span class="inactive infoRows"></span>
                <span class="infoAfter">entries</span>
                <span class="infoFilteredBefore">(filtered from</span>
                <span class="inactive infoRows"></span>
                <span class="infoFilteredAfter"> total entries)</span>
              </div>
            </div>
            <div class="col-md-6"></div>
          </div>
        </div>
      </div>
    </div>
</section>




<section class="section-table cid-qPbaTWS0VC" id="table1-1a">

  
  
  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">Rides</h2>
      <h3 class="mbr-section-subtitle mbr-fonts-style align-center pb-5 mbr-light display-5">
            -     
      </h3>
      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="dataTables_filter">
                  <label class="searchInfo mbr-fonts-style display-7">Search:</label>
                  <input class="form-control input-sm" disabled="">
                </div>
            </div>
          </div>
        </div>

        <div class="container scroll">
          <table class="table isSearch" cellspacing="0">
            <thead>
              <tr class="table-heads ">
                  
                  
                  
                  
              <th class="head-item mbr-fonts-style display-7">
                      RIDE ID</th><th class="head-item mbr-fonts-style display-7">
                      RIDE NAME</th><th class="head-item mbr-fonts-style display-7">
                      STAFF_ID</th><th class="head-item mbr-fonts-style display-7">
                      STAFF NAME</th>
                    </tr>
            </thead>

            <tbody>
               <?php while($row2 = $result1->fetch_assoc() ){  
              
            echo'
            <tr> 
              <td class="body-item mbr-fonts-style display-7">'.$row2["RIDE_ID"].'</td><td class="body-item mbr-fonts-style display-7">'.$row2["RIDE_NAME"].'</td><td class="body-item mbr-fonts-style display-7">'.$row2["STAFF_ID"].'</td><td class="body-item mbr-fonts-style display-7">'.$row2["NAME"].'</td></tr>';
                
                }
            ?>
            
          </table>
        </div>
        <div class="container table-info-container">
          <div class="row info">
            <div class="col-md-6">
              <div class="dataTables_info mbr-fonts-style display-7">
                <span class="infoBefore">Showing</span>
                <span class="inactive infoRows"></span>
                <span class="infoAfter">entries</span>
                <span class="infoFilteredBefore">(filtered from</span>
                <span class="inactive infoRows"></span>
                <span class="infoFilteredAfter"> total entries)</span>
              </div>
            </div>
            <div class="col-md-6"></div>
          </div>
        </div>
      </div>
    </div>
</section>

<section once="" class="cid-qPaK3rpHxx" id="footer7-17">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">
                    
                    
                    
                    
                    
                <li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="#" target="_blank">About us</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="#" target="_blank">Services</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="#" target="_blank">Get In Touch</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="#" target="_blank">Careers</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="#" target="_blank">Work</a>
                    </li></ul>
            </div>
            <div class="row social-row">
                <div class="social-list align-right pb-2">
                    
                    
                    
                    
                    
                    
                <div class="soc-item">
                        <a href="https://twitter.com/mobirise" target="_blank">
                            <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                            <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.youtube.com/c/mobirise" target="_blank">
                            <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://instagram.com/mobirise" target="_blank">
                            <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                            <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.behance.net/Mobirise" target="_blank">
                            <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div></div>
            </div>
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7"><br>© Copyright 2018 RJK - All Rights Reserved</p>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/datatables/jquery.data-tables.min.js"></script>
  <script src="assets/datatables/data-tables.bootstrap4.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>
