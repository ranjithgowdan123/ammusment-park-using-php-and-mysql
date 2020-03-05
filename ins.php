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
$s="select STAFF_ID from STAFF";
$re=mysqli_query($co,$s)or die("Error select");

 while($row = $re->fetch_assoc() ){ 
	$id1=$row["STAFF_ID"];
}

$id=$id1+1;


$qu="INSERT INTO `STAFF` (`NAME`, `AGE`,`HIRE_DATE`,`ADDRESS`,`GENDER`,`CONTACT`,`SALARY`,`STAFF_ID`) VALUES ('".$name."','".$age."','".$hiredate."','".$address."','".$gender."','".$contact."','".$salary."','".$id."')";
echo($qu);

$result=mysqli_query($co,$qu)or die("Error 1");

}

?>
<body style="color:red;background-color:yellow;">
	<center><h1>SUCCESS</h1></center>
	<button class="button" id="myBtn1" style="vertical-align:middle" value="CONTINUE" onclick="location.href='staff.php'">CONTINUE</button>
</body>

