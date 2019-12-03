
<?php
session_start();
include("kon.php");

if(!isset($_SESSION['un'])){
	
	header("location: login.php");

}
else{ ?>
	
<html>
<head><title>PRIVATE CHAT</title>

	<style>
#me{
		height:80%;
		width:50%;
		overflow: auto;
	}
	#mo{
		width: 320px;
    height: 500px;
    background: rgba(0, 0, 0, 0.9);
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
margin-left: 513px;
overflow: auto;
margin-top: -75px;
	}


	</style>
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
	 <link rel="stylesheet" href="s.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php
      $se=$_SESSION['un'];

?>
	
	<style>
     #T{
     	background-color: rgb(5, 50, 70);
     }
     #ho ul li a:hover{

	background-color: rgb(5, 50, 70);
	color: rgb(243, 245, 192  );
}
#rcc{
		width:50%;
		height:100%;
		overflow:auto;
		
	}
	#message{
		height:20%;
		border:1px solid black;
		overflow:auto;
	}
	body{
		background-image: url('9.jpg');
	}



	</style>
</head>

<!-- /.container -->


<div id="ho">
	<nav class="navbar navbar-expand-sm" style="background-color:rgb(21,32,75);">
  <!-- Links -->
  
  <ul class="navbar-nav" id="top">
  	 <li class="nav-item">
      <a class="nav-link"  href="juw.php"><img src="1.png" class="rounded-circle" alt="LOGO" title="Home" width="100" height="50" style="background-color:black;"></a>
    </li>
    <li class="nav-item">
      <h1 style="font-family:Comic Sans MS, cursive, sans-serif; color:white;" >UniChat</h1>
    </li>
  

    <li class="nav-item">
      <a class="nav-link" id="T" href="wah.php" style="color:rgb(159,255,255);margin-left:70px; margin-top: 10px;">PrivateChat</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="gp.php" style="color:rgb(159,255,255);margin-left:5px; margin-top: 10px;">GroupChat</a>
    </li>
    
<li class="nav-item" >
      <a class="nav-link" href="logout.php" style="color:rgb(159,255,255);margin-left:5px; margin-top: 10px;">Logout</a>
    </li>
   
    <li >
  	<?php

  	 echo "<p style='color:white;font-size:30px;margin-top:10px;margin-left:500px; position:fixed;'>$se</p>";?></li>

    
  </ul>
</nav>
</div>


	<div class="container main-section">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-12 left-sidebar"style="margin-left:-80px;">
				
				<div class="left-chat">
					<ul >
						<?php include("gdata.php"); ?>
					</ul>
				</div>
			</div>
			<div class="col-md-9 col-sm-9 col-xs-12 right-sidebar">
				<div class="row" style="margin-top:-350px;">
					<!-- getting the user information who is logged in -->
					<?php 
						$user = $_SESSION['un'];
						$get_user = "select * from student where Username='$user'"; 
						$run_user = mysqli_query($con,$get_user);
						$row=mysqli_fetch_array($run_user);
									
						$user_id = $row['Id']; 
						$user_name = $row['Username'];
					?>
