<?php require("requires/connection.php"); ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Products-detail</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <link href="css/phonestyle.css" rel="stylesheet" type="text/css" />
  
  <style>
  </style>
</head>

<body>
<?php include("includes/header.php");

$sql="SELECT * from tblproducts WHERE productId='".$_GET['pId']."'";

$result= mysqli_query($connect,$sql) or die("ERROR");
$file_path="http://localhost/Phoneverse/images/";

$count=1;

while ($row=mysqli_fetch_array($result))
{
	
	$src=$file_path.$row["productImgAddress"];


?>

<br>

<div class="container">
<div class="col-md-4">
    	<div class="img" style="width: 300px;" >
   			<?php echo"<img  src='$src'  width='250' height='200'>";?>
    		<div style="text-align:center" ><?php echo $row['productName']; ?></div>
  		</div>
</div>


<div class="col-md-4">
	<table width="200" border="0">
  <tbody>
    <tr>
      <th scope="row">Product Price:</th>
      <td><?php echo $row['productPrice']; ?></td>
    </tr>
    <tr>
      <th scope="row">Product Code:</th>
      <td><?php echo $row['productCode']; ?></td>
    </tr>
    <tr>
      <th scope="row">Product in Stock:</th>
      <td><?php echo $row['productInstock']; ?></td>
    </tr>
    <tr>
      <th scope="row">Product Discount:</th>
      <td><?php echo $row['productDiscount']; ?></td>
    </tr>
    <tr>
      <th scope="row">Available Sizes:</th>
      <td><?php echo $row['productSizes']; ?></td>
    </tr>
  </tbody>
</table>


</div>
<div class="col-md-2"></div>
<div class="col-md-2"></div>
</div>


<br>
<h2>Product Details</h2>
<P><?php echo $row['productDetails']; ?></P>

<?php } 
include("includes/footer.php"); ?>
</body>
</html>
