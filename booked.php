<?php
$co=mysqli_connect("localhost","root","","project")or die("Error in Connection Contact Tech Support");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$name=$_POST['name'];
$age=$_POST['age'];

$phone=$_POST['phone'];
$gender=$_POST['gender'];

$s="select TOURIST_ID from TOURIST";
$ss="select TICKET_ID from BOOK_TICKET";
$re=mysqli_query($co,$s)or die("Error select");
$ree=mysqli_query($co,$ss)or die("Error select");

 while($row = $re->fetch_assoc() ){ 
    $id1=$row["TOURIST_ID"];
}
while($row = $ree->fetch_assoc() ){ 
    $id2=$row["TICKET_ID"];
}
echo($id2);
$id=$id1+1;
$tid=$id2+1;
$dt = date("Y/m/d");
$qu="INSERT INTO `TOURIST` (`TOURIST_NAME`, `AGE`,`GENDER`,`CONTACT`,`TOURIST_ID`) VALUES ('".$name."','".$age."','".$gender."','".$phone."','".$id."')";
$result=mysqli_query($co,$qu)or die("Error 1");

$qu1="INSERT INTO `BOOK_TICKET` (`TICKET_ID`, `DATE`,`TOURIST_ID`) VALUES ('".$tid."','".$dt."','".$id."')";
//echo($qu1);
$result=mysqli_query($co,$qu1)or die("Error 2");
//echo mysqli_errno($this->co);
//if (!mysqli_query("INSERT INTO `BOOK_TICKET` (`TICKET_ID`, `DATE`,`TOURIST_ID`) VALUES ('".$tid."','".$dt."','".$id."')")) {
  //echo("Error ");
//}
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
  <meta name="description" content="Web Builder Description">
  <title>booked</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="menu cid-qParnhBzvx" once="menu" id="menu1-1b">

    

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
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="tourist.php">Lost World</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-white display-4" href="page3.html"></a></li><li class="nav-item"><a class="nav-link link text-white display-4" href="page3.html"></a></li><li class="nav-item"><a class="nav-link link text-white display-4" href="page1.html"><span class="mbri-laptop mbr-iconfont mbr-iconfont-btn"></span>
                        Services</a></li><li class="nav-item"><a class="nav-link link text-white display-4" href="page3.html">
                        </a></li><li class="nav-item"><a class="nav-link link text-white display-4" href="page3.html">
                        <span class="mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                        About Us
                    </a></li></ul>
            
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.ws/q">web page builder download</a></section><section class="timeline1 cid-qPKI8xyjUT" id="timeline1-1g">

    

    

    <div class="container align-center">
        <h2 class="mbr-section-title pb-3 mbr-fonts-style display-2">
            Thank-you for booking tickets</h2>
        <h3 class="mbr-section-subtitle pb-5 mbr-fonts-style display-5"></h3>

        <div class="container timelines-container" mbri-timelines="">
            <div class="row timeline-element reverse separline">      
                 <div class="timeline-date-panel col-xs-12 col-md-6  align-left">         
                    <div class="time-line-date-content">
                        <p class="mbr-timeline-date mbr-fonts-style display-5">
                            Tickets Confirmed</p>
                    </div>
                </div>
           <span class="iconBackground"></span>
            <div class="col-xs-12 col-md-6 align-right">
                <div class="timeline-text-content">
                    <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5"></h4>
                    <p class="mbr-timeline-text mbr-fonts-style display-7">
                        Your tickets have been booked and confirmed</p>
                 </div>
            </div>
            </div>

            <div class="row timeline-element  separline">
                <div class="timeline-date-panel col-xs-12 col-md-6 align-right">
                    <div class="time-line-date-content">
                        <p class="mbr-timeline-date mbr-fonts-style display-5">
                            What next?</p>
                    </div>
                </div>
                <span class="iconBackground"></span>
                <div class="col-xs-12 col-md-6 align-left ">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5"></h4>
                        <p class="mbr-timeline-text mbr-fonts-style display-7">
                            Our representative will contact you for confirmation and sorting queries</p>
                    </div>
                </div>
            </div> 


            <div class="row timeline-element reverse">
                <div class="timeline-date-panel col-xs-12 col-md-6  align-left">
                    <div class="time-line-date-content">
                        <p class="mbr-timeline-date mbr-fonts-style display-5">
                            Contact</p>
                    </div>
                </div>
                <span class="iconBackground"></span>
                <div class="col-xs-12 col-md-6 align-right">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5"></h4>      
                        <p class="mbr-timeline-text mbr-fonts-style display-7">
                            In case of any discrepancies, Please contact us with your registered email id</p>
                    </div>
                </div>
            </div>

            


            


            

            

            

            

            

            

            
        </div>
    </div>
</section>

<section once="" class="cid-qPKIoA8WLi" id="footer7-1h">

    

    

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
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                    © Copyright 2017 Mobirise - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>
