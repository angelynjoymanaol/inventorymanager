<!DOCTYPE html>
<html>

 



<?php
include 'dbconnect.inc';




$query="INSERT INTO forexchange(purchase, date, supplier, deliveryman, item, quantity, reason)
VALUES('$_POST[purchase]','$_POST[date]','$_POST[supplier]','$_POST[deliveryman]','$_POST[item]','$_POST[quantity]','$_POST[reason]')";


$is_query_successful=mysql_query($query); 
if($is_query_successful)
{ echo "<center>";









header('Location:hey13.php');
} goto end;
	?>



<p style="font-family:Agency FB;font-size:20px;line-height:120%;text-align:center;margin-top:80px"><b>Successfully logged in to admin's account!</p></b>



</p></br>


goto end;



























</p>



<?php 


mysql_error();


header('Location:hey14.php');?>


<?php

end:?>

</br></br>



</html>