<!DOCTYPE html>
<html>

 



<?php
include 'dbconnect.inc';
session_start();

$query='SELECT * FROM log';
$result=mysql_query($query);
$num_results=mysql_num_rows($result);
$try=0;




if($_POST['email']=="ruben.frane@dlsl.edu.ph" AND $_POST['password']=="dlsl")
{
$try=$try+1;


$email=$_POST['email'];
$password=$_POST['password'];
setcookie('password',$password);
setcookie('email',$email);

?>

<p style="font-family:Agency FB;font-size:20px;line-height:120%;text-align:center;margin-top:80px"><b>Successfully logged in to admin's account!</p></b>



</p></br>
<?php


header('Location:home.php');
goto end;
}




















for ($a=0;$a<$num_results;$a++)
{

$row=mysql_fetch_assoc($result);

if($_POST['email']==$row['email'] AND $_POST['password']==$row['password'])
{
$try=$try+1;
$email=$_POST['email'];
$password=$_POST['password'];
setcookie('password',$password);
setcookie('email',$email);



 echo "<center>";

header('Location:home2.php');

goto end;}}
 if($try==0) { 

?>









<?php
}
mysql_error();?>

<p style="font-family:Agency FB;font-size:20px;line-height:120%;text-align:center;margin-top:160px"><b>Email or password did not match. Please try again.</p></br></br>

<br/<br/><a style="font-family:Agency FB;color:green;font-size:20px;line-height:120%;text-align:left;margin-top:80px;margin-left:220px" href="login.php"><p style="font-family:Agency FB;font-size:20px;color:black;line-height:80%;text-align:left;margin-top:20px;margin-left:420px"> Log In</a></center></p>

<?php
end:?>

</br></br>
</html>