<?php
require_once("kon.php");
$r="CREATE TABLE sms(
Id int(255),
Username varchar(255),
Message varchar(255)

)";

$v=mysqli_query($con,$r);
if($v){
	echo "Good";

}
else{
	echo "Sorry";
}




?>