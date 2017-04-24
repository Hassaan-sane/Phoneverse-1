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
<title>Admin View Products</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.css" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="Admin-style.css">
  
  <script type="text/javascript">
  function del(id){
		
		if(confirm("Are you sure?"))
		
		{
			window.location.href='Admin-delete-page.php?pId='+id;
		}
		
		
	}
	</script>
  
  <style>


  </style>
</head>

<body>
<?php include("header.php"); ?>
<br>
<br>
<br>

<div id="c1">
<table width="100%" border="0">
  <tr>
    <td style="border-bottom:1px solid" width="10%"><strong>Product Id</strong></td>
    <td style="border-bottom:1px solid" width="10%"><strong>Product Image</strong></td>
    <td style="border-bottom:1px solid" width="10%"><strong>Product Name</strong></td>
    <td style="border-bottom:1px solid" width="8%"><strong>Product Price</strong></td>
    <td style="border-bottom:1px solid" width="8%"><strong>Product Code</strong></td>
    <td style="border-bottom:1px solid" width="8%"><strong>Product in Stock</strong></td>
    <td style="border-bottom:1px solid" width="8%"><strong>Product Status</strong></td>
    <td style="border-bottom:1px solid" width="10%"><strong>Product Discount</strong></td>
    <td style="border-bottom:1px solid" width="10%"><strong>Product Sizes</strong></td>
    <td style="border-bottom:1px solid" width="10%"><strong>Operations</strong></td>
  </tr>
  
  <?php
  		$sql="SELECT * FROM tblproducts";
		$result=mysqli_query($connect, $sql) or die("ERROR!");
		//$count=mysqli_num_rows($result);
		$file_path="http://localhost/Phoneverse/images/";
			while($row = mysqli_fetch_array($result))
			{
				$id=$row["productId"];
				?>
            
              <tr style="border-bottom:1px solid">
                <td style="border-bottom:1px solid"><?php echo $row["productId"]; ?></td>
                <td style="border-bottom:1px solid"><?php $src=$file_path.$row["productImgAddress"];echo "<img src='$src' width='100' height='70'>"; ?></td>
                <td style="border-bottom:1px solid"><?php echo $row["productName"] ?></td>
                <td style="border-bottom:1px solid"><?php echo $row["productPrice"] ?></td>
                <td style="border-bottom:1px solid"><?php echo $row["productCode"] ?></td>
                <td style="border-bottom:1px solid"><?php if ($row["productInstock"] == 1 ){ echo "In Stock"; }else{echo "Not in Stock";}?></td>
                <td style="border-bottom:1px solid"><?php if ($row["productStatus"] == 1 ){ echo "Published"; }else{echo "Not Published";}?></td>
                <td style="border-bottom:1px solid"><?php echo $row["productDiscount"] ?></td>
                <td style="border-bottom:1px solid"><?php echo $row["productSizes"] ?></td>
                <td style="border-bottom:1px solid"><a href="Admin-edit-page.php?pId=<?php echo $id; ?>">Edit</a> | 
                <a onclick="del('<?php echo $id; ?>')" >Delete</a></td>
              </tr>
            
			<?php
			}
	?>
    
</table>    
</div>
<br><br><br><br><br>
</body>
</html>
<?php 

}

else
	{
		header("Location: Admin-Login page.php");
	}
?>