<?php require("../requires/connection.php");?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="Admin-style.css">
<style>
</style>
</head>

<body>
<div class="row">
	<div class="col-md-2 col-xs-4"><img src="../images/main-logo.png" alt="PhoneVerse" width="450" height="100"></div>
    <div class="col-md-8 col-xs-4"></div>
 	<div class="col-md-2 col-xs-4"><br></div>
</div>
<br>
<br>
<br>
<br>

<br>
<h1 align="center">Welcome to the Login Page</h1>
<form name="loginForm" method="post" action="Admin-login-process.php">
<br/>

<table align="center">
	<tr>
    	<td colspan="2"><b>User Login</b></td>
    </tr>
    <tr>
    	<td height="33">Username:</td>
        <td height="33"><input type="text" name="userName"></td>
    </tr>
    <tr>
    	<td height="33">Password:</td>
        <td height="33"><input type="password" name="userPassword"></td>
    </tr>
    <tr>
        <td height="33"><input type="submit" name="Submit" value="Login"></td>
    </tr>
    
</table>
</form>
</body>
</html>
