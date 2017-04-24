<?php
	require("../requires/connection.php");
	session_start();
	
	if(isset($_SESSION['userName']))
{
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Products</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.css" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="Admin-style.css">

  <style>


  </style>
</head>

<body>
<?php include("header.php"); ?>

<div id="c1">
<form name="myform" action="Admin-add process.php" method="POST" enctype="multipart/form-data">
<table border="0">
	<tr><td height="33"></td></tr>
	<tr>
    	<td height="33"><h3>Add Product Details</h3></td>
    </tr>
    <tr>
    	<td height="33">Product Name</td>
        <td height="33"><input type="text" name="productName" value="" required></td>
    </tr>
    <tr>
    	<td height="33">Product Price</td>
        <td height="33"><input type="number" name="productPrice" value="" required></td>
    </tr>
    <tr>
        <td height="33">Product In Stock</td>
        <td height="33"><select name="productInStock">
            <option value="1" >In Stock</option>
            <option value="0" >Not In Stock</option>
            </select>
		</td>
  	</tr>
    <tr>
        <td height="33">Product Status</td>
        <td height="33"><select name="productStatus">
            <option value="1" >Published</option>
            <option value="0" >Not Published</option>
            </select>
		</td>
  	</tr>
    <tr>
    	<td height="33" valign="top">Product Code</td>
    	<td height="33" valign="top"><input type="text" name="productCode" required></td>
    </tr>
    <tr>
    	<td height="33">Product Discount</td>
        <td height="33"><input type="number" name="productDiscount" ></td>
    </tr>
    <tr>
    	<td height="33">Available Sizes</td>
        <td height="33"><input type="text" name="availableSizes" value=""></td>
    </tr>
    <tr>
    	<td height="33" valign="top">Product Details</td>
    	<td height="33" valign="top"><textarea cols="50" rows="5" name="productDetails"></textarea></td>
    </tr>
	<tr>
    	<td height="33" valign="top">Product Image</td>
    	<td height="33" valign="top"><input type="file"  name="image" required></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="Submit" value="Add Product"/></td>
 	</tr>
</table>
</form>
</div>
</body>
</html>

<?php }

else
	{
		header("Location: Admin-Login page.php");
	}
?>

