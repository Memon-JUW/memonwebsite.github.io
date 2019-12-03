<?php 
session_start();
if(isset($_SESSION['un'])){
	unset($_SESSION['un']);
	header("location:login.php");
}
else{
	header("location:login.php");
}



?>