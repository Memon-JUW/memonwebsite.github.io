
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

	
	</div>