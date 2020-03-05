<?php
$co=mysqli_connect("localhost","root","","project")or die("Error in Connection Contact Tech Support");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$name=$_POST['name'];

$s="select RIDE_ID from RIDE";
$re=mysqli_query($co,$s)or die("Error select");

 while($row = $re->fetch_assoc() ){ 
	$id1=$row["RIDE_ID"];
}

$id=$id1+1;


$qu="INSERT INTO `RIDE` (`RIDE_NAME`,`RIDE_ID`) VALUES ('".$name."','".$id."')";
echo($qu);

$result=mysqli_query($co,$qu)or die("Error 1");

}

?>
<body style="color:red;background-color:yellow;">
	<center><h1>SUCCESS</h1></center>
	<button class="button" id="myBtn1" style="vertical-align:middle" value="CONTINUE" onclick="location.href='add.php'">CONTINUE</button>
</body>

