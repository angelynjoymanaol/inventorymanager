<!DOCTYPE html>
<html>

 

<?php


$q=0;
session_start();
s:

if (!$_COOKIE['email'])
{

header('Location:login.php');
?>

<?php

goto end;}


$q=0;
if ($_COOKIE['email']=="ruben.frane@dlsl.edu.ph")
{

?>


<a href="home.php">
<img src="images/home.png" style="width:150px; height:55px;margin-top:0px;margin-left:150px;margin-right:150px"/></a>  

<p style="font-family:Agency FB;font-size:20px;line-height:10%;text-align:right;margin-left:600px;color:white;margin-top:-30px"><b>Administrator</p></b>

<?php
}







if ($_COOKIE['password']=="dlsl1")
{

?>

<a href="home2.php">
<img src="images/home.png" style="width:150px; height:55px;margin-top:0px;margin-left:150px;margin-right:150px"/></a>  

<p style="font-family:Agency FB;font-size:20px;line-height:10%;text-align:right;margin-left:600px;color:white;margin-top:-30px"><b>Staff</p></b>

<?php
}


include 'dbconnect.inc';

session_start();

$query='SELECT * FROM purchaseorder';
$result=mysql_query($query);
$num_results=mysql_num_rows($result);


$row=mysql_fetch_assoc($result);


if ($_COOKIE['numitems']==1)
{



$query="UPDATE purchaseorder SET total=total+'$_POST[cost1]' WHERE purchase='$_COOKIE[purchase]'";


$is_query_successful=mysql_query($query); 


setcookie("numitems",$numitems,time()-3600);
setcookie("purchase",$purchase,time()-3600);
}





if ($_COOKIE['numitems']==2)
{

$query="UPDATE purchaseorder SET total=total+'$_POST[cost1]' WHERE purchase='$_COOKIE[purchase]'";


$is_query_successful=mysql_query($query); 

$query="UPDATE purchaseorder SET total=total+'$_POST[cost2]' WHERE purchase='$_COOKIE[purchase]'";


$is_query_successful=mysql_query($query); 


setcookie("numitems",$numitems,time()-3600);
setcookie("purchase",$purchase,time()-3600);
}






if ($_COOKIE['numitems']==3)
{


$query="UPDATE purchaseorder SET total=total+'$_POST[cost1]' WHERE purchase='$_COOKIE[purchase]'";


$is_query_successful=mysql_query($query); 

$query="UPDATE purchaseorder SET total=total+'$_POST[cost2]' WHERE purchase='$_COOKIE[purchase]'";


$is_query_successful=mysql_query($query); 

$query="UPDATE purchaseorder SET total=total+'$_POST[cost3]' WHERE purchase='$_COOKIE[purchase]'";


$is_query_successful=mysql_query($query); 


setcookie("numitems",$numitems,time()-3600);
setcookie("purchase",$purchase,time()-3600);
}





if ($_COOKIE['numitems']==4)
{

$query="UPDATE purchaseorder SET total=total+'$_POST[cost1]' WHERE purchase='$_COOKIE[purchase]'";


$is_query_successful=mysql_query($query); 

$query="UPDATE purchaseorder SET total=total+'$_POST[cost2]' WHERE purchase='$_COOKIE[purchase]'";


$is_query_successful=mysql_query($query); 

$query="UPDATE purchaseorder SET total=total+'$_POST[cost3]' WHERE purchase='$_COOKIE[purchase]'";


$is_query_successful=mysql_query($query); 


$query="UPDATE purchaseorder SET total=total+'$_POST[cost4]' WHERE purchase='$_COOKIE[purchase]'";


$is_query_successful=mysql_query($query); 


setcookie("numitems",$numitems,time()-3600);
setcookie("purchase",$purchase,time()-3600);
}




if ($_COOKIE['numitems']==5)
{

$query="UPDATE purchaseorder SET total=total+'$_POST[cost1]' WHERE purchase='$_COOKIE[purchase]'";

$is_query_successful=mysql_query($query); 

$query="UPDATE purchaseorder SET total=total+'$_POST[cost2]' WHERE purchase='$_COOKIE[purchase]'";


$is_query_successful=mysql_query($query); 

$query="UPDATE purchaseorder SET total=total+'$_POST[cost3]' WHERE purchase='$_COOKIE[purchase]'";


$is_query_successful=mysql_query($query); 


$query="UPDATE purchaseorder SET total=total+'$_POST[cost4]' WHERE purchase='$_COOKIE[purchase]'";


$is_query_successful=mysql_query($query); 


$query="UPDATE purchaseorder SET total=total+'$_POST[cost5]' WHERE purchase='$_COOKIE[purchase]'";


$is_query_successful=mysql_query($query); 


setcookie("numitems",$numitems,time()-3600);
setcookie("purchase",$purchase,time()-3600);
}







if($is_query_successful)
{ echo "<center>";



header('Location:successpurchase2.php');

 goto end;
}
	?>



<p style="font-family:Agency FB;font-size:20px;line-height:120%;text-align:center;margin-top:80px"><b>Successfully recorded!</p></b>



</p></br>





























</p>



<?php 


mysql_error();


header('Location:heyfailed.php');?>


<?php

end:?>

</br></br>



</html>