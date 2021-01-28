<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="Stylesheets/topnavStyle.css">
<link rel="stylesheet" href="Stylesheets/tradersStyle.css">

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
  <a href="http://localhost:8012/ProjektRWA/phpnaslovna.php" ><img src ="ImgRes/logo3.png" alt = "logo" style = "width:50%; height:50%;"></a>
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
  <img id = "Prapor" src ="ImgRes/Prapor_Portrait.png" class="trenutni" onclick = "document.getElementById($owner).classList.remove('trenutni'); $owner = 'Prapor'; PromjenaSlike(); 
  document.getElementById($owner).classList.add('trenutni');">
  <img id = "Therapist" src ="ImgRes/Therapist_Portrait.png" onclick = "document.getElementById($owner).classList.remove('trenutni'); $owner = 'Therapist'; PromjenaSlike(); 
  document.getElementById($owner).classList.add('trenutni');">
  <img id = "Skier" src ="ImgRes/Skier_Portrait.png" onclick = "document.getElementById($owner).classList.remove('trenutni'); $owner = 'Skier'; PromjenaSlike(); 
  document.getElementById($owner).classList.add('trenutni');">
  <img id = "Peacekeeper" src ="ImgRes/Peacekeeper_Portrait.png" onclick = "document.getElementById($owner).classList.remove('trenutni'); $owner = 'Peacekeeper'; PromjenaSlike(); 
  document.getElementById($owner).classList.add('trenutni');">
</div>
<div class="vertical-menu">
  <img id = "Mechanic" src ="ImgRes/Mechanic_Portrait.png" onclick = "document.getElementById($owner).classList.remove('trenutni'); $owner = 'Mechanic'; PromjenaSlike(); 
  document.getElementById($owner).classList.add('trenutni');">
  <img id = "Ragman" src ="ImgRes/Ragman_Portrait.png" onclick = "document.getElementById($owner).classList.remove('trenutni'); $owner = 'Ragman'; PromjenaSlike(); 
  document.getElementById($owner).classList.add('trenutni');">
  <img id = "Jaeger" src ="ImgRes/Jaeger_Portrait.png" onclick = "document.getElementById($owner).classList.remove('trenutni'); $owner = 'Jaeger'; PromjenaSlike(); 
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
