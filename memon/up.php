<html>
<head><title>UPDATE</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
>
<link rel="stylesheet" href="s.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">

<style>
  body{
  background-image:url('9.jpg');
font-family: sans-serif;
background-position: center;
    
    background-size: cover;

  
}

#O{
      background-color: rgb(5, 50, 70);
     }
     #ho ul li a:hover{

  background-color: rgb(5, 50, 70);
  color: rgb(243, 245, 192  );
}

table{
  border-collapse: collapse;
  width:100%;
  font-family:monospace;
  font-size:20px;
  color:black;
  text-align:left;
}
th{
  background-color:#0B4740;
  color:white;
}

tr:nth-child(even){
  background-color:#f2f2f2;
}

</style>
</head>
<body>
<nav class="navbar navbar-expand-sm" id="ho" style="background-color:rgb(21,32,75);">
  
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" id="O" href="ahome.php"><img src="1.png" class="rounded-circle" alt="LOGO" title="Home" width="80" height="50" style="background-color:black;"></a>
    </li>
    <li class="nav-item">
      <h1 style="font-family:Comic Sans MS, cursive, sans-serif; color:white;" >UniChat</h1>
    </li>
    <li class="nav-item">
      <a class="nav-link" style="color:rgb(159,255,255);margin-left: 10px;margin-top: 10px;" href="insert.php">Add</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" style="color:rgb(159,255,255);margin-left: 10px;margin-top: 10px;" id="O" href="up.php">Update</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" style="color:rgb(159,255,255);margin-left: 10px;margin-top: 10px;" href="de.php">Delete</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" style="color:rgb(159,255,255);margin-left: 10px;margin-top: 10px;"  href="view.php">View</a>
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

<table>
<tr>
	<th style='border:2px solid black;'>Id</th>
	<th style='border:2px solid black;'>Username</th>
	<th style='border:2px solid black;'>Email</th>
	<th style='border:2px solid black;'>Password</th>
	<th style='border:2px solid black;'>Faculty</th>
	<th style='border:2px solid black;'>Batch</th>
	<th style='border:2px solid black;'>Source</th>
	<th style='border:2px solid black;'>Area</th>
  <th style='border:2px solid black;'>Operation</th>
</tr>
<?php	
require_once("kon.php");
$sq="SELECT Id,Username,Email,Password,Faculty,Batch,Source,Area FROM student";
$r=$con->query($sq);
if( $r-> num_rows > 0){
while($row= $r->fetch_assoc()){
	echo"<tr><td style='border:2px solid black;font-weight:700;'>".$row["Id"]."</td><td style='border:2px solid black;font-weight:700;'>".$row["Username"]."</td><td style='border:2px solid black;font-weight:700;'>".$row["Email"]."</td><td style='border:2px solid black;font-weight:700;'>".$row["Password"]."</td><td style='border:2px solid black;font-weight:700;'>".$row["Faculty"]."</td><td style='border:2px solid black; font-weight:700;'>".$row["Batch"]."</td><td style='border:2px solid black; font-weight:700;'>".$row["Source"]."</td><td style='border:2px solid black; font-weight:700;'>".$row["Area"]."</td><td style='border:2px solid black; font-weight:700;'><a href='ed.php? i=$row[Id]  & un=$row[Username] & em=$row[Email] & ps=$row[Password] & ft=$row[Faculty] & b=$row[Batch] & sr=$row[Source] & ar=$row[Area]'>Edit</a></td></tr>";
}
echo "</table>";
}
else{
	echo "No Data";
}

?>
</table>	

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









</body>
</html>	