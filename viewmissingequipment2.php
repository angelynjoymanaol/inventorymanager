
<p style="font-family:Agency FB;color:black;font-size:20px;line-height:120%;text-align:center;margin-top:10px"> 
V I E W &emsp; M I S S I N G&emsp; E Q U I P M E N T </p>




<?php

$co=0;

include 'dbconnect.inc';
$query='SELECT * FROM missing';
$result=mysql_query($query);
$num_results=mysql_num_rows($result);


$header=array('Date Reported','Person-in-charge','Office','Item', 'Quantity', 'Reason');
for ($a=0;$a<1;$a++)
{


$sum=0;
echo "<table>";

for($b=0;$b<6;$b++)
{
echo "<td>";
echo $header[$b];
}
echo "</td>";


}

while($row=mysql_fetch_assoc($result)){
for ($a=0;$a<1;$a++){

echo "<table>";
echo "<td>";
echo $row['date'];
echo "<td>";
echo $row['person'];
echo "<td>";
echo $row['office'];

echo "<td>";

echo $row['item'];
echo "<td>";
echo $row['quantity'];
echo "<td>";
echo $row['reason'];

echo "<tr>";
$sum=$sum+$row['quantity'];
}}
?>

<style>

#container{
	background-color: #FFE4E1;
	border-radius:0px;
	width:208px;
	height:50px;
	box-shadow:4px 4px 4px 4px;
	float:right;
	font-size:150%;
	text-align: center;
	text-decoration: none;
	padding:0px;
	margin-left:250px;
	margin-right:110px;
}
#container2{

	background-color: none;
	border-radius:0px;
	width:9em;
	height:5em;
	
   border-collapse: collapse;
	float:right;
	font-size:100%;
	vertical-align: center;
   text-align: center;
	text-decoration: none;
	padding:0px;
	margin-top:5px;
	margin-right:0px;
	margin-left:100px;
}

</style>


<style>
table {

margin-left: 20px;
   border: 3px solid black;
   padding: 5px;
   border-collapse: collapse;
   font-family: Georgia, Times, serif;
   }
   tr {
   border: 3px solid #00BFFF;
   font-size: 75%;
   text-transform: uppercase;
   }
   td {
   border: 3px solid black;
   height: 5em;
   width:9em;
   padding: 5px;
color: black;
   vertical-align: center;
   text-align: center;
   }


</style>
