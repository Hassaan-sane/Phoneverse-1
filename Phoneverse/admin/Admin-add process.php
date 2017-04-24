<?php 
	require("../requires/connection.php");
	
	if(isset($_FILES["image"]["name"]))
	{
		
	$productName	= $_POST['productName']; 
	$productPrice	= $_POST['productPrice']; 
	$productInStock	= $_POST['productInStock'];
	$productStatus 	= $_POST['productStatus']; 
	$productCode    = $_POST['productCode'];
	$productDiscount = $_POST['productDiscount'];
	$availableSizes = $_POST['availableSizes'];
	$productDetails = $_POST['productDetails'];
	
	$folder = "../images/";
	$newadd=$_POST['productId'].$_FILES["image"]["name"]; 
	$path=$folder.$newadd;
	
	move_uploaded_file($_FILES["image"]["tmp_name"], $path);
	
	$sql = "INSERT INTO tblproducts (productName, productPrice, productInStock, productDiscount, productSizes, productDetails, productCode, productImgAddress, productStatus) VALUES ('".$productName."','".$productPrice."','".$productInStock."','".$productDiscount."','".$availableSizes."','".$productDetails."','".$productCode."','$newadd', '".$productStatus."')";
									
	$result = mysqli_query($connect,$sql);
 
	if(!$result)
	{
	  die('Could not enter data. ' . mysqli_error($connect));
	}
	else
	{
		header("Location: Admin-View products.php");
	}
	} 
	//mysql_close($connection);
	
	
?>