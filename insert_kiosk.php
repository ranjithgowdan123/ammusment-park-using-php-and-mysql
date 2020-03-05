<?php
$co=mysqli_connect("localhost","root","","project")or die("Error in Connection Contact Tech Support");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$staff=$_POST['staff'];
$kiosk=$_POST['kiosk'];



$qu="INSERT INTO `MAINTAINS` (`STAFF_ID`, `KIOSK_ID`) VALUES ('".$staff."','".$kiosk."')";
echo($qu);

$result=mysqli_query($co,$qu)or die("Error 1");

}

?>
<body style="color:red;background-color:yellow;">
	<center><h1>SUCCESS</h1></center>
	<button class="button" id="myBtn1" style="vertical-align:middle" value="CONTINUE" onclick="location.href='assign.php'">CONTINUE</button>
</body>

