<?php
setcookie("email",$email,time()-3600);
setcookie("password",$password,time()-3600);
header('Location:login.php');
?>