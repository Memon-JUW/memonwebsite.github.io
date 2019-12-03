<?php
require_once("kon.php");
$wah=$_SESSION['un'];


	$user = "select * from student where Username != '$wah'";
			
	$run_user = mysqli_query($con,$user);

			
	while ($row_user=mysqli_fetch_array($run_user)){
			
	$user_id = $row_user['Id'];
	$user_name = $row_user['Username'];

	echo"
	<li>
		
		<div class='chat'>
			<p><a href='wah.php?Username=$user_name' style='color:black;text-decoration:none;font-size:20px;font-family:times new roman;font-weight:bold;'>$user_name</a></p>";
			

			"
		</div>
	</li>

	";
	}
?>			