<?php
session_start();
if(isset($_SESSION['user']))
{
  header('location:stat.php');
}
?><html>
<head><title>staff Login</title>
<meta name="viewport" content="width=device-width"/>
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
<style type="text/css">
div.r{

position:relative;top:10px;left:30px;

}
body
{
margin:0;
padding:0;
background:url(4.png);
width:100%;
height:100%;
font-family: 'Voces', cursive;
font-style: italic;
overflow-y: hidden;
color:white;
}
.new
{ color: white;}
.overlay{

height:100vh;
position:absolute;
top:0;
width: 100vw;
left:0;
background:#4567  ;
z-index:3;

}
img.ref{position:fixed;top:200px;right:500px;}

#tb1{
position:absolute;
top:50%;
left:80%;
transform:translate(-40%,-40%);
box-sizing:border-box;
transation:.5s;
border-radius:5px;
background:voilet;
box-shadow:0 10px 20px rgba(0,0,0,30);
width:350px;
z-index:1;
}
.reg{background:#33442a;
color: #fff;
font-size:1.2rem;
padding:0.5rem .5rem;
text-decoration: none;
opacity:40%;


}
.reg
{
background:blue;
border:#345b36 2px;
color:white;
margin:2px 3px;
padding:14px 17px;
border-radius:10px 10px;
z-index:2;
font-size:15px;
}
.inp{
width:300px;
height:30px;
font-size:20px;
font-family: 'Voces', cursive;
font-style: italic;
}

.gr1{opacity:1;}
.inputbox 
{
padding-left:20px;
}
.inputbox input
{
border:none;
border-bottom:2px solid black;
outline:none;
height:40px;
font-size:16px;
padding-left:20px;
z-index:3;

}
 *[placeholder] {
    color: black !important;
}
</style>
<script>
function f()
{

var a=document.getElementById("frm1");
a.setAttribute("action","validate.php");
}

</script>
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
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="index.php">Lost World</a></span>
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
       
    </nav>
</section>

<body>


<div class="r"><img src="assets/images/mbr-1631x1080.jpg" height="700px" width="1800px" style="margin-left:-10px;"class="gr1"/></div><br><br>

<div border=1 id="tb1">
<form action="" method="post" id="frm1">
<h1 style="color:white;" align="center" class="new">Login Details</h1>
<center>
<div class="inputbox">
<p class="new">Staff id</p>
<input type="text" name="uname" id="un" max="100" min="3"placeholder="Enter the User Name" class="inp"></div><br>
<div class="inputbox">
<p class="new">admin id<p>
<input type="password" name="password" id="p" placeholder="Enter the Password" class="inp" /><br>
</div><br><br><center>
<div class="button">
<input type="submit" name="submit"  value="Log In" class="reg" onclick="f();"/>&nbsp&nbsp&nbsp&nbsp
<input type="reset"  name="clear" value="Clear" class="reg" /></div><br><br></center>
</div>
</form>
</body>

