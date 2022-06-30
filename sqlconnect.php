<?php
	$address = "127.0.0.1";
	$user    = "root";
	$pass    = "";
	$database= "qlbanhang";
	$conn = mysqli_connect($address, $user, $pass)
	or die("Could not connect: " . mysql_error());
	$db = mysqli_select_db($conn,$database)
	or die("Could not select database");

?>
