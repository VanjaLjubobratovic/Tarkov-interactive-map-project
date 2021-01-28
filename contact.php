<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="Stylesheets/topnavStyle.css">
<link rel="stylesheet" href="Stylesheets/contactStyle.css">
<?php
$value = "Logout";
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	$value = "Register";
	$link = "http://localhost:8012/ProjektRWA/register.php";
   }
   else{
   $value = "Logout";
   $link = "http://localhost:8012/ProjektRWA/logout.php";
   }
?>
<title>Contact</title>
</head>
<body>

<div class="topnav">

  <!-- Centered link -->
  <div class="topnav-center">
    <a href="http://localhost:8012/ProjektRWA/phpnaslovna.php">News</a>
	<a href="http://localhost:8012/ProjektRWA/about.php">About</a>
	<a href="http://localhost:8012/ProjektRWA/contact.php" class="active">Contact</a>
	<a href="http://localhost:8012/ProjektRWA/traders.php">Traders</a>
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

<img src ="ImgRes/kontakt_ban.jpg" style = "display: block;
  margin-left: auto;
  margin-right: auto;
  margin-top: 110px;
  box-shadow: 0px 0px 150px 1px #ffffff;">

<div class ="wrapper">
<div class="card">
  <img src="ImgRes/katalinic.jpg" alt="Katalinic" style="width:100%;" class ="slika">
  <h1>Bog Šume</h1>
  <p class="title">External associate </p>
  <p style ="font-size : 14pt;">Medicinska škola Rijeka</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="https://www.facebook.com/Karlo.Katalinic1"><i class="fa fa-facebook"></i></a>
  </div>
  <p class ="kontakt">Contact</p>
  
</div>
<div class="card">
  <img src="ImgRes/graf.jpg" alt="Graf" style="width:100%" class ="slika">
  <h1>Karlo Graf</h1>
  <p class="title">CEO & Founder</p>
  <p style ="font-size : 14pt;">Tehnički fakultet Rijeka</p>
  <div style="margin: 24px 0;">
    <a href="#"><i  class="fa fa-twitter"></i></a>  
    <a href="#"><i  class="fa fa-linkedin"></i></a>  
    <a href="https://www.facebook.com/karlo.graf"><i  class="fa fa-facebook"></i></a> 
  </div>
  <p class ="kontakt">Contact</p>
</div>


<div class="card">
  <img src="ImgRes/ljubo.jpg" alt="Vanja" style="width:100%" class ="slika">
  <h1>Vanja LJubobratović</h1>
  <p class="title">CEO & Founder</p>
  <p style ="font-size : 14pt;">Tehnički fakultet Rijeka</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="https://www.facebook.com/vanja.ljubobratovic"><i class="fa fa-facebook"></i></a> 
  </div>
  <p class ="kontakt">Contact</p>
</div>
</div>
</body>
</html>
