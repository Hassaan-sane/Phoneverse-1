<?php require("requires/connection.php"); ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Products</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <link href="css/phonestyle.css" rel="stylesheet" type="text/css" />
 
 
  <style>

</style>
</head>

<body>

<?php include("includes/header.php");?>
<div class=" container">

<?php
$sql="SELECT * from tblproducts;";

$result= mysqli_query($connect,$sql) or die("ERROR");
$file_path="http://localhost/Phoneverse/images/";

$count=1;

while ($row=mysqli_fetch_array($result))
{
	
	$src=$file_path.$row["productImgAddress"];

	if($row['productStatus']==1)
	{
 ?>

	<div class="col-md-2 col-sm-2 col-xs-2">
    	<div class="img" >
   			<a target="_blank" href="Products-detail.php?pId=<?php echo $row['productId'];?>" > <?php echo "<img src='$src' width='100' height='70'>"; ?></a>
			<div style="text-align:center" ><?php echo $row['productName'];  ?></div>
  		</div>
	</div>
 <?php 
 if($count==6)
 {?>   </div> <div class=" container">   <?php } 

 $count++;
 
 } }?>
</div>
<?php include("includes/footer.php"); ?>

</body>
</html>
