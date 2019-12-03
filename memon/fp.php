<html>
<head><title>ForgetPassword</title>
<link rel="stylesheet" type="text/css" href="si.css">
</head>
<body>


<div class="sf">

    <form action="" method="post">
		<div class="form-header">
			<h2>Forgot Password</h2>
			
		</div>
		<div class="form-group">
			<label>Email</label>
        	<input type="text" class="form-control" placeholder="someone@site.com" name="email" autocomplete="off" required="required" style="margin-bottom:20px;width:100%;">
        </div>
      
		<div class="form-group">
			<input type="submit" class="btn btn-primary btn-block btn-lg" name="submit" value="Submit">
		</div>
    </form>
	<div class="t">Back to signin?<a href="login.php">Click here</a></div>
</div>
</body>
</html>




<?php 
session_start();

include("kon.php"); 




	if(isset($_POST['submit'])){
	
	$email = htmlentities(mysqli_real_escape_string($con,$_POST['email']));

	$select_user = "select * from student where email='$email'";
	
	$query = mysqli_query($con,$select_user); 
	
	$check_user = mysqli_num_rows($query);
	
	if($check_user==1){
	
	$_SESSION['email']=$email;
	
	echo "<script>window.open('cp.php','_self')</script>";
	
	}
	else {
	echo "<script>alert('Apka Email Correct Nahi Hai!','_self')</script>";
	echo "<script>window.open('fp.php','_self')</script>";
	}
	
	}


?>