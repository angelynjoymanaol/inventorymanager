<!DOCTYPE html>
<html>
<head>
  



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
?>

  <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="local-fonts/Orbitron/Orbitron.css" rel="stylesheet">   
	<link href="local-fonts/Open-Sans/Open-Sans.css" rel="stylesheet"></head>
    
    <style>
        body{
            background: #344e35 ;
            font-family: 'open_sans_condensedlight', sans-serif;
            font-size: 20px;

        }
        
                
        .navbar-nav{
            margin-left: 450px;
            font-family: 'open_sans_condensedlight', sans-serif;
            font-size: 20px;
          
        
        }
        
        .navbar-nav *{
	        box-sizing: border-box; 
	        transition: all 0.35s ease;
	        
	     }
	     
	     .navbar-nav li {
		     display: inline-block
		     list-style: outside none none;
		     margin: .5em 1em;
		     padding: 0;
		     
		 
		 }
		 
		 .navbar-nav a{
		 	padding: .5em 0.8em;
		 	color: rgba(255,255,255,0.5);
		 	position: relative;
		 	text-decoration: none;
		 }
		 
		 .navbar-nav a:before,
		 .navbar-nav a:after{
			 height: 14px;
			 width: 14px;
			 position: absolute;
			 content: '';
			 transition: all 0.35s ease;
			 opacity: 0;
			 
		}
		
		.navbar-nav a:before{
			right: 0;
			top: 0;
			border-right: 3px solid #087830;
			border-top: 3px solid white;
			transform: translate(-100%,50%);
			}
			
		.navbar-nav a:after{
			left: 0;
			bottom: 0;
			border-left: 3px solid #087830;
			border-bottom: 3px solid white;
			transform: translate(100%,-50%)
		}
	    a:hover:before,    
	    a:hover:after{
		    transform: translate(0%,0%);
		    opacity: 1;
		    }
        
        
        li{
            padding-left: 70px;
        }
        
        .ServiceTitle{
	        width: 1290px;
	        height: 30px;
	        background-color: #151815;
			color: white
        }
        
        .Header{
	        width: 1425px;
	        height: 190px;
	        background: #151815;
	        color: white;
	        top: 90px; 
	        
        }
        
        .Title{
			font-family: 'orbitronlight', sans-serif;
	        font-size: 200%;
	        position: absolute;
	        left: 590px;
	        top: 108px
        }
        
        .SubTitle{
	        position: absolute;
	        font-size: 20px;
	        font-family: 'open_sans_condensedlight', sans-serif;
	        left: 670px;
	        top: 155px
        }

        
        .logo{
	        position: absolute;
	        left: 668px;
	        top: 10px;
        }
        
        .main-body{
	        width: 1300px;
	        height: 800px;
	        border-style: solid;
	        border-width: 5px;
	        border-color: #333;
	        background: #f2f2f2;
	        margin-top: 20px;
	        
        }
        
        footer{
	        width: 100%;
	        height: 320px;
	        background-color: #21282E; 
	        border-style: solid;
	        border-width: 2px;
	        border-color: #444;
	        color: white;
	        font-family: 'open_sans_condensedlight', sans-serif;
        }
        
        .footer-info{
	        margin-left: 50px;
	        margin-top: 0px;
	        font-size: 80%;
        }
                

    </style>
    
<body>
	
	<div class="Header">
		
		<center ><img src="images/DLSL-logo.png" class="logo" width="100px" height="100px"></center>
		
		<center > <div class="Title">ICTC ONLINE </div> </center>
		<center > <div class="SubTitle">De La Salle Lipa </div> </center>
		
	</div>

   



	</div>

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1B1F1B;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
     
      <li class="nav-item active">
        
<?php
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






?>



     </li>
     
 
      
    </ul>
  </div>
</nav><center>







<center>


<div class="main-body">
	
	<div class="ServiceTitle">
	
	<center> Inventory of Tools and Equipment
	
</div>
	<br>




<p style="font-family:Agency FB;color:black;font-size:50px;line-height:120%;text-align:center">E Q U I P M E N T &emsp; F O R &emsp; E X C H A N G E </p></br>

<form method="POST" action="forexchange2.php">


