<?php
require("../requires/connection.php");

session_start();

if(isset($_SESSION['userName']))
{

$update_record = $_GET['pId'];


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

<?php

$file_path="http://localhost/Phoneverse/images/";
$sql="SELECT * from tblproducts WHERE productId='$update_record'";
$result=mysqli_query($connect, $sql) or die("ERROR!");

while($row = mysqli_fetch_array($result))
			{
?>

<div id="c1">
<form name="myform" action="Admin-update process.php" method="POST" enctype="multipart/form-data">
<table border="0">
	<tr><td height="33"></td></tr>
	<tr>
    	<td height="33"><h3>Add Product Details</h3></td>
    </tr>
    <tr>
    	<td height="33">Product ID</td>
        <td height="33"><input type="text" name="productId" value="<?php echo $row["productId"]; ?>" readonly></td>
    </tr>
    <tr>
    	<td height="33">Product Name</td>
        <td height="33"><input type="text" name="productName" value="<?php echo $row["productName"]; ?>" required></td>
    </tr>
    <tr>
    	<td height="33">Product Price</td>
        <td height="33"><input type="number" name="productPrice" value="<?php echo $row["productPrice"]; ?>" required></td>
    </tr>
    <tr>
        <td height="33">Product In Stock</td>
        <td height="33"><select name="productInStock">
            
            <option value="1" <?php if ($row["productInstock"]=='1') echo 'selected="selected"'; ?> >In Stock</option>
            <option value="0" <?php if ($row["productInstock"]=='0') echo 'selected="selected"'; ?> >Not In Stock</option>
            </select>
            </select>
		</td>
  	</tr>
    
    <tr>
        <td height="33">Product Status</td>
        <td height="33"><select name="productStatus">
            
            <option value="1" <?php if ($row["productStatus"]=='1') echo 'selected="selected"'; ?> >Published</option>
            <option value="0" <?php if ($row["productStatus"]=='0') echo 'selected="selected"'; ?> >Not Published</option>
            </select>
		</td>
  	</tr>
    
    <tr>
    	<td height="33" valign="top">Product Code</td>
    	<td height="33" valign="top"><input type="text" name="productCode" value="<?php echo $row["productCode"]; ?>" required></td>
    </tr>
    <tr>
    	<td height="33">Product Discount</td>
        <td height="33"><input type="number" name="productDiscount" step="0.01" value="<?php echo $row["productDiscount"]; ?>" required></td>
    </tr>
    <tr>
    	<td height="33">Available Sizes</td>
        <td height="33"><input type="text" name="availableSizes" value="<?php echo $row["productSizes"]; ?>" required></td>
    </tr>
    <tr>
    	<td height="33" valign="top">Product Details</td>
    	<td height="33" valign="top"><textarea cols="50" rows="5" name="productDetails"><?php echo $row["productDetails"]; ?></textarea></td>
    </tr>
	<tr>
    	<td height="33" valign="top">Product Image</td>
    	<td height="33" valign="top"><?php $src=$file_path.$row["productImgAddress"];echo "<img src='$src' width='100' height='70'>"; ?></td>
    </tr><br><br>
	<?php } ?>
    <tr>
	
    	<td height="33" valign="top">Re-Upload Image</td>
    	<td height="33" valign="top"><input type="file"  name="file" ></td>
    
	</tr>
    <td></td>
    <tr>
        <td></td>
        <td height="33" valign="top"><input type="submit" name="Submit" value="Edit Product"/></td>
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