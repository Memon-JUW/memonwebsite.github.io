
<?php
session_start();
include("kon.php");

if(!isset($_SESSION['un'])){
	
	header("location: login.php");

}
else{ ?>
	
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
      $se=$_SESSION['un'];

?>
	
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Links -->
  <ul class="navbar-nav">
  	<li>
  	<?php

  	 echo "<p style='color:white;'>$se</p>";
echo '<br><a href="logout.php" style="text-decoration:none;color:white;background-color:black;">Log out</a>';?></li>
    <li class="nav-item">
      <a class="nav-link" id="O" href="home.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="t.php">PrivateChat</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="gp.php">GroupChat</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="search.php">Search Friends</a>
    </li>
    
  </ul>
</nav>

	<div class="container main-section">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-12 left-sidebar">
				
				<div class="left-chat">
					<ul>
						<?php include("gdata.php"); ?>
					</ul>
				</div>
			</div>
			<div class="col-md-9 col-sm-9 col-xs-12 right-sidebar">
				<div class="row">
					<!-- getting the user information who is logged in -->
					<?php 
						$user = $_SESSION['un'];
						$get_user = "select * from student where Username='$user'"; 
						$run_user = mysqli_query($con,$get_user);
						$row=mysqli_fetch_array($run_user);
									
						$user_id = $row['Id']; 
						$user_name = $row['Username'];
					?>

					<!-- getting the user data on which user click -->


					<?php
						if(isset($_GET['Username'])){

						global $con; 
								
						$get_username = $_GET['Username'];
									
						$get_user = "select * from student where Username='$get_username'";
								
						$run_user = mysqli_query($con,$get_user);
						
						$row_user=mysqli_fetch_array($run_user);
						
						$username = $row_user['Username'];
						}

						$total_messages = "select * from users_chats where (sender_username='$user_name' AND receiver_username='$username') OR (receiver_username='$user_name' AND sender_username='$username')"; 
						$run_messages = mysqli_query($con,$total_messages); 
						$total = mysqli_num_rows($run_messages);
					?>

					<div class="col-md-12 right-header">
						<div class="right-header-detail">
							<form method="post">
								<p><?php echo"<h1>$username</h1>";?></p>
								<span><?php echo $total; ?> messages</span>&nbsp &nbsp
								
							</form>
							
						</div>
					</div>
				</div>
				<div class="row">
					<div id="scrolling_to_bottom" class="col-md-12 right-header-contentChat">
						
						<!--Yeh read kya ya nii msg isko show krega code  --><?php
						$update_msg = mysqli_query($con, "UPDATE users_chats SET msg_status='read' WHERE sender_username='$username' AND receiver_username='$user_name'");

						$sel_msg = "select * from users_chats where (sender_username='$user_name' AND receiver_username='$username') OR (receiver_username='$user_name' AND sender_username='$username') ORDER by 1 ASC"; 
						$run_msg = mysqli_query($con,$sel_msg);		
						
						while($row=mysqli_fetch_array($run_msg)){
			
						$sender_username = $row['sender_username'];
						$receiver_username = $row['receiver_username'];
						$msg_content = $row['msg_content'];
						$msg_status = $row['msg_status'];
						$msg_date = $row['msg_date'];

						?>
						<ul>
							<!-- Yeh Jo msg bhej ra hai wo side ki coding hai-->
						<?php


						if($user_name == $sender_username AND $username == $receiver_username){

							echo"
								<li>
									<div class='rightside-right-chat'>
										<span> Me <small>$msg_date</small> </span><br><br>
										<p>$msg_content</p>
										<p style='color:red;'>$msg_status</p>
									</div>
								</li>
							";
						}

						else if($user_name == $receiver_username AND $username == $sender_username){
							echo"
								<li>
									<div class='rightside-left-chat'>
										<span> $username <small>$msg_date</small> </span><br><br>
										<p>$msg_content</p>
										<p style='color:blue;'>$msg_status</p>
									</div>
								</li>

							";
						}


						?>
						</ul>
						<?php

						}

						?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 right-chat-textbox">
						<form method="post">
						<input autocomplete="off" type="text" name="msg_content" placeholder="Write your message...">
						<button class="btn-info" name="submit"> Send</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		if(isset($_POST['submit'])){
			$msg = htmlentities($_POST['msg_content']);
				
			if($msg == ""){
				echo"

				<div class='alert alert-danger'>
				  <strong><center>Message was unable to send!</center></strong>
				</div>

				";
			}else if(strlen($msg) > 100){
				echo"

				<div class='alert alert-danger'>
				  <strong><center>Message is Too long! Use only 100 characters</center></strong>
				</div>

				";
			}
			else{
			$insert = "insert into users_chats(sender_username,receiver_username,msg_content,msg_status,msg_date) values ('$user_name','$username','$msg','unread',NOW())";
			
			$run_insert = mysqli_query($con,$insert);

			}
		}
	?>

	
	
</body>
</html>
<?php } ?>