<?php
include("kon.php");
	session_start(); //starts the session
	if($_SESSION['E']){

	}
	else{
		header("location:alogin.php"); // redirects if user is not logged in
	}
	if($_SERVER['REQUEST_METHOD'] == "GET")
	{
		
		$id = $_GET['i'];
		
		$g=mysqli_query($con,"DELETE  FROM student WHERE Id='$id'");
		if($g){
			echo "<script>alert('Delete hogya!');</script>";
			header("location:de.php");
		}
		else{
			echo "<script>alert('Delete Ni hua!');</script>";
			header("location:de.php");
		}
		
	}

?>