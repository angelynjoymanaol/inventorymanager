<?php

include 'dbconnect.inc';

$query='SELECT * FROM purchaseorder';
$result=mysql_query($query);
$num_results=mysql_num_rows($result);
$try=0;


while($row=mysql_fetch_assoc($result))
{
if($_COOKIE['purchase']==$row['purchase'])
{
$query="UPDATE purchaseorder SET delivery='$_POST[delivery]',supplier='$_POST[supplier]',Items='$_POST[Items]',total='$_POST[total]'
WHERE purchase='$_COOKIE[purchase]'";
}

$is_query_successful=mysql_query($query); 

if($is_query_successful) 
{

setcookie("purchase",$purchase,time()-3600);

header('Location:purchaseorder.php');
 echo "<center>";

}}
?>

