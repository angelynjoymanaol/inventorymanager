


<?php


$begin=$_REQUEST['begin'];
$last=$_REQUEST['last'];
setcookie('begin',$begin);
setcookie('last',$last);

include 'dbconnect.inc';
$query="SELECT * FROM damage WHERE date >= '$_REQUEST[begin]'  AND date <= '$_REQUEST[last]'";
$result=mysql_query($query);
$num_results=mysql_num_rows($result);

while($row=mysql_fetch_assoc($result))
{
if($_REQUEST['begin'] >= $row['date'])
{


header('Location:printreportdamage.php');
}}

?>


