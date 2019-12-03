<html>
<head><title>GROUPCHAT</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
       
        
	<style>
		body { font-family: 'Open Sans', sans-serif; font-size: 15px; font-weight: 400; color: #888; line-height: 30px;  }

strong { font-weight: 600; }

a { color: #79a05f; border-bottom: 1px dashed #79a05f; text-decoration: none; transition: all .3s; }
a:hover, a:focus { color: #79a05f; border: 0; text-decoration: none; }
			body{
		background-image: url('9.jpg');
font-family: sans-serif;
	}

.footer-top { padding: 60px 0; text-align: left; color: #fff; color: rgba(255, 255, 255, 0.8); }
.footer-top h3 { padding-bottom: 10px; color: #fff; }

.footer-about img.logo-footer { max-width: 74px; margin-top: 0; margin-bottom: 18px; }

.footer-contact p { word-wrap: break-word; }
.footer-contact i { padding-right: 10px; font-size: 18px; color: #fff; color: rgba(255, 255, 255, 0.5); }

.footer-links a { color: #fff; color: rgba(255, 255, 255, 0.8); border: 0; }
.footer-links a:hover, .footer-links a:focus { color: #fff; }

.footer-bottom { padding: 15px 0 17px 0; background: #444; text-align: left; color: #aaa; }

.footer-social { padding-top: 3px; text-align: right; }
.footer-social a { margin-left: 20px; color: #777; border: 0; }
.footer-social a:hover, .footer-social a:focus { color: #79a05f; border: 0; }
.footer-social i { font-size: 24px; vertical-align: middle; }

.footer-copyright { padding-top: 5px; }
.footer-copyright a { color: #fff; border: 0; }
.footer-copyright a:hover, .footer-copyright a:focus { color: #aaa; border: 0; }




		   #T{
     	background-color: rgb(5, 50, 70);
     }
     #ho ul li a:hover{

	background-color: rgb(5, 50, 70);
	color: rgb(243, 245, 192  );
}
#rcc{
		width:100%;
		height:90%;
		overflow:auto;
		margin:0px auto;
	    background-image:url('pi.jpg');	
	    color:black;
	    font-weight:bold;}
	#message{
		height:80%;
		
		overflow:auto;
	}
	.ta{
		width:100%;
		height:10%;
		position: absolute;

	}

	</style>
</head>
</html>


<?php
session_start();
if (isset($_SESSION['un'])){
	$se=$_SESSION['un'];
}
else{
	header("location:login.php");
}


?>
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
      <a class="nav-link"  href="wah.php" style="color:rgb(159,255,255);margin-left:70px; margin-top: 10px;">PrivateChat</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="T" href="gp.php" style="color:rgb(159,255,255);margin-left:5px; margin-top: 10px;">GroupChat</a>
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

		

			<div id="message">
					<?php
	include("kon.php");
	$qq="SELECT * FROM `sms`";
	$rq=mysqli_query($con,$qq);
	while($row=mysqli_fetch_assoc($rq)){
		$paigam=$row['Message'];
		$un=$row['Username'];
		echo '<h2 style="color:blue;font-weight:600;">'.$un.'</h2>';
		echo '<p style="color:black;font-weight:600;">'.$paigam.'</p>';
		echo '<hr>';
	}
 if(isset($_POST['sb'])){
 	$paigam=$_POST['message'];
 	$q='INSERT INTO `sms` (`Id`,`Username`,`Message`)
 	VALUES("","'.$_SESSION['un'].'","'.$paigam.'")
 	';
 	$r=mysqli_query($con,$q);
 	if($r){
 		echo '<h2 style="color:blue;font-weight:600;">'.$_SESSION['un'].'</h2>';
 		echo '<p style="color:black; font-weight:600;">'.$paigam.'</p>';
 	}

 }


	?>
					
		
			</div>
			<form method="post">
		<input type="text" name="message" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type Your Message Here" style="width:99%;height:90px;margin-top:0px;color:black;border: 4px solid black;margin-left:0.5%;"/>
		<input type="submit"  name="sb" class="btn-info" value="Send" style="margin-top:4px;margin-left:500px;width:20%;"/>
	</form>
	
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

