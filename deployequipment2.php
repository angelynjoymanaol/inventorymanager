<!DOCTYPE html>
<html>

 



<?php
include 'dbconnect.inc';


session_start();

$item=$_POST['item'];
$quantity=$_POST['quantity'];
$office=$_POST['office'];
setcookie('item',$item);
setcookie('quantity',$quantity);
setcookie('office',$office);



$counter=0;

$query='SELECT * FROM tools';
$result=mysql_query($query);
$num_results=mysql_num_rows($result);


while($row=mysql_fetch_assoc($result))
{
if ($_POST['item']==$row['Tools'] AND $_POST['quantity']<=$row['Onhand'])
{
$counter=$counter+1;
}

}


if ($counter>0)
{
goto proceed;
}


if ($counter==0)
{
goto end;
}





proceed:
$query='SELECT * FROM tools';
$result=mysql_query($query);
$num_results=mysql_num_rows($result);


$row=mysql_fetch_assoc($result);


$query="UPDATE tools SET Onhand=Onhand-'$_POST[quantity]',Deployed=Deployed+'$_POST[quantity]' WHERE Tools='$_POST[item]'";
$is_query_successful=mysql_query($query); 



$query="INSERT INTO deploy (date, deployer, office, receiver, item, quantity)
VALUES('$_POST[date]','$_POST[deployer]','$_POST[office]','$_POST[receiver]','$_POST[item]','$_POST[quantity]')";





$is_query_successful=mysql_query($query); 
if($is_query_successful)
{ echo "<center>";









header('Location:hey5.php');
} goto end;
	?>





</p></br>


goto end;



























</p>



<?php 


mysql_error();


header('Location:hey6.php');?>


<?php

end:

?>


</br></br></br></br></br></br></br></br></br></br></br></br>
<p style="font-family:Agency FB;color:black;font-size:20px;line-height:120%;text-align:center">Record was unsuccessful. Please check if there is enough quantity on-hand.</p></br>

<a style="font-family:Agency FB;color:green;font-size:20px;line-height:120%;text-align:center;margin-top:80px" href="deployequipment.php"><p style="font-family:Agency FB;font-size:20px;color:black;line-height:80%;text-align:center;margin-top:20px"> Add record</a></p>


</br></br>



</html>