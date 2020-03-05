<?php
$co=mysqli_connect("localhost","root","","project")or die("Error in Connection Contact Tech Support");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$id=$_POST['id'];

$qu="UPDATE `STAFF` SET `SALARY`= `SALARY`*".$id;

$result=mysqli_query($co,$qu)or die("Error 1");

}

?>
<body style="color:red;background-color:yellow;">
	<center><h1>SUCCESS</h1></center>
	<button class="button" id="myBtn1" style="vertical-align:middle" value="CONTINUE" onclick="location.href='staff.php'">CONTINUE</button>
</body>

