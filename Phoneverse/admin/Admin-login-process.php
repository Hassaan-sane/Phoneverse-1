<?php
	require("../requires/connection.php");
	
	$userName=$_POST['userName']; 
	$userPassword=$_POST['userPassword']; 
	
	
	$encriptedPass=md5($userPassword);

		
		$sql="SELECT * FROM tblusers WHERE username='".$userName."' and userpassword ='".$encriptedPass."'";
				
		$result=mysqli_query($connect,$sql);		
		$count=mysqli_num_rows($result);

		if($count==1)
		{		
			session_start();
			
			$_SESSION['userName']=$userName;
			$_SESSION['userPassword']=$encriptedPass;
			
			header("Location: Admin-Home.php");
			exit();
		}
		else 
		{
			echo "Wrong Username or Password, try again";
		}


?>