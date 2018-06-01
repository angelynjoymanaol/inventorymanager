

<?php



include 'dbconnect.inc';


$query='SELECT * FROM purchaseorder';
$result=mysql_query($query);
$num_results=mysql_num_rows($result);

$row=mysql_fetch_assoc($result);

$query="Delete from purchaseorder where purchase='$_REQUEST[purchase]'";




$is_query_successful=mysql_query($query);
if($is_query_successful)
{ 
header('Location:hey15.php');

}
?>