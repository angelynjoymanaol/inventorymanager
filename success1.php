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

<p style="font-family:Agency FB;font-size:20px;line-height:10%;text-align:left;margin-left:520px;color:white;margin-top:-30px"><b>

<?php
echo $_COOKIE['email']

?>

&emsp;
<a style="font-family:Agency FB;font-size:20px" href="logout.php">
Logout
</a></p></b>
<?php
}







if ($_COOKIE['password']=="dlsl1")
{

?>

<a href="home2.php">
<img src="images/home.png" style="width:150px; height:55px;margin-top:0px;margin-left:150px;margin-right:150px"/></a>  

<p style="font-family:Agency FB;font-size:20px;line-height:10%;text-align:left;margin-left:520px;color:white;margin-top:-30px"><b>

<?php
echo $_COOKIE['email']

?>

&emsp;
<a style="font-family:Agency FB;font-size:20px" href="logout.php">
Logout
</a></p></b>
<?php
}








include 'dbconnect.inc';

session_start();

$query='SELECT * FROM serialnumber';
$result=mysql_query($query);
$num_results=mysql_num_rows($result);


$row=mysql_fetch_assoc($result);


if ($_COOKIE['quantity']==1)
{



$query="INSERT INTO serialnumber (serial, tool, status, office)
VALUES('$_POST[serial1]','$_COOKIE[item]','Onhand','$_COOKIE[office]')";


$is_query_successful=mysql_query($query); 


setcookie("item",$item,time()-3600);
setcookie("quantity",$quantity,time()-3600);
setcookie("office",$office,time()-3600);

}



if ($_COOKIE['quantity']==2)
{


$query="INSERT INTO serialnumber (serial, tool, status, office)
VALUES('$_POST[serial1]','$_COOKIE[item]','Onhand','$_COOKIE[office]')";

$is_query_successful=mysql_query($query); 


$query="INSERT INTO serialnumber (serial, tool, status, office)
VALUES('$_POST[serial2]','$_COOKIE[item]','Onhand','$_COOKIE[office]')";


$is_query_successful=mysql_query($query); 


setcookie("item",$item,time()-3600);
setcookie("quantity",$quantity,time()-3600);
setcookie("office",$office,time()-3600);
}






if ($_COOKIE['quantity']==3)
{


$query="INSERT INTO serialnumber (serial, tool, status, office)
VALUES('$_POST[serial1]','$_COOKIE[item]','Onhand','$_COOKIE[office]')";

$is_query_successful=mysql_query($query); 


$query="INSERT INTO serialnumber (serial, tool, status, office)
VALUES('$_POST[serial2]','$_COOKIE[item]','Onhand','$_COOKIE[office]')";

$is_query_successful=mysql_query($query); 


$query="INSERT INTO serialnumber (serial, tool, status, office)
VALUES('$_POST[serial3]','$_COOKIE[item]','Onhand','$_COOKIE[office]')";


$is_query_successful=mysql_query($query); 


setcookie("item",$item,time()-3600);
setcookie("quantity",$quantity,time()-3600);
setcookie("office",$office,time()-3600);
}





if ($_COOKIE['quantity']==4)
{


$query="INSERT INTO serialnumber (serial, tool, status, office)
VALUES('$_POST[serial1]','$_COOKIE[item]','Onhand','$_COOKIE[office]')";

$is_query_successful=mysql_query($query); 


$query="INSERT INTO serialnumber (serial, tool, status, office)
VALUES('$_POST[serial2]','$_COOKIE[item]','Onhand','$_COOKIE[office]')";

$is_query_successful=mysql_query($query); 


$query="INSERT INTO serialnumber (serial, tool, status, office)
VALUES('$_POST[serial3]','$_COOKIE[item]','Onhand','$_COOKIE[office]')";


$is_query_successful=mysql_query($query); 


$query="INSERT INTO serialnumber (serial, tool, status, office)
VALUES('$_POST[serial4]','$_COOKIE[item]','Onhand','$_COOKIE[office]')";


$is_query_successful=mysql_query($query); 


setcookie("item",$item,time()-3600);
setcookie("quantity",$quantity,time()-3600);
setcookie("office",$office,time()-3600);
}




if ($_COOKIE['quantity']==5)
{


$query="INSERT INTO serialnumber (serial, tool, status, office)
VALUES('$_POST[serial1]','$_COOKIE[item]','Onhand','$_COOKIE[office]')";

$is_query_successful=mysql_query($query); 


$query="INSERT INTO serialnumber (serial, tool, status, office)
VALUES('$_POST[serial2]','$_COOKIE[item]','Onhand','$_COOKIE[office]')";

$is_query_successful=mysql_query($query); 


$query="INSERT INTO serialnumber (serial, tool, status, office)
VALUES('$_POST[serial3]','$_COOKIE[item]','Onhand','$_COOKIE[office]')";


$is_query_successful=mysql_query($query); 


$query="INSERT INTO serialnumber (serial, tool, status, office)
VALUES('$_POST[serial4]','$_COOKIE[item]','Onhand','$_COOKIE[office]')";


$is_query_successful=mysql_query($query); 



$query="INSERT INTO serialnumber (serial, tool, status, office)
VALUES('$_POST[serial5]','$_COOKIE[item]','Onhand','$_COOKIE[office]')";


$is_query_successful=mysql_query($query); 


setcookie("item",$item,time()-3600);
setcookie("quantity",$quantity,time()-3600);
setcookie("office",$office,time()-3600);
}







if($is_query_successful)
{ echo "<center>";



header('Location:success2.php');

 goto end;
}
	?>



<p style="font-family:Agency FB;font-size:20px;line-height:120%;text-align:center;margin-top:80px"><b>Successfully recorded!</p></b>



</p></br>





























</p>



<?php 


mysql_error();


header('Location:hey4.php');

end:?>

</br></br>



</html>