<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="Stylesheets/topnavStyle.css">
<link rel="stylesheet" href="Stylesheets/aboutStyle.css">
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
<title>About</title>
</head>
<body>

<div class="topnav">

  <!-- Centered link -->
  <div class="topnav-center">
    <a href="http://localhost:8012/ProjektRWA/phpnaslovna.php">News</a>
	<a href="http://localhost:8012/ProjektRWA/about.php" class="active">About</a>
	<a href="http://localhost:8012/ProjektRWA/contact.php">Contact</a>
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
<div class ="tekst_div">
<h2 style ="text-align:center; margin : 0px; border-bottom : 2px solid white">About us</h2>
<p class ="tekst">We are 2 guys from Croatia that after playing tarkov for hundreds of hours and getting lost <br>
searching for stashes hundreds of times, have decided to create a interactive map with the <br>
location of all the stashes. We created this website because most of the existing stash maps<br>
are all very hard to read and inaccurate. They are either way too clustered making it hard to find <br>
what you are looking for or way too simple with just a marker somwhere in the area where the stash<br>
 is which doesn't help with the fact that they are hidden. We hope that this map will help some<br>
 people like us with making a profit in game without getting lost.</p>
</div>


</body>
</html>
