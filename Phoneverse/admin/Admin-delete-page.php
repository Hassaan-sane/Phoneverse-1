<?php
require("../requires/connection.php");

session_start();

if(isset($_SESSION['userName']))
{


$delete_record = $_GET['pId'];
	
	
	$query = "DELETE FROM tblproducts WHERE productId = '$delete_record'";
			  
		 $result= mysqli_query($connect, $query);
	
	if($result){
		
		echo "<script>window.open('Admin-View products.php?deleted=One record has been deleted successfully!' , '_self')</script>";
	}
	else
	{
		echo"ERROR";
	}




 }

else
	{
		header("Location: Admin-Login page.php");
	}
?>