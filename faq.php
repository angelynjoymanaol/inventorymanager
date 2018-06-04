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
	        height: 700px;
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



<p style="font-family:Agency FB;color:black;font-size:50px;line-height:120%;text-align:center">F R E Q U E N T L Y &emsp; A S K E D&emsp; Q U E S T I O N S</p>



</br>
<div id='container1'>

<p style="font-family:Agency FB;color:green;font-size:30px;line-height:120%;text-align:left;margin-left:10px">How can I make a record of newly purchased equipment that is not in the inventory yet? </p>

<center><input type="image" <img src="ill.png" style="width:300px; height:120px"/></center>
</br><p style="font-family:Agency FB;color:green;font-size:20px;line-height:120%;text-align:left;margin-left:20px;margin-right:10px">&emsp;Click on the Add new tool in the View Inventory. Fill up the required information and click Add. The item will be added to the inventory. Go to update section, and make a record.
</br>
</div>

<div id='container1'>
<p style="font-family:Agency FB;color:green;font-size:30px;line-height:120%;text-align:left;margin-left:10px">What would happen if two users are accessing the inventory to record the same data concurrently? </p>
</br>
<p style="font-family:Agency FB;color:green;font-size:20px;line-height:120%;text-align:left;margin-left:20px">&emsp;The same performance will be givem by the system. It is an online system so issues are not likely to be encountered.</p>
</div>

<div id='container1'>
<p style="font-family:Agency FB;color:green;font-size:30px;line-height:120%;text-align:left;margin-left:10px">How can I generate report? </p>
</br>
<p style="font-family:Agency FB;color:green;font-size:20px;line-height:120%;text-align:left;margin-left:20px;margin-right:10px">&emsp;Generating of report is only available for the administrator account. There is a section in the dashboard name "Generate Report". The administrator will be able to print the general report which includes the information of all equipment based on its status.
</br></br>
&emsp;If the admin wishes to print a copy of report with the inclusive date, just choose the start and end date of report and click on generate report. It will redirect to a page that summarizes the transaction within the given time, and it can be printed or downloaded as pdf.</p>
</div>


</br></br>
<a href="faq2.php"> 
<center><input type="image" <img src="more.png" style="width:90px; height:50px"/></a></center>
	


<?php

end:

?>


<style>
#container1{
	width:350px;
	height:420px;
border: 2px solid #999;
	float:left;
	background-color:#EFF8F1;
	padding:1px;
 text-decoration:none;
	margin-left:50px;
margin-right:15px;
margin-bottom:30px;
}#container1:hover{background-color:#DBFCDD;}


</style>



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