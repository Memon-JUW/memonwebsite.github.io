<html>
<head><title>Student Login page</title></head>
<link rel="stylesheet" type="text/css" href="Y.css">
<body>
	<div class="M">
		<img src="0.png" class="av">
		<h1 style="font-family: sans-serif;text-align:center;margin-top:-4px;">Login Here</h1>

<form method="post" action="">
	
Username:<br><input type="text" name="un" value="" placeholder="username" required  /><br><br>
Password:<br><input type="password" name="ps" value="" placeholder="password" required style="margin-bottom:20px;width:100%;" /><br><br>
<input type="submit" name="sb" value="Login" /><br>
<a href="reg.php"style="text-decoration:none;">No account? Create one...</a><br><br>
 <a href="fp.php" style="text-decoration:none;">Forgot password?</a>
</form>
</div>
<?php
    session_start();
   require_once("kon.php");
if(isset($_POST['sb'])){

	$u=$_POST['un'];
	$p=$_POST['ps'];
	$q='SELECT * FROM `student` where `username`="'.$u.'" and `password`="'.$p.'"';
	$r=mysqli_query($con,$q);
	if(mysqli_num_rows($r) > 0)
	{
		$_SESSION['un']=$u;
		header("location:wah.php");

	}
else{
	echo "<script>alert('Apka Username Aur Password Match Nahi ho raaaaa!!!!','_self')</script>";
	
}
}

?>
</body>
</html>