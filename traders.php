<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
$value = "Logout";
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	$value = "Register";
	$link = "http://localhost:8012/ProjektRWA/register.php";
	echo "<script type='text/javascript'>alert('You have to be logged in to use the Traders page');window.location = 'phpnaslovna.php'</script>";
    }
   else{
   $value = "Logout";
   $link = "http://localhost:8012/ProjektRWA/logout.php";

   }
?>

<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color:black;
  background-image: url("high_rez_back.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
}

.topnav {
  position: fixed;
  top: 0;
  width: 100%;
  overflow: hidden;
  background-color: #333;
  z-index:3;

}

.topnav a{
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 38px 44px;
  text-decoration: none;
  font-size: 20px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #ddd;
  color: black;
}
.topnav-center {
	float:none;
	position: absolute;
	top: 50%;
	left: 47%;
	transform: translate(-50%, -50%);
}

.topnav-right {
  float: right;
  position: relative;
  right : 20px;
  top: 14px;
}

.ime{
	position : relative;
	right : 30px;
	top : 2px;
	color : white;
	padding : 6px;
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 12px;
}

.logo a{
  padding: 10px 0px;
}
.logo a:hover{
  background-color: #333;
}



.vertical-menu {
position: relative;
top: 120px;
left: 300px;
width:140px;
float:left;
}
.vertical-menu .trenutni{
	border : 3px solid gray;
	padding: 0px;
}

.vertical-menu img{
	padding:3px;
	
}
.vertical-menu a:hover {
}

.level {
  border: none;
  padding: 49px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 26px;
  font-family : Arial;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  background-color: #654321;
  color: black;
  border-radius : 10px;
}
.level:hover {background-color: #B2906F;}

.lvl_active{background-color:  #D8C0A8 } 

.inventory{
	position: relative;
	float:left;
	left: 350px;
	top: 130px;
}
</style>
<title>Traders</title>
<script>
$owner = "Prapor";
$lvl = 1;
function PromjenaSlike()
{
document.getElementById('inventory').src = "stock/"+ $owner + $lvl +".png";
}
</script>
</head>

<body>

<div class="topnav">

  <!-- Centered link #ff8c00 -->
  <div class="topnav-center">
    <a href="http://localhost:8012/ProjektRWA/phpnaslovna.php">News</a>
	<a href="http://localhost:8012/ProjektRWA/about.php">About</a>
	<a href="http://localhost:8012/ProjektRWA/contact.php" >Contact</a>
	<a href="http://localhost:8012/ProjektRWA/traders.php" class="active">Traders</a>
	<a href="http://localhost:8012/ProjektRWA/InteractiveMap/ShorelineMapV2.php">Interactive Map</a>
  </div>
  
  <div class = "logo">
  <!-- Left-aligned links (default) -->
  <a href="http://localhost:8012/ProjektRWA/phpnaslovna.php" ><img src ="logo3.png" alt = "logo" style = "width:50%; height:50%;"></a>
  </div>
  <!-- Right-aligned links -->
  <div class="topnav-right">
	<form action="<?= $link ?>">
    <input class="button" type="submit" value= "<?php echo htmlspecialchars($value); ?>">
	</form>
  </div>
  <div class ="topnav-right">
  	<p class="ime"><?php if(isset($_SESSION["loggedin"])){
		echo htmlspecialchars($_SESSION["username"]);
		}?></p>
  </div>
</div>

<div class ="traderi">
<div class= "vertical-menu">
  <img id = "Prapor" src ="Prapor_Portrait.png" class="trenutni" onclick = "document.getElementById($owner).classList.remove('trenutni'); $owner = 'Prapor'; PromjenaSlike(); 
  document.getElementById($owner).classList.add('trenutni');">
  <img id = "Therapist" src ="Therapist_Portrait.png" onclick = "document.getElementById($owner).classList.remove('trenutni'); $owner = 'Therapist'; PromjenaSlike(); 
  document.getElementById($owner).classList.add('trenutni');">
  <img id = "Skier" src ="Skier_Portrait.png" onclick = "document.getElementById($owner).classList.remove('trenutni'); $owner = 'Skier'; PromjenaSlike(); 
  document.getElementById($owner).classList.add('trenutni');">
  <img id = "Peacekeeper" src ="Peacekeeper_Portrait.png" onclick = "document.getElementById($owner).classList.remove('trenutni'); $owner = 'Peacekeeper'; PromjenaSlike(); 
  document.getElementById($owner).classList.add('trenutni');">
</div>
<div class="vertical-menu">
  <img id = "Mechanic" src ="Mechanic_Portrait.png" onclick = "document.getElementById($owner).classList.remove('trenutni'); $owner = 'Mechanic'; PromjenaSlike(); 
  document.getElementById($owner).classList.add('trenutni');">
  <img id = "Ragman" src ="Ragman_Portrait.png" onclick = "document.getElementById($owner).classList.remove('trenutni'); $owner = 'Ragman'; PromjenaSlike(); 
  document.getElementById($owner).classList.add('trenutni');">
  <img id = "Jaeger" src ="Jaeger_Portrait.png" onclick = "document.getElementById($owner).classList.remove('trenutni'); $owner = 'Jaeger'; PromjenaSlike(); 
  document.getElementById($owner).classList.add('trenutni');">
</div>
<div class="vertical-menu">
  <button id ="1" class="level lvl_active" onclick = "document.getElementById($lvl).classList.remove('lvl_active'); $lvl = 1; PromjenaSlike(); 
  document.getElementById($lvl).classList.add('lvl_active');">LV1</button>
  <button id ="2" class="level" onclick = "document.getElementById($lvl).classList.remove('lvl_active'); $lvl = 2; PromjenaSlike();
  document.getElementById($lvl).classList.add('lvl_active')">LV2</button>
  <button id ="3" class="level" onclick = "document.getElementById($lvl).classList.remove('lvl_active'); $lvl = 3; PromjenaSlike();
  document.getElementById($lvl).classList.add('lvl_active')">LV3</button>
  <button id ="4" class="level" onclick = "document.getElementById($lvl).classList.remove('lvl_active'); $lvl = 4; PromjenaSlike();
  document.getElementById($lvl).classList.add('lvl_active')">LV4</button>
</div>
<div class = "inventory">
<img src ="stock/Prapor1.png" id="inventory">
</div>
</div>
</body>
