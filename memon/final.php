<?php
include("kon.php");

session_start();
if (isset($_SESSION['un'])){
	$se=$_SESSION['un'];
}
else{
	header("location:login.php");
}
?>


<form method="post">
<input type="text" name="m" placeholder="Write here" value="">
<input type="submit" name="sb" value="SEND">


</form>
<div class="container main-section">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-12 left-sidebar"style="margin-left:950px;">
				
				<div class="left-chat">
					<ul >
						<?php include("g.php"); ?>
					</ul>
				</div>
			</div>



<?php
$r=$_GET['Username'];
if(isset($_POST['sb'])){
	$sn=$_SESSION['un'];
	$p=$_POST['m'];
	$d=date("y-m-d h:i:sa");

$t="INSERT INTO messages('id','sender_name','receiver_name','message_text','date_time')
VALUES('','$sn','$r','$p','.$d.')
";
}
else{
	echo "No";
}
?>