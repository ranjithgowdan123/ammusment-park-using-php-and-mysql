<?php
$co=mysqli_connect("localhost","root","","Register")or die("Error in Connection Contact Tech Support");
$result=mysqli_query($co,$qu);
if($_SERVER["REQUEST_METHOD"] == "POST"){
$name=$_POST['name'];
$password=$_POST['pass'];
$mail=$_POST['mailid'];
$occ=$_POST['occupation'];
$qu="INSERT INTO `resiter` (`username`, `password`,`emailId`,`occupation`) VALUES ('$name','$password','$mail','$occ')";
$result=mysqli_query($co,$qu);
if($result)
{header('location:login.php');
echo "hello";}
else
{header('location:register.php');}
}





?>
