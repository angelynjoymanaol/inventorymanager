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



$yes=0;






$counter=0;

$query='SELECT * FROM deploy';
$result=mysql_query($query);
$num_results=mysql_num_rows($result);


while($row=mysql_fetch_assoc($result))
{
if ($_POST['office']==$row['office'] AND $_POST['item']==$row['item'] AND $_POST['quantity']<=$row['quantity'])
{
$counter=$counter+1;
}

}


if ($counter==0)
{
goto end;
}

if ($counter>0)
{
goto proceed;
}






proceed:
$query='SELECT * FROM tools';
$result=mysql_query($query);
$num_results=mysql_num_rows($result);


$row=mysql_fetch_assoc($result);


$query="UPDATE tools SET Retired=Retired+'$_POST[quantity]' WHERE Tools='$_POST[item]'";
$is_query_successful=mysql_query($query);



$query='SELECT * FROM deploy';
$result=mysql_query($query);
$num_results=mysql_num_rows($result);
$counter=0;

$row=mysql_fetch_assoc($result);


$query="UPDATE deploy SET quantity=quantity-'$_POST[quantity]' WHERE office='$_POST[office]' AND item='$_POST[item]'";
$is_query_successful=mysql_query($query);
{
$yes=$yes+1;}



$query='SELECT * FROM deploy';
$result=mysql_query($query);
$num_results=mysql_num_rows($result);
$counter=0;


while($row=mysql_fetch_assoc($result))
{
$query="Delete from deploy where quantity=0";

}


$is_query_successful=mysql_query($query);






$query="INSERT INTO retire (date, person, office, item, quantity)
VALUES('$_POST[date]','$_POST[person]','$_POST[office]','$_POST[item]','$_POST[quantity]')";





$is_query_successful=mysql_query($query); 
if($is_query_successful)
{ echo "<center>";









header('Location:hey7.php');
}
	?>




























</p>



<?php

end:
?>
</br></br></br></br></br></br></br></br></br></br></br></br>
<p style="font-family:Agency FB;color:black;font-size:20px;line-height:120%;text-align:center">Record was unsuccessful. Please check again the office or equipment that you entered.</p></br>

<a style="font-family:Agency FB;color:green;font-size:20px;line-height:120%;text-align:center;margin-top:80px" href="retiredequipment.php"><p style="font-family:Agency FB;font-size:20px;color:black;line-height:80%;text-align:center;margin-top:20px"> Add record</a></p>

<?php
?>

</br></br>


</html>