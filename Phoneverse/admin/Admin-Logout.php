<?php
require("../requires/connection.php");
session_start();
unset($_SESSION['userName']);
//	session_unset();
	//session_destroy();
	
	header("location:Admin-Login Page.php");
exit();

?>