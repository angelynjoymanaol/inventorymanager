<!DOCTYPE html>
<html>

 



<?php
include 'dbconnect.inc';

session_start();


$item=$_POST['item'];
$quantity=$_POST['quantity'];
$office="ICTC";
setcookie('item',$item);
setcookie('quantity',$quantity);
setcookie('office',$office);



$query='SELECT * FROM tools';
$result=mysql_query($query);
$num_results=mysql_num_rows($result);

$query="UPDATE tools SET Onhand=Onhand+'$_POST[quantity]' WHERE Tools='$_POST[item]'";
$is_query_successful=mysql_query($query);




$query="INSERT INTO delivery (date, ponumber, deliveryman, supplier, item, quantity, cost, receiver)
VALUES('$_POST[received]','$_POST[purchasenum]','$_POST[deliveryman]','$_POST[supplier]','$_POST[item]','$_POST[quantity]','$_POST[cost]','$_POST[receiver]')";




$is_query_successful=mysql_query($query); 
if($is_query_successful)
{ echo "<center>";

header('Location:hey3.php');
goto end;}
	?>



<p style="font-family:Agency FB;font-size:20px;line-height:120%;text-align:center;margin-top:80px"><b>Successfully logged in to admin's account!</p></b>



</p></br>


goto end;



























</p>



<?php 


mysql_error();


header('Location:hey4.php');?>


<?php

end:?>

</br></br>



</html>