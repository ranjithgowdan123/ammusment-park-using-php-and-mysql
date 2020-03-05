<?php
$co=mysqli_connect("localhost","root","","project")or die("Error in Connection Contact Tech Support");
session_start();
$name=$_POST['uname'];
$password=$_POST['password'];
$qu="select * from STAFF where STAFF_ID = ".$name;
$result=mysqli_query($co,$qu);
$c=-1;
if($r=mysqli_fetch_array($result))
{
	if($r['ADMIN_ID']==$password)
	{
		
	   $c=1;
	   $_SESSION['user']=$name;
	}
	else
	{
		
	   $c=-1;
	}
}
if($c==1)
{header('location:stat.php');}
else
{
	echo('errorrre')
;
}
?>
