<?php
$co=mysqli_connect("localhost","root","","project")or die("Error in Connection Contact Tech Support");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$staff=$_POST['staff'];
$ride=$_POST['ride'];



$qu="INSERT INTO `MANAGES` (`STAFF_ID`, `RIDE_ID`) VALUES ('".$staff."','".$ride."')";
echo($qu);

$result=mysqli_query($co,$qu)or die("Error 1");

}

?>
<body style="color:red;background-color:yellow;">
	<center><h1>SUCCESS</h1></center>
	<button class="button" id="myBtn1" style="vertical-align:middle" value="CONTINUE" onclick="location.href='assign.php'">CONTINUE</button>
</body>

