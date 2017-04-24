<?php require("../requires/connection.php");
session_start();



if(isset($_SESSION['userName']))

{

 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Home</title>
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
<h2><b>Home</b></h2>
<h5>Welcome to Home, Admin.</h5>
</div>
</body>
</html>

<?php }

else
	{
		header("Location: Admin-Login page.php");
	}
?>
