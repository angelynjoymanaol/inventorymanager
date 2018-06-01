<?php
	/*$connect=mysqli_connect("localhost","root","") or die("Unable to connect");*/
	
	$connect=mysqli_init(); //mysqli_ssl_set($connect, NULL, NULL, {ca-cert filename}, NULL, NULL); 
	mysqli_real_connect($connect, "ictcinventorymanager.mysql.database.azure.com", "ajmanalo@ictcinventorymanager", "Baby1230", "inventory", "3306");

	mysqli_select_db($connect,"inventory");
	if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
	}
?>