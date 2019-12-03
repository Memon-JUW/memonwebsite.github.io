<html>
<head><title>Admin Home Page</title>
	<link rel="stylesheet" type="text/css" href="a.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>

<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  
  
  <!-- Links -->
  <ul class="navbar-nav">
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
    <?php
session_start();
if (isset($_SESSION['un'])){

echo '<a href="alogout.php" style="text-decoration:none;margin-top:7px;font-family:sans-serif;font-size:30px;margin-left:600px;color:white;">Logout</a>'; 
}
else{
	header("location:login.php");
}

?>

  </ul>
</nav>





</body>
</html>