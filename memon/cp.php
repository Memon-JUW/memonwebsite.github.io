<html>
<head>
<title>Create Password</title>
<link rel="stylesheet" type="text/css" href="c.css">
</head>
<body>
	
<div class="sf">
    <form action="" method="post">
		<div class="form-header">
			<h2>Create New Password</h2>
			<p>MyChat</p>
		</div>
		<div class="form-group">
			<label>Enter Password</label>
        	<input type="password" class="form-control" placeholder="Password" name="pass1" autocomplete="off" required="required">
        </div>
        <div class="form-group">
			<label>Confirm Password</label>
            <input type="password" class="form-control" placeholder="Confirm Password" name="pass2" autocomplete="off" required="required">
        </div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block btn-lg" name="change">Change</button>
		</div>
    </form>
</div>
</body>
</html>
<?php 
session_start();

include("kon.php"); 



	if(isset($_POST['change'])){
		
		$user = $_SESSION['email'];
	    $pass1 = $_POST['pass1'];
	    $pass2 = $_POST['pass2'];

	    if($pass1 != $pass2){
	        echo"
	          <div class='alert alert-danger'>
	            <strong>Your new password did't match with each other</strong> 
	          </div>
	        ";
	    }
	    if($pass1 < 9 AND $pass2 < 9){
	        echo"
	          <div class='alert alert-danger'>
	            <strong>Use 9 or more than 9 characters</strong> 
	          </div>
	        ";
	    }
	    if($pass1 == $pass2){
            $update_pass = mysqli_query($con, "UPDATE student SET password='$pass1' WHERE email='$user'");
            session_destroy();
            echo"
            	<script>alert('Go ahead and signin')</script>
            	<script>window.open('login.php','_self')</script>
            ";
        }
	
	}


?>
