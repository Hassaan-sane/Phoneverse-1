<?php require("requires/connection.php"); ?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
 
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <link href="css/phonestyle.css" rel="stylesheet" type="text/css" />
  
</head>

<body>

<?php include("includes/header.php") ?>

<br>

<?php include("includes/banner.php") ?>

<div><h1>PhoneVerse</h1></div>

<div style="margin-left: 50px; margin-right:50px;"><p>This site brings you the information about the latest and upcoming phones in the market.</p></div>

<div><h3>HOT Products</h3></div>
<div class="container">
<?php
  
  $sql="SELECT * from tblproducts";
  $result=mysqli_query($connect,$sql);
  $count=mysqli_num_rows($result);
  $file_path="http://localhost/Phoneverse/images/";
  
  
  $newcount=$count-3;
  $temp=0;
while($row=mysqli_fetch_array($result))
{
	
	if($temp>=$newcount)
	
	{
		$temp++;
		
		
		if($newcount<$count)
		{
			
		$src=$file_path.$row["productImgAddress"];
		$newcount++;
 		?>



	<div class="col-md-4 col-sm-4 col-xs-4">
    	<div class="img" style="width: 300px;" >
   			<a href="Products-detail.php?pId=<?php echo $row['productId'];?>" > <?php echo  "<img src='$src' width='100' height='70'></a>" ?>
    		<div style="text-align:center" ><?php echo $row['productName'] ?></div>
  		</div>
	</div> 
    
    <?php
		}
		
	}
	else $temp++;		
}
	 ?>
</div>
<br>
<?php include("includes/footer.php");  ?>

</body>
</html>
