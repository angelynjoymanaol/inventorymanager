<?php
	$hostname='ictcinventorymanager.mysql.database.azure.com';
	$username='ajmanalo@ictcinventorymanager';
	$password='Baby1230';
	$conn=mysql_connect($hostname, $username, $password)
	or die ('Error connecting to mysql'); mysql_select_db('inventory');
?>