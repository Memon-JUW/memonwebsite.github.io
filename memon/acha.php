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
footer .main-footer{	padding: 20px 0;	background: rgb(21,32,75);}
footer ul{	padding-left: 0;	list-style: none;}

/* Copy Right Footer */
.footer-copyright {	background: rgb(17,14,78);	padding: 5px 0;}
.footer-copyright .logo {    display: inherit;}
.footer-copyright nav {    float: right;    margin-top: 5px;}
.footer-copyright nav ul {	list-style: none;	margin: 0;	padding: 0;}
.footer-copyright nav ul li {	border-left: 1px solid #505050;	display: inline-block;	line-height: 12px;	margin: 0;	padding: 0 8px;}
.footer-copyright nav ul li a{	color: #969696;}
.footer-copyright nav ul li:first-child {	border: medium none;	padding-left: 0;}
.footer-copyright p {	color: white;	margin: 2px 0 0;}

/* Footer Top */
.footer-top{	background: #252525;	padding-bottom: 30px;	margin-bottom: 30px;	border-bottom: 3px solid #222;}

/* Footer transparent */
footer.transparent .footer-top, footer.transparent .main-footer{	background: transparent;}
footer.transparent .footer-copyright{	background: none repeat scroll 0 0 rgba(0, 0, 0, 0.3) ;}

/* Footer light */
footer.light .footer-top{	background: #f9f9f9;}
footer.light .main-footer{	background: #f9f9f9;}
footer.light .footer-copyright{	background: none repeat scroll 0 0 rgba(255, 255, 255, 0.3) ;}

/* Footer 4 */
.footer- .logo {    display: inline-block;}

/*==================== 
	Widgets 
====================== */
.widget{	padding: 20px;	margin-bottom: 40px;}
.widget.widget-last{	margin-bottom: 0px;}
.widget.no-box{	padding: 0;	background-color: transparent;	margin-bottom: 40px;
	box-shadow: none; -webkit-box-shadow: none; -moz-box-shadow: none; -ms-box-shadow: none; -o-box-shadow: none;}
.widget.subscribe p{	margin-bottom: 18px;}
.widget li a{	color: #ff8d1e;}
.widget li a:hover{	color: #4b92dc;}
.widget-title {margin-bottom: 20px;}
.widget-title span {background: #839FAD none repeat scroll 0 0;display: block; height: 1px;margin-top: 25px;position: relative;width: 20%;}
.widget-title span::after {background: inherit;content: "";height: inherit;    position: absolute;top: -4px;width: 50%;}
.widget-title.text-center span,.widget-title.text-center span::after {margin-left: auto;margin-right:auto;left: 0;right: 0;}
.widget .badge{	float: right;	background: #7f7f7f;}

.typo-light h1, 
.typo-light h2, 
.typo-light h3, 
.typo-light h4, 
.typo-light h5, 
.typo-light h6,
.typo-light p,
.typo-light div,
.typo-light span,
.typo-light small{	color: #fff;}

ul.social-footer2 {	margin: 0;padding: 0;	width: auto;}
ul.social-footer2 li {display: inline-block;padding: 0;}
ul.social-footer2 li a:hover {background-color:#ff8d1e;}
ul.social-footer2 li a {display: block;	height:30px;width: 30px;text-align: center;}
.btn{background-color: #ff8d1e; color:#fff;}
.btn:hover, .btn:focus, .btn.active {background: #4b92dc;color: #fff;
-webkit-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
-moz-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
-ms-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
-o-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
-webkit-transition: all 250ms ease-in-out 0s;
-moz-transition: all 250ms ease-in-out 0s;
-ms-transition: all 250ms ease-in-out 0s;
-o-transition: all 250ms ease-in-out 0s;
transition: all 250ms ease-in-out 0s;

}


	</style>
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

	</style>
</head>

<!-- /.container -->

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 

<div id="ho">
	<nav class="navbar navbar-expand-sm" style="background-color:rgb(21,32,75);">
  <!-- Links -->
  
  <ul class="navbar-nav" >
  	 <li class="nav-item">
      <a class="nav-link"  href="juw.php"><img src="1.png" class="rounded-circle" alt="LOGO" title="Home" width="100" height="50" style="background-color:black;"></a>
    </li>
    <li class="nav-item">
      <h1 style="font-family:Comic Sans MS, cursive, sans-serif; color:white;" >UniChat</h1>
    </li>
  

    <li class="nav-item">
      <a class="nav-link" id="T" href="t.php" style="color:rgb(159,255,255);margin-left:70px; margin-top: 10px;">PrivateChat</a>
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
			<div class="col-md-3 col-sm-3 col-xs-12 left-sidebar"style="margin-left:950px;">
				
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

					<div class="col-md-12 right-header" style="margin-top:500px;">
						<div class="right-header-detail">
							<form method="post">
								<p><?php echo"<h1>$username</h1>";?></p>
								<span style="font-size:20px;">You have&nbsp;&nbsp;<?php echo $total; ?> messages</span>&nbsp &nbsp
								
							</form>
							
						</div>
					</div>
				</div>
				<div class="row" >
					<div id="scrolling" class="col-md-12 right-header-contentChat">
						
						<!--Yeh read kya ya nii msg isko show krega code  --><?php
						$update_msg = mysqli_query($con, "UPDATE users_chats SET msg_status='read' WHERE sender_username='$username' AND receiver_username='$user_name'");

						$sel_msg = "select * from users_chats where (sender_username='$user_name' AND receiver_username='$username') OR (receiver_username='$user_name' AND sender_username='$username') ORDER by 1 ASC"; 
						$run_msg = mysqli_query($con,$sel_msg);		
						if($run_msg){
						while($row=mysqli_fetch_array($run_msg)){
			
						$sender_username = $row['sender_username'];
						$receiver_username = $row['receiver_username'];
						$msg_content = $row['msg_content'];
						$msg_status = $row['msg_status'];
						$msg_date = $row['msg_date'];
						$msg_time = $row['msg_time'];
                        }
                    }
                    else{
                    	echo $sel_msg;
                    }
						
						
							<!-- Yeh Jo msg bhej ra hai wo side ki coding hai-->
						
                      

						if($user_name == $sender_username AND $username == $receiver_username){

							echo"
								<li>
								<div id='rcc'>
									<div id='message' style='color:black;background-color:rgb(153,217,234);'>
										<span > Me  <small style='font-size:20px;margin-left:550;'>$msg_time</small> </span><br><br>
										<p style='font-family:Times New Roman, Times, serif; font-size:20px;'>$msg_content</p>

										<p style='color:green;margin-left:700px;font-size:20px;'>$msg_status</p>
									</div>
									</div>
								</li>
							";
						}

						else if($user_name == $receiver_username AND $username == $sender_username){
							echo"
								<li>
								<div class='rightside'style='color:black;background-color:rgb(255,213,226);>
										<span> $username <small style='font-size:20px;margin-left:550;'>$msg_time</small> </span><br><br>
										<p style='color:black;font-family:Times New Roman, Times, serif;font-size:30px;'>$msg_content</p>
										<p style='color:blue;font-family:Times New Roman, Times, serif;font-size:20px;margin-left:700px;'>$msg_status</p>
									</div>
								</li>

							";
						}


						?>
						</ul>
						
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 right-chat-textbox" id="d">
						
						<form method="post" >
						<input autocomplete="off" type="text" name="msg_content" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Write your message..."style="width:87%;margin-left:40px;border:1px solid black;">
						<button class="btn-info" name="submit" onclick="getData()"  style="width:6%; border:1px solid black;"> Send</button>
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
			}
    
         
          
			 if(strlen($msg) > 100){
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

			}
		}
	?>

	
	


<?php } ?>