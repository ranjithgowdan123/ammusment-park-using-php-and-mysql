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

$sql = "SELECT * FROM TOURIST";
$result = $conn->query($sql);
 

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
  <meta name="description" content="Web Page Maker Description">
  <title>TOURIST INFO</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
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
<section class="engine"></section><section class="counters1 counters cid-qPaYGyVA0J" id="counters1-14">

    

    

    <div class="container">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">Crowd management</h2>
        <h3 class="mbr-section-subtitle mbr-fonts-style display-5"></h3>

        <div class="container pt-4 mt-2">
            <div class="media-container-row">
                <div class="card p-3 align-center col-12 col-md-6 col-lg-4">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <span class="mbri-mobirise mbr-iconfont"></span>
                        </div>

                        <div class="card-text">
                            <h3 class="count pt-3 pb-3 mbr-fonts-style display-2">
                                   <?php 
                                  $sql1 = "SELECT COUNT(*) FROM  RIDE";
                                  $result=mysqli_query($conn,$sql);
                                  $row = mysqli_num_rows($result);
                                  echo $row; ?>
                            </h3>
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                Rides</h4>
                            <p class="mbr-content-text mbr-fonts-style display-7"></p>
                        </div>
                    </div>
                </div>


                <div class="card p-3 align-center col-12 col-md-6 col-lg-4">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <span class="mbri-touch-swipe mbr-iconfont"></span>
                        </div>
                        <div class="card-text">
                            <h3 class="count pt-3 pb-3 mbr-fonts-style display-2">
                                  200
                            </h3>
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                STAFF</h4>
                            <p class="mbr-content-text mbr-fonts-style display-7"></p>
                        </div>
                    </div>
                </div>

                <div class="card p-3 align-center col-12 col-md-6 col-lg-4">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <span class="mbri-responsive mbr-iconfont"></span>
                        </div>
                        <div class="card-text">
                            <h3 class="count pt-3 pb-3 mbr-fonts-style display-2">
                                  <?php 
                                  $sql1 = "SELECT * FROM  VISIT";
                                  $connStatus = $conn->query($sql1);
                                  $numberOfRows = mysqli_num_rows($connStatus);
                                  echo $numberOfRows; ?>
                            </h3>
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                Kiosks</h4>
                            <p class="mbr-content-text mbr-fonts-style display-7"></p>
                        </div>
                    </div>
                </div>


                
            </div>
        </div>
   </div>
</section>

<section class="section-table cid-qPb9WvuXJy" id="table1-15">

  
  
  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">
          Tourists</h2>
      <h3 class="mbr-section-subtitle mbr-fonts-style align-center pb-5 mbr-light display-5">-</h3>
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
                      
                      TOURIST ID</th><th class="head-item mbr-fonts-style display-7">
                      NAME</th><th class="head-item mbr-fonts-style display-7">
                      AGE</th><th class="head-item mbr-fonts-style display-7">
                      GENDER</th><th class="head-item mbr-fonts-style display-7">
                      CONTACT</th></tr>
            </thead>

            <tbody>
              
              <?php while($row = $result->fetch_assoc() ){  
              
            echo'
            <tr><td class="body-item mbr-fonts-style display-7">'.$row["TOURIST_ID"].'
              <td class="body-item mbr-fonts-style display-7">'.$row["TOURIST_NAME"].'</td><td class="body-item mbr-fonts-style display-7">'.$row["AGE"].'</td><td class="body-item mbr-fonts-style display-7">'.$row["GENDER"].'</td><td class="body-item mbr-fonts-style display-7">'.$row["CONTACT"].'</td></tr>';
                
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


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/datatables/jquery.data-tables.min.js"></script>
  <script src="assets/datatables/data-tables.bootstrap4.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>