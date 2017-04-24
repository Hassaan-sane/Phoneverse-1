<?php
require("../requires/connection.php");

if(isset($_POST['productName'])){
	
	

	$productId		= $_POST['productId'];
	$productName	= $_POST['productName']; 
	$productPrice	= $_POST['productPrice']; 
	$productInStock	= $_POST['productInStock'];
	$productStatus	= $_POST['productStatus']; 
	$productCode    = $_POST['productCode'];
	$productDiscount = $_POST['productDiscount'];
	$availableSizes = $_POST['availableSizes'];
	$productDetails = $_POST['productDetails'];
	$img 			=$_FILES['file']['name'];
	
	
	
	
	if( $img != '')
	{
		$folder = "../images/";
		$newadd=$_POST['productId'].$_FILES["file"]["name"];
		$path=$folder.$newadd;
		
		move_uploaded_file($_FILES["file"]["tmp_name"], $path);
		
		
		$sql="UPDATE tblproducts SET
			productName= '$productName',
			productPrice= '$productPrice',
			productInStock= '$productInStock',
			productStatus= '$productStatus',
			productCode= '$productCode',
			productDiscount= '$productDiscount',
			productSizes= '$availableSizes',
			productDetails= '$productDetails', 
			productImgAddress= '$newadd'
			
			WHERE productId= '$productId'";
	$result=mysqli_query($connect,$sql);
		
	}
	
	else {
		
	$sql1="UPDATE tblproducts SET
			productName= '$productName',
			productPrice= '$productPrice',
			productInStock= '$productInStock',
			productStatus= '$productStatus',
			productCode= '$productCode',
			productDiscount= '$productDiscount',
			productSizes= '$availableSizes',
			productDetails= '$productDetails' 
			WHERE productId= '$productId'";
	
	$result=mysqli_query($connect,$sql1);
	
	}
	
	
	
	
	
	if(!$result)
	{
		echo "Error!!";
	}
	else
	{
		header("Location:Admin-View products.php");
	}		


}
?>