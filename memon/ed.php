 
<html>
<head><title>EDIT </title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="s.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
<style>
  body{
  background-image:url('9.jpg');
font-family: sans-serif;
  
}

#O{
      background-color: rgb(5, 50, 70);
     }
     #ho ul li a:hover{

  background-color: rgb(5, 50, 70);
  color: rgb(243, 245, 192  );
}
.s{
margin-top: 60px;
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
}
.s input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.s input[type="submit"]:hover
{
    cursor: pointer;
    background: #39dc79;
    color: #000;
}
.s input{
    width: 100%;
    margin-bottom: 20px;
}
.s input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;

}
.av{
    width: 100px;
    height: 90px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}

</style>
</head>

<body>


<nav class="navbar navbar-expand-sm" id="ho" style="background-color:rgb(21,32,75);">
  
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link"  href="ahome.php"><img src="1.png" class="rounded-circle" alt="LOGO" title="Home" width="80" height="50" style="background-color:black;"></a>
    </li>
    <li class="nav-item">
      <h1 style="font-family:Comic Sans MS, cursive, sans-serif; color:white;" >UniChat</h1>
    </li>
    <li class="nav-item">
      <a class="nav-link"  style="color:rgb(159,255,255);margin-left: 10px;margin-top: 10px;" href="insert.php">Add</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" style="color:rgb(159,255,255);margin-left: 10px;margin-top: 10px;" id="O" href="up.php">Update </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" style="color:rgb(159,255,255);margin-left: 10px;margin-top: 10px;" href="#">Delete</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" style="color:rgb(159,255,255);margin-left: 10px;margin-top: 10px;" href="view.php">View</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" style="color:rgb(159,255,255);margin-left: 10px;margin-top: 10px;" href="GM.php">View Graph</a>
    </li>
    <?php
session_start();
if (isset($_SESSION['E'])){

echo '<a href="alogout.php" style="text-decoration:none;margin-top:7px;font-family:sans-serif;font-size:30px;margin-left:600px;color:white;">Logout</a>'; 
}
else{
  header("location:alogin.php");
}

?>

  </ul>
</nav>













 <?php
include("kon.php");
$id= $_GET['i'];
$user= $_GET['un'];
$umail= $_GET['em'];
$ua= $_GET['ar'];
$fact= $_GET['ft'];

?>
<html>
<div class="s">
  <img src="0.png" class="av">
    <h1 style="font-family: sans-serif;text-align:center;color:white;margin-top:-4px;">Update Here</h1>
<form method="post" action="">
	Username:<br><input type="text" name="us" value="<?php echo $user; ?>" placeholder="Username"   /><br>
	Email:<br><input type="text" name="ei" value="<?php echo $umail; ?>" placeholder="Email"  /><br>
	Faculty : <select name="fa" > <br>  
  <option value="<?php echo $fact; ?>"><?php echo $fact; ?></option>}  
  <option value="Pharmacy">Pharmacy</option>  
  <option value="Science">Science</option>  
  <option value="Business Administration">Business Administration</option>
  <option value="Arts">Arts</option>  
    
   
</select> <br>
Area:<select name="area">  
  <option value="<?php echo $ua; ?>"><?php echo $ua; ?></option>}  
  <option value="Baldia Town">Baldia Town</option>  
  <option value="Bin Qasim Town">Bin Qasim Town</option>  
  <option value="Gadap Town">Gadap Town</option>
  <option value="Gulberg Town">Gulberg Town</option>  
  <option value="Gulshan Town">Gulshan Town</option>  
  <option value="Jamshed Town">Jamshed Town</option>  
  <option value="Kiamari Town">Kiamari Town</option> 
  <option value="Korangi Town">Korangi Town</option>   
  <option value="Landhi Town">Landhi Town</option>  
  <option value="Liaquatabad Town">Liaquatabad Town</option>  
  <option value="Lyari Town">Lyari Town</option> 
  <option value="Malir Town">Malir Town</option>
  <option value="New Karachi Town">New Karachi Town</option>  
  <option value="North Nazimabad Town">North Nazimabad Town</option>  
  <option value="Orangi Town">Orangi Town</option> 
  <option value="Saddar Town">Saddar Town</option> 
  <option value="Shah Faisal Town">Shah Faisal Town</option>
   <option value="SITE Town">SITE Town</option>   
    
</select> <br><br>
<input type="submit" class="btn-info" value="Update" name="done" />
</form>
</div>
</html>
<?php
if(isset($_POST['done'])){
	$uname=$_POST['us'];
	$el=$_POST['ei'];
	$f=$_POST['fa'];
	$a=$_POST['area'];
  
 $update = mysqli_query($con, "UPDATE student SET Username='$uname',Email='$el',Faculty='$f',Area='$a' WHERE Id='$id'");
 if($update){
  echo "<script>
  alert('Data Update Ho gya hai! ');
  </script>";
 }
}
else{
  echo "";
}

?>
<footer>
          <div class="footer-top" style="background-color: rgb(21,32,75);margin-top: 700px;">
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





</body>
</html>