</div>
					<!-- getting the user data on which user click -->
                  
                      
					<?php
					 $username=$_SESSION['un'];
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
                    </div>
					
				
				<div class="row" >
					<div id="scrolling" class="col-md-12 right-header-contentChat">
						
						<!--Yeh read kya ya nii msg isko show krega code  --><?php
						$update_msg = mysqli_query($con, "UPDATE users_chats SET msg_status='read' WHERE sender_username='$username' AND receiver_username='$user_name'");

						$sel_msg = "select * from users_chats where (sender_username='$user_name' AND receiver_username='$username') OR (receiver_username='$user_name' AND sender_username='$username') ORDER by 1 ASC"; 
						$run_msg = mysqli_query($con,$sel_msg);		
						?>
						 <div id="mo">
                            <div class="col-md-12 right-header" >
						<div class="card" style="font-size:30px;color:white;background-color:black;width:139.9%;margin-left:-44px;margin-top: -70px;">
							<form method="post" >
								<p ><?php echo"<h1 style='font-family: sans-serif;text-align:center;margin-top:-4px;'>$username</h1>";?></p>
								<span style="font-size:20px;color:white;margin-top:100px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You have&nbsp;&nbsp;<?php echo $total; ?> messages</span>
								
							</form>
						
						</div>
					</div>

							<?php
						
						while($row=mysqli_fetch_array($run_msg)){
			
						$sender_username = $row['sender_username'];
						$receiver_username = $row['receiver_username'];
						$msg_content = $row['msg_content'];
						$msg_status = $row['msg_status'];
						$msg_date = $row['msg_date'];
						$msg_time = $row['msg_time'];
						
                            
							if($user_name == $sender_username AND $username == $receiver_username){

							echo"
								<span> <h4 style='color:rgb(216,247,252);'>Me</h4><small> $msg_time &nbsp;&nbsp;$msg_status</small> </span><br><br>
										<p>$msg_content</p>
										<hr>
										
									
								
							";
						}

						else if($user_name == $receiver_username AND $username == $sender_username){
							echo"
								
									
									<span> <h4 style='color:rgb(216,247,252);'>$username</h4><small> $msg_time &nbsp;&nbsp;$msg_status</small> </span><br><br>
										<p>$msg_content</p>
										<hr>
										
									

							";
						}
            ?>
                         

						
						
							<!-- Yeh Jo msg bhej ra hai wo side ki coding hai-->
						
						
					
						<?php

						} 

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
				$d=date("y-m-d h:i:sa");
			$insert = "insert into users_chats(sender_username,receiver_username,msg_content,msg_status,msg_date,msg_time) values ('$user_name','$username','$msg','unread',NOW(),'$d')";
			
			$run_insert = mysqli_query($con,$insert);
			if($run_insert){

			?>
			<div id="me">
			<?php

			if($user_name == $sender_username AND $username == $receiver_username){

							echo"
								
									
										<span> <h4 style='color:rgb(216,247,252);'>Me</h4><small> $msg_time &nbsp;&nbsp;$msg_status</small> </span><br><br>
										<p>$msg</p>
										<hr>
		
									
								
							";
						}

						else if($user_name == $receiver_username AND $username == $sender_username){
							echo"
								
									
										<span> <h4 style='color:rgb(216,247,252);'>Me</h4><small>$msg_date &nbsp;&nbsp;$msg_status</small> </span><br><br>
										<p >$msg</p>
										<hr>
									
								

							";
						}
                 ?></div><?php
}
		}
	}
		?>

						
					
					</div> 
                 	
					  
				</div>
				  <div class="row" style="margin-left:929.5px;margin-top:100px;">
					<div class="col-md-12 ">
						
						<form method="post"  >
						<input autocomplete="off" type="text"    name="msg_content" placeholder="Write your message..." >
						<input type="submit" class="btn-info" value="Send" style="width:60px;margin-left:169px;margin-top: -26px;" name="submit"  >
						</form>
								
		

					</div>
				</div>
					</div>
				</div>

				
			</div>
		</div>
	</div>

	
	
<?php } ?>


<footer>
          <div class="footer-top" style="background-color: rgb(21,32,75);margin-top: 500px;">
            <div class="container">
              <div class="row">
                <div class="col-md-4 col-lg-3 footer-about wow fadeInUp">
                  <img class="logo-footer" src="assets/img/logo.png" alt="logo-footer" data-at2x="assets/img/logo.png">
                  <p>
                    We are JUW students and our purpose is to create an environment where students can chat with their classmates either private chat or in a group its depend on them.
                  </p>
                  
                      </div>
                <div class="col-md-4 col-lg-4 offset-lg-1 footer-contact wow fadeInDown" >
                  <h3>Contact</h3>
                      
                      <p><i class="fas fa-phone"></i> Phone:<h4>ANILA ASHRAF</h4>03122674700 <br><h4>HAFIZA SANIA</h4>03172602940</p>
                      <p><i class="fas fa-envelope"></i> Email:<h4>ANILA ASHRAF</h4> <a href="mailto:hello@domain.com">learnerlearner54@gmail.com</a><br><h4>HAFIZA SANIA</h4><a href="mailto:hello@domain.com">syedasaniasamar98@gmail.com</a></p>
                      </div>
                      <div class="col-md-4 col-lg-4 footer-links wow fadeInUp">
                        <div class="row">
                          <div class="col">
                            <h3>Links</h3>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <p><a class="scroll-link" href="#top">Top</a></p>
                          </div>
                          
                        </div>
                      </div>
                </div>
            </div>
          </div>
          <div class="footer-bottom" style="background-color:rgb(2, 19, 55 );color:white;">
            <div class="container">
              <div class="row">
                  <div class="col-md-6 footer-copyright">
                        &copy; UniChat System Developed and Designed by Anila and Saniya
                      </div>
                  <div class="col-md-6 footer-social">
                        <a href="#"><i class="fab fa-facebook"></i></a> 
              <a href="#"><i class="fab fa-twitter"></i></a> 
              <a href="#"><i class="fab fa-google-plus-g"></i></a> 
              <a href="#"><i class="fab fa-instagram"></i></a> 
              <a href="#"><i class="fab fa-pinterest"></i></a>
                      </div>
                </div>
            </div>
          </div>
        </footer>

