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
	        height: 1100px;
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

<p style="font-family:Agency FB;font-size:20px;line-height:10%;text-align:right;margin-left:600px;color:white;margin-top:-30px"><b>Administrator</p></b>

<?php
}







if ($_COOKIE['password']=="dlsl1")
{

header('Location:home2.php');
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













</br>

<a style="color:green;" href="generatereport.php"><p style="font-family:Agency FB;color:black;font-size:50px;line-height:120%;text-align:left;margin-left:250px;margin-top:-30px"> << </a>
V I E W &emsp; R E T I R E D&emsp; E Q U I P M E N T


<a href="printretiredequipment.php">
<input type="image"<img src="pdf.png" style="width:200px; height:120px; margin-left: 60px"/></a></p>



<a href="detailsretire.php">
<img src="images/showdetails.png" style="width:130px; height:55px; margin-left: 0px;margin-top:10px"/></a></p>


<?php

$co=0;

include 'dbconnect.inc';

$perpage = 8;

$start = (isset($_GET['id3'])) ? $_GET['id3'] : 0;

$TotalRec = mysql_result(mysql_query("SELECT COUNT(*) FROM retire"), 0);

$select = "SELECT * FROM retire LIMIT $start, $perpage";
$result = mysql_query($select) or die(mysql_error());



$header=array('Date Reported','Person-in-charge','Office','Item', 'Quantity');
for ($a=0;$a<1;$a++)
{


$sum=0;
echo "<table>";

for($b=0;$b<5;$b++)
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

echo "<tr>";
$sum=$sum+$row['quantity'];

echo "</table>";
}}


echo "</br>";

if($start == 0)
{
  echo "Previous";
}
else
{
  echo '<a href='."./viewretiredequipment.php?id3=" . ($start - $perpage) . '>'."Previous".'</a>';
}?>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

<?php

if($start + $perpage >= $TotalRec)
{
  echo "Next";
}
else
{
  echo '<a href='."./viewretiredequipment.php?id3=" . ($start + $perpage) . '>'."Next".'</a>';
}

end:
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
	margin-left:150px;
	margin-right:150px;
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
	margin-left:50px;
}

</style>


<style>
table {

margin-left: 40px;
   border: 1px solid black;
   padding: 5px;
   border-collapse: collapse;
   font-family: Georgia, Times, serif;
   }
   tr {
   border: 1px solid #1D5F20;
   font-size: 75%;
   }
   td {
   border: 1px solid #1D5F20;
   height: 5em;
   width:9em;
   padding: 5px;
color: black;
   vertical-align: center;
   text-align: center;
   }


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

