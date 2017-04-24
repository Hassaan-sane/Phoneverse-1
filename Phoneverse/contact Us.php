<?php require("requires/connection.php"); ?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Us</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <link href="css/phonestyle.css" rel="stylesheet" type="text/css" />
  

  
  
  <style>
	
  </style>
</head>

<body>
<?php include("includes/header.php"); ?>


<h2 align="center">Contact Us</h2><br/>
<div class="container">
<div class="col-md-8">
<table>
<tr>
	<td><strong>Name: </strong></td>
    <td><input type="text" name="fname" placeholder="Enter your name" size="30"></td>
</tr>
<tr>
	<td><strong>E-mail: </strong></td>
    <td><input type="email" name="e-mail" placeholder="Enter your e-mail" size="30"></td>
</tr>
<tr>
	<td><strong>Phone: </strong></td>
    <td><input type="tel" name="phone" placeholder="Enter your phone number" size="30"></td>
</tr>
<tr>
	<td><strong>City: </strong></td>
    <td><select type="text" name="City">
    <option name="Lahore" selected>Lahore</option>
    <option name="Karachi">Karachi</option>
    </select></td>
<tr>
	<td><strong>Role: </strong></td>
    <td><input type="radio" name="Role" >Teacher
    <input type="radio" name="Role" >Student</td>
    

</tr>
    
</tr>
<tr>
    <td align="top"><strong>Message: </strong></td>
    <td><textarea type="text" name="message" cols="38" rows="6" placeholder="Write message here..."></textarea></td>
</tr>
<tr>
	<td colspan="2" align="right">
    <input type="submit" name="submit" value="Submit"></td>
</tr>
</table>
</div>
<div class="col-md-4"><h4>Our Address:</h4>
	<p>Opposite to XYZ mall, DHA H-Block, Lahore, Pakistan.</p>
    <div id="map" style="width:400px;height:400px;background:yellow"></div>
      <script>
function myMap() {
var mapOptions = {
    center: new google.maps.LatLng(31.5546, 74.357),
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.HYBRID
}
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBA8exdk2dNfdMfLVtLGdIk_m7lyCxOa2k&callback=myMap"></script>

</div>
</div>
<br>
<?php include("includes/footer.php"); ?>

</body>
</html>
