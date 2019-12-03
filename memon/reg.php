<html>
<head><title>Registeration Form</title>
<link rel="stylesheet" type="text/css" href="TT.css">
</head>
<body >
    <div class="E">
        <img src="0.png" class="av">
        <h1 style="font-family: sans-serif;text-align:center;margin-top:-4px;">Register Here</h1>
<form action="" method="post">
User Name:<br>
<input type="text"	 name="un" value="" placeholder="User Name" required /><br>
Email:<br>
<input type="text"	 name="em" value="" placeholder="Email" required/><br>
Password:<br>
<input type="Password"	 name="ps" value="" placeholder="Password" reuired/><br>
Faculty : <select name="ft"> <br>  
  <option value="Select">Select</option>}  
  <option value="Pharmacy">Pharmacy</option>  
  <option value="Science">Science</option>  
  <option value="Business Administration">Business Administration</option>
  <option value="Arts">Arts</option>  
    
   
</select> <br>
Batch : <select name="batch"> <br>  
  <option value="Select">Select</option>}  
  <option value="2015">2015</option>  
  <option value="2016">2016</option>  
  <option value="2017">2017</option>
  <option value="2018">2018</option>  
  <option value="2019">2019</option>  
   
</select> <br>
Source:<select name="so">  
  <option value="Select">Select</option>}  
  <option value="Realtives">Relatives</option>  
  <option value="Friend">Friend</option>  
  <option value="Others">Others</option>  
  <option value="By Myself">By Myself</option>  
    
</select> <br>
Area:<select name="area">  
  <option value="Select">Select</option>}  
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
    
</select> 

<input type="submit" name="s" value="Register" />
<a href="login.php"style="text-decoration:none;">Have An Account? Login</a>
	</form>
</div>
	<?php
	require_once("kon.php");
if(isset($_POST['s'])){
		$du=$_POST['un'];
	$de=$_POST['em'];
    $dp=$_POST['ps'];
    $dft=$_POST['ft'];
  $dbatch=$_POST['batch'];
    $dso=$_POST['so'];
     $dar=$_POST['area'];
     

    if($du !="" and $de !="" and $dp !="" ){
    	mysqli_select_db($con,'smanagement');
    	$chk="select * from student where Username='$du' && Password='$dp' && Email='$de'";
    	$result=mysqli_query($con,$chk);
    	$num=mysqli_num_rows($result);

    	if($num==1 ){
    	
    		echo "Username and Password or Email Already Exist!<br>Plz Try a new one!";

    	}else{
    	  if($dft!='Select' and $dbatch!='Select' and $dso!='Select' and $dar!='Select'){
    	     $daal="INSERT INTO `student`(`id`,`Username`,`Email`,`Password`,`Faculty`,`Batch`,`Source`,`Area`)
                VALUES('','".$du."','".$de."','".$dp."','".$dft."','".$dbatch."','".$dso."','".$dar."')";
                if(mysqli_query($con,$daal)){
        	      header("location:login.php"); }}

                      else{
        	          echo "<script>alert('Plz Select Your Option!');</script>";
                        }
   

   
  }  
}
}



	?>
</body>
</html
