<!DOCTYPE html>
<html>

 



<?php
include 'dbconnect.inc';

session_start();






$query='SELECT * FROM purchaseorder';
$result=mysql_query($query);
$num_results=mysql_num_rows($result);


$row=mysql_fetch_assoc($result);


$query="INSERT INTO purchaseorder (purchase, issued, delivery, supplier, Items, total)
VALUES('$_POST[purchase]','$_POST[issued]','$_POST[delivery]','$_POST[supplier]','$_POST[listitems]','$_POST[cost]')";





$is_query_successful=mysql_query($query); 
if($is_query_successful)
{ echo "<center>";
header('Location:heypurchase.php');
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