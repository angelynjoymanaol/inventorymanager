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
	        height: 550px;
	        border-style: solid;
	        border-width: 5px;
	        border-color: #333;
	        background: white;
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
        
		.update:hover{
			border: 2px solid green;
			width:200px;
			height:200px;
			
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

<p style="font-family:Agency FB;font-size:20px;line-height:10%;text-align:right;margin-left:600px;color:white;margin-top:-30px"><b>Administrator</p></b>

<?php
}







if ($_COOKIE['password']=="dlsl1")
{

?>

<a href="home2.php">
<img src="images/home.png" style="width:150px; height:55px;margin-top:0px;margin-left:150px;margin-right:150px"/></a>  

<p style="font-family:Agency FB;font-size:20px;line-height:10%;text-align:right;margin-left:600px;color:white;margin-top:-30px"><b>Staff</p></b>

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



<p style="font-family:Agency FB;color:black;font-size:50px;line-height:120%;text-align:center">U P D A T E &emsp; I N V E N T O R Y </p>



</br>


<div class="update" style="position:absolute; left:70px; top:500px;">
<center>
<a style="text-decoration:none;" href="addrecord.php"><img src="images/deliver1.png" width="130px" height="130px";><br/><p style="font-family:Agency FB;color:green;font-size:30px;">Delivery of Item</p></a> 
</center>
</div>

<div class="update" style="position:absolute; left:280px; top:500px;">
<center>
<a style="text-decoration:none;" href="deployequipment.php"><img src="images/deploy.png" width="130px" height="130px";><br/><p style="font-family:Agency FB;color:green;font-size:30px;">Deploy Equipment</p></a> 
</center>
</div>

<div class="update" style="position:absolute; left:490px; top:500px;">
<center>
<a style="text-decoration:none;" href="retiredequipment.php"><img src="images/retired.png" width="130px" height="130px";><br/><p style="font-family:Agency FB;color:green;font-size:30px;">Retired Equipment</p></a> 
</center>
</div>

<div class="update" style="position:absolute; left:715px; top:500px;">
<center>
<a style="text-decoration:none;" href="missingequipment.php"><img src="images/missing.png" width="130px" height="130px";><br/><p style="font-family:Agency FB;color:green;font-size:30px;">Missing Equipment</p></a> 
</center>
</div>

<div class="update" style="position:absolute; left:915px; top:500px;">
<center>
<a style="text-decoration:none;" href="damagedequipment.php"><img src="images/damage.png" width="130px" height="130px";><br/><p style="font-family:Agency FB;color:green;font-size:30px;">Damaged Equipment</p></a> 
</center>
</div>

<div class="update" style="position:absolute; left:1140px; top:500px;">
<center>
<a style="text-decoration:none;" href="forexchange.php"><img src="images/exchange1.png" width="130px" height="130px";><br/><p style="font-family:Agency FB;color:green;font-size:30px;">For Exchange</p></a> 
</center>
</div>



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