<?php
session_start();
$server="localhost";
$user="root";
$pass ="";
$dbname="project";
if(!isset($_SESSION['user']))
{
  header('location:login.php');
}
$conn = mysqli_connect($server,$user,$pass,$dbname);
if($conn->connect_error)
{
  die("connc failed".$conn->connect_error);
}

$sql = "SELECT * FROM STAFF";

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
  <meta name="description" content="Website Maker Description">
  <title>STAFF</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/datatables/data-tables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  <style>
.button {
  display: inline-block;
  border-radius: 2px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 10px;
  width: 400px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</head>
  
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
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-white display-4" href="tourist.php"></a></li><li class="nav-item"><a class="nav-link link text-white display-4" href="tourist.php"></a></li><li class="nav-item"><a class="nav-link link text-white display-4" href="stat.php"><span class="mbri-laptop mbr-iconfont mbr-iconfont-btn"></span>
                        Services</a></li><li class="nav-item"><a class="nav-link link text-white display-4" href="tourist.php">
                        </a></li><li class="nav-item"><a class="nav-link link text-white display-4" href="tourist.php">
                        <span class="mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                        About Us
                    </a></li></ul>
           
        </div>
        <button id ="log" onclick="location.href='logout.php'">logout</button>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.ws/q">web page maker download</a></section><section class="section-table cid-qPaSYzLrPw" id="table1-x">

  
  
  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">
          Staff</h2>
      <h3 class="mbr-section-subtitle mbr-fonts-style align-center pb-5 mbr-light display-5">
            List of all staff working for us</h3>
      <div class="table-wrapper">
        <button class="button" id="myBtn" style="vertical-align:middle;width:300px;"><span>Update staff details </span></button>
        <button class="button" id="myBtn1" style="vertical-align:middle;width:300px;" onclick="location.href='register.php'"><span>Add new staff </span></button>
        <button class="button" id="myBtn2" style="vertical-align:middle;width:300px;"><span>Update salary </span></button>
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
                      ID</th>    
              <th class="head-item mbr-fonts-style display-7">
                      NAME</th><th class="head-item mbr-fonts-style display-7">
                      AGE</th><th class="head-item mbr-fonts-style display-7">
                      DATE</th><th class="head-item mbr-fonts-style display-7">
                      SALARY</th></tr>
            </thead>

            <tbody>
              
              
            <?php while($row = $result->fetch_assoc() ){  
              
            echo'
            <tr> 
              <td class="body-item mbr-fonts-style display-7">'.$row["STAFF_ID"].'<td class="body-item mbr-fonts-style display-7">'.$row["NAME"].'</td><td class="body-item mbr-fonts-style display-7">'.$row["AGE"].'</td><td class="body-item mbr-fonts-style display-7">'.$row["HIRE_DATE"].'</td><td class="body-item mbr-fonts-style display-7">'.$row["SALARY"].'</td></tr>';
                
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

<center><div id="myModal" class="modal"  style="margin-left:220px;width:800px">
  <div class="modal-content">
    <span class="close">&times;</span>
      <section class="mbr-section form1 cid-qPaOkFf03L" id="form1-w">

          <div class="container">
              <div class="row justify-content-center">
                  <div class="title col-12 col-lg-8">
                      
                      <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">
                          Enter details here</h3>
                  </div>
              </div>
          </div>
          <div class="container">
              <div class="row justify-content-center">
                  <div class="media-container-column col-lg-8" data-form-type="formoid">
                       <form class="mbr-form" action="upd.php" method="post">
                              <div class="row row-sm-offset">
                                  <div class="col-md-4 multi-horizontal" data-for="id">
                                      <div class="form-group">
                                          <label class="form-control-label mbr-fonts-style display-7" for="name-form1-w">ID<span color="red">*</span></label>
                                          <input type="text" class="form-control" name="id" data-form-field="id" required="" id="name-form1-w">
                                      </div>
                                  </div>
                                  <div class="col-md-4 multi-horizontal" data-for="gender">
                                      <div class="form-group">
                                          <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-w">Gender</label>
                                          <input type="tel" class="form-control" name="gender" data-form-field="gender" id="phone-form1-w">
                                      </div>
                                  </div>
                                  <div class="col-md-4 multi-horizontal" data-for="age">
                                      <div class="form-group">
                                          <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-w">age</label>
                                          <input type="tel" class="form-control" name="age" data-form-field="age" id="phone-form1-w">
                                      </div>
                                  </div>
                                  <div class="col-md-4 multi-horizontal" data-for="salary">
                                      <div class="form-group">
                                          <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-w">salary</label>
                                          <input type="tel" class="form-control" name="salary" data-form-field="salary" id="phone-form1-w">
                                      </div>
                                  </div>
                                  <div class="col-md-4 multi-horizontal" data-for="contact">
                                      <div class="form-group">
                                          <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-w">contact</label>
                                          <input type="tel" class="form-control" name="contact" data-form-field="contact" id="phone-form1-w">
                                      </div>
                                  </div>
                                  <div class="col-md-4 multi-horizontal" data-for="date">
                                      <div class="form-group">
                                          <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-w">Hire Date</label>
                                          <input type="tel" class="form-control" name="date" data-form-field="date" id="phone-form1-w">
                                      </div>
                                  </div>
                                  <div class="col-md-4 multi-horizontal" data-for="address">
                                      <div class="form-group">
                                          <label class="form-control-label mbr-fonts-style display-7" for="email-form1-w">Address</label>
                                          <input type="tel" class="form-control" name="address" data-form-field="address"  id="email-form1-w">
                                      </div>
                                  </div>
                                  <div class="col-md-4 multi-horizontal" data-for="name">
                                      <div class="form-group">
                                          <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-w">Name</label>
                                          <input type="tel" class="form-control" name="name" data-form-field="name" id="phone-form1-w">
                                      </div>
                                  </div>
                              </div>  
                             <span class="input-group-btn"><button href="" type="submit" class="btn btn-primary btn-form display-4">SUBMIT</button></span>
                          </form>
            </div>
        </div>
        </div>
      </section>
  </div>
</div>
</center>


<center><div id="myModal1" class="modal"  style="margin-left:220px;width:800px">
  <div class="modal-content">
    <span class="close1">&times;</span>
      <section class="mbr-section form1 cid-qPaOkFf03L" id="form1-w">

          <div class="container">
              <div class="row justify-content-center">
                  <div class="title col-12 col-lg-8">
                      
                      <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">
                          Enter details here</h3>
                  </div>
              </div>
          </div>
          <div class="container">
              <div class="row justify-content-center">
                  <div class="media-container-column col-lg-8" data-form-type="formoid">
                       <form class="mbr-form" action="incsl.php" method="post">
                              <div class="row row-sm-offset">
                                  <div class="col-md-4 multi-horizontal" data-for="id">
                                      <div class="form-group">
                                          <label class="form-control-label mbr-fonts-style display-7" for="name-form1-w">CHANGE BY<span color="red">*</span></label>
                                          <input type="text" class="form-control" name="id" data-form-field="id" required="" id="name-form1-w">
                                      </div>
                                  </div>
                                  
                              </div>  
                             <span class="input-group-btn"><button href="" type="submit" class="btn btn-primary btn-form display-4">SUBMIT</button></span>
                          </form>
            </div>
        </div>
        </div>
      </section>
  </div>
</div>
</center>
<script type="text/javascript">
  // Get the modal
var modal = document.getElementById('myModal');
var modal1 = document.getElementById('myModal1');
// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btn1 = document.getElementById("myBtn2");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var span1 = document.getElementsByClassName("close1")[0];
// When the user clicks on the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}
btn1.onclick = function() {
    modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
span1.onclick = function() {
    modal1.style.display = "none";
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
         modal1.style.display = "none";
    }
}

</script>

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/datatables/jquery.data-tables.min.js"></script>
  <script src="assets/datatables/data-tables.bootstrap4.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>
