<?php



include 'dbconnect.inc';


$perpage = 8;
$start = (isset($_GET['id'])) ? $_GET['id'] : 0;

$TotalRec = mysql_result(mysql_query("SELECT COUNT(*) FROM tools"), 0);
$hi=$TotalRec/$perpage;
$select = "SELECT * FROM tools LIMIT $start, $perpage";
$result = mysql_query($select) or die(mysql_error());

while($row = mysql_fetch_array($result))
{
  echo $row['Tools'] . '<br>';
  echo $row['Onhand'] . '<br>';
  echo $row['Deployed'] . '<br><br>';
}

if($start == 0)
{
  echo "Previous Screen";
}
else
{
  echo '<a href='."./Display.php?id=" . ($start - $perpage) . '>'."Previous Screen".'</a>';
}

if($start + $perpage >= $TotalRec)
{
  echo "Next Screen";
}
else
{
  echo '<a href='."./Display.php?id=" . ($start + $perpage) . '>'."Next Screen".'</a>';
}
?>






