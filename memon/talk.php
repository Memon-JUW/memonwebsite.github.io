<?php
require_once("kon.php");
?>
<?php

session_start();
if (isset($_SESSION['un'])){
	$se= $_SESSION['un'];
}
else{
	header("location:login.php");
}

?>


<head><title>Main Page</title>
<style>
	 #rc{
		position:relative;
		height:90%;
	}
	
	#rc{
		width:69%;
		border:1px solid #efefef;
	}
	
	#rcc{
		width:100%;
		height:100%;
		overflow:auto;
		margin:0px auto;
	}
	#message{
		height:80%;
		border:1px solid black;
		overflow:auto;
	}
	.ta{
		width:100%;
		height:10%;
		position: absolute;

	}
	#ho ul li a:hover{

	background-color: rgb(5, 50, 70);
	color: rgb(243, 245, 192  );
}
</style>
</head>

	<div id="ho">
<nav class="navbar navbar-expand-sm" style="background-color:rgb(21,32,75);">
  <!-- Links -->
  
  <ul class="navbar-nav" >
  	 <li class="nav-item">
      <a class="nav-link"  href="home.php"><img src="1.png" class="rounded-circle" alt="LOGO" title="Home" width="100" height="50" style="background-color:black;"></a>
    </li>
    <li class="nav-item">
      <h1 style="font-family:Comic Sans MS, cursive, sans-serif; color:white;" >UniChat</h1>
    </li>
  

    <li class="nav-item">
      <a class="nav-link"  href="t.php" style="color:rgb(159,255,255);margin-left:70px; margin-top: 10px;">PrivateChat</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="T" href="gp.php" style="color:rgb(159,255,255);margin-left:5px; margin-top: 10px;">GroupChat</a>
    </li>
    
<li class="nav-item" >
      <a class="nav-link" href="logout.php" style="color:rgb(159,255,255);margin-left:5px; margin-top: 10px;">Logout</a>
    </li>
   
    <li >
  	<?php

  	 echo "<p style='color:white;font-size:30px;margin-left:500px; position:fixed;'>$se</p>";?></li>

    
  </ul>
</nav>
</div>
	<div id="rc">
		<div id="rcc">

			<div id="message">
					<?php
	include("kon.php");
	$qq="SELECT * FROM `sms`";
	$rq=mysqli_query($con,$qq);
	while($row=mysqli_fetch_assoc($rq)){
		$paigam=$row['Message'];
		$un=$row['Username'];
		echo '<h4 style="color:Green">'.$un.'</h4>';
		echo '<p>'.$paigam.'</p>';
		echo '<hr>';
	}
 if(isset($_POST['sb'])){
 	$paigam=$_POST['message'];
 	$q='INSERT INTO `sms` (`Id`,`Username`,`Message`)
 	VALUES("","'.$_SESSION['un'].'","'.$paigam.'")
 	';
 	$r=mysqli_query($con,$q);
 	if($r){
 		echo '<h4 style="color:green">'.$_SESSION['un'].'</h4>';
 		echo '<p>'.$paigam.'</p>';
 	}

 }


	?>
			
			
			</div>
			<form method="post" align="center">
		<input type="text" name="message" placeholder="Type Your Message Here" style="width:450px;height:90px;margin-top:8px;border:1px solid black;"/>
		<input type="submit" name="sb" value="Send" style="margin-top:10px;"/>


	</form>

	

		</div>
		
	</div>

	