<!DOCTYPE html>
<html>

 



<?php
include 'dbconnect.inc';

session_start();




$query="INSERT INTO tools (Tools, Onhand, Deployed, Retired, Damaged, Missing, ForExchange, Brand, Spec1, Spec2, Spec3)
VALUES('$_POST[Tools]','0','0','0','0','0','0','$_POST[Brand]','$_POST[Spec1]','$_POST[Spec2]','$_POST[Spec3]')";




$is_query_successful=mysql_query($query); 
if($is_query_successful)
{ echo "<center>";
?>


<p style="font-family:Agency FB;font-size:20px;line-height:120%;text-align:center;margin-top:80px">
<?php

header('Location:success13.php');
goto end;}
	?>




</p></br>


goto end;



























</p>



<?php 


mysql_error();
?>
<p style="font-family:Agency FB;font-size:20px;color:black;line-height:80%;text-align:left;margin-top:20px;margin-left:420px"> 

<?php

header('Location:failed2.php');


end:?>

</br></br>



</html>