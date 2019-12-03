<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="al.css">

	</head>
	<body>
<div class="s">
	<img src="0.png" class="av">
		<h1 style="font-family: sans-serif;text-align:center;margin-top:-4px;">Login Here</h1>
<form action="" method="post">
	         Email:<br><input type="text" name="E" value="" placeholder="email" required ><br><br>
	Password:<br><input type="password" name="PS" value="" placeholder="password" required ><br><br>

<input type="submit" name="sub" value="Login"><br>
<a href="index.php" class="btn btn-primary" style="width:260px;border-radius: 20px; border: none;
    outline: none;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;">Back</a>

	</form>
</div>

	<?php
	session_start();
   require_once("kon.php");
	if(isset($_POST['sub'])){
	$e=$_POST['E'];
	$ps=$_POST['PS'];
	$sqlkiquery="SELECT * FROM admin WHERE Email='$e' && Password='$ps'";
	$data=mysqli_query($con,$sqlkiquery);
    $total=mysqli_num_rows($data);

    if($total==1){
    	$_SESSION['E']=$e;
    	header('location:ahome.php');
    }
else{
	echo "<script>alert('Apka Email Ya Password Sahi Nahi Hai!!!')</script>";

}
}
?>
</body>
</html>