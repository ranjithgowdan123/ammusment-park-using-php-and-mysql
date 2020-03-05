<?php
session_start();
if(isset($_SESSION))
{
	unset($_SESSION['user']);
	header('location:login.php');
}
?>