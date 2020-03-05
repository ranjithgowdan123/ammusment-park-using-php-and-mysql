<?php
$co=mysqli_connect("localhost","root","","project")or die("Error in Connection Contact Tech Support");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$name=$_POST['name'];
$age=$_POST['age'];
$hiredate=$_POST['date'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$contact=$_POST['contact'];
$salary=$_POST['salary'];
$id = $_POST['id'];

if($address!=="")
{
	$qu="UPDATE `STAFF` SET `ADDRESS`= '".$address."' WHERE STAFF_ID =".$id;
	$result=mysqli_query($co,$qu)or die("Error 1");
}

if($name!=="")
{
	$qu="UPDATE `STAFF` SET `NAME`= '".$name."' WHERE STAFF_ID =".$id;
	$result=mysqli_query($co,$qu)or die("Error 1");
}
if($age!=="")
{
	$qu="UPDATE `STAFF` SET `AGE`=".$age." WHERE STAFF_ID =".$id;
	$result=mysqli_query($co,$qu)or die("Error 1");
}
if($hiredate!=="")
{
	$qu="UPDATE `STAFF` SET `HIRE_DATE`='".$hiredate."' WHERE STAFF_ID =".$id;
	$result=mysqli_query($co,$qu)or die("Error 1");
}
if($gender!=="")
{
	$qu="UPDATE `STAFF` SET `ADDRESS`='".$gender."' WHERE STAFF_ID =".$id;
	$result=mysqli_query($co,$qu)or die("Error 1");
}
if($salary!=="")
{
	$qu="UPDATE `STAFF` SET `ADDRESS`=".$salary." WHERE STAFF_ID =".$id;
	$result=mysqli_query($co,$qu)or die("Error 1");
}


}

?>
<body style="color:red;background-color:yellow;">
	<center><h1>SUCCESS</h1></center>
	<button class="button" id="myBtn1" style="vertical-align:middle" value="CONTINUE" onclick="location.href='staff.php'">CONTINUE</button>
</body>

