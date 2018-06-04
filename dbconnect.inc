<?php
	$hostname='ictcinventorymanager-mysqldbserver.mysql.database.azure.com';
	$username='angelynjoymanalo@ictcinventorymanager-mysqldbserver';
	$password='Baby1230';
	$conn=mysql_connect($hostname, $username, $password)
	or die ('Error connecting to mysql'); mysql_select_db('inventory');
?>