<p style="font-family:Agency FB;color:black;font-size:20px;line-height:120%;text-align:left; margin-left:500px">Date Filed
<input style="color:green; border-color:green;text-align:left;margin-left:58px" type="date" name="date" required></p>


<p style="font-family:Agency FB;color:black;font-size:20px;line-height:120%;text-align:left; margin-left:500px">Purchase Order #
<input style="color:green; border-color:green;text-align:left;margin-left:5px" type="text" name="purchase" required></p>




<p style="font-family:Agency FB;color:black;font-size:20px;line-height:120%;text-align:left; margin-left:500px">Supplier
<input style="color:green; border-color:green;text-align:left;margin-left:68px" type="text" name="supplier" required></p>

<p style="font-family:Agency FB;color:black;font-size:20px;line-height:120%;text-align:left; margin-left:500px">Delivery Man
<input style="color:green; border-color:green;text-align:left;margin-left:40px" type="text" name="deliveryman" required></p>


<p style="font-family:Agency FB;color:black;font-size:20px;line-height:120%;text-align:left; margin-left:500px">Item:
<select style="color:green; border-color:green;text-align:left;margin-left:85px" name="item">
		<option value="AVR">&emsp;AVR&emsp;</option>
		<option value="Casette">&emsp;Casette&emsp;</option>
		<option value="CPU">&emsp;CPU&emsp;</option>
		<option value="CPU 2">&emsp;CPU 2&emsp;</option>
		<option value="Keyboard">&emsp;Keyboard&emsp;</option>
		<option value="LAN Connector">&emsp;LAN Connector&emsp;</option>
		<option value="Laptop Acer">&emsp;Laptop Acer&emsp;</option>
		<option value="Laptop HP">&emsp;Laptop HP&emsp;</option>
		<option value="Monitor 14 in">&emsp;Monitor 14 in&emsp;</option>
		<option value="Monitor 16 in">&emsp;Monitor 16 in&emsp;</option>
		<option value="Monitor 18 in">&emsp;Monitor 18 in&emsp;</option>
		<option value="Minitor Mac">&emsp;Monitor Mac&emsp;</option>
		<option value="Mouse Wireless">&emsp;Wireless Mouse&nbsp</option>
		<option value="Mouse Cabled">&emsp;Wired Mouse&emsp;</option>
		<option value="Speaker Small">&emsp;Speaker Small&emsp;</option>
		<option value="Speaker Large">&emsp;Speaker Large&emsp;</option>
		<option value="Television">&emsp;Television&emsp;</option>
		<option value="VGA Connector">&emsp;VGA Connector&nbsp</option>
		<option value="Wifi Access Point">&emsp;Wifi Access Point&nbsp</option>
	</select>
</p>

<p style="font-family:Agency FB;color:black;font-size:20px;line-height:120%;text-align:left; margin-left:500px">Quantity
<input style="color:green; border-color:green;text-align:left;margin-left:70px" type="number" name="quantity" min="1" max="5" required></p>

<p style="font-family:Agency FB;color:black;font-size:20px;line-height:120%;text-align:left; margin-left:500px">Defect</br>
<textarea style="font-family:Agency FB;font-size:20px;color:black;line-height:120%;margin-left:120px;margin-top:-20px;border-color:green; type="text" name="reason" rows="10" cols="60" required></textarea>
</br></br>


<input style="font-family:Agency FB;font-size:20px;color:white; background-color:green;border-color:white; text-align:left;margin-left:-20px" type="submit" class="button" value="   Add Record   ">


</form>


<a href="update.php">
<img src="images/cancel.png" style="width:105px; height:55px; margin-left: 150px;margin-top:-90px"/></a></p>

<?php

end:

?>


</div>
</center>

</div>

<br>
<footer>
	
	<div class="footer-info">
		<br>
	<center>
	<div class="footer-img">
	<img src="images/footer-img1.png">
	<img src="images/footer-img2.png">
	</div>

	<br>
	De La Salle Lipa; ICTC<br>
	1962 JP Laurel National Highway<br>
	Mataas Na Lupa, Lipa City 4217<br>
	Tel. No. 63.43.756-5555<br>
	Telefax: 756-3117<br>
	© Copyright 2018
	<br>
	</center>
	</div>
		

</footer>

</body>
</html>