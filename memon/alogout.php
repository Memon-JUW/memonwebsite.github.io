<?php 
session_start();
if(isset($_SESSION['E'])){
	unset($_SESSION['E']);
	header("location:alogin.php");
}
else{
	header("location:alogin.php");
}



?>