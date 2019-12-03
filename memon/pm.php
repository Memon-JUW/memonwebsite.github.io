<?php
require_once("kon.php");
?>
<html><head><title>Message</title>
<style>
.m-header, .m-footer{
	background:#233070;
	color:white;
}
.m-header{
	font-size:20px;
	text-align: center;
}

</style>
</head>
<body>
	<div id="left">
		<button onclick="document.getElementById('new').style.display='block'"> New</button>

	</div>


<div id="new" style="display: none;">
	<p class="m-header">New Message</p>
	<p class="m-body">
		<form method="post" align="center">
			<input type="text" list="user" onkeyup="check_in_db()" placeholder="username" name="un" id="user_name"/><br><br>
			<textarea placeholder="Message Yahan Likhen!"></textarea>
			<input type="submit" value="Send" name="sb"/>
			<button onclick="document.getElementById('new').style.display='none'">Cancel</button>
		</form>
	</p>
	<p class="m-footer">Click to Send</p>

</div>
<script>
	function check_in_db(){
		var username=document.getElementById("user_name").value
	}
	$.post("memon/check.php",{
		user:username
	}
	</script>
</body>
</html>