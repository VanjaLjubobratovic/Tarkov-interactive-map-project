<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Stylesheets/naslovnaStyle.css">
<link rel="stylesheet" href="Stylesheets/topnavStyle.css">
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

<title>News</title>
</head>
<body>

<!-- Top navigation -->
<div class="topnav">

  <!-- Centered link -->
  <div class="topnav-center">
    <a href="http://localhost:8012/ProjektRWA/phpnaslovna.php" class="active">News</a>
	<a href="http://localhost:8012/ProjektRWA/about.php">About</a>
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

<div class="naslov">
<p style =" margin-bottom:0px; padding : 0px">Most Recent Tarkov News</p>
<hr style ="margin-top : 5px; border: 5px solid darkorange;  border-radius: 5px;">
</div>
<div class = "div_slika">
<img class ="slika" src ="ImgRes/slika1.jpg" id ="prva">
 <div class="overlay">
    <div class="text"><iframe width="800" height="500" src="https://www.youtube.com/embed/ODiEy2ClWNw">
</iframe></div>
  </div>
</div>

<div class = "div_slika">
<img class ="slika" src ="ImgRes/slika3.jpg" id ="druga">
 <div class="overlay">
    <div class="text"><iframe width="800" height="500" src="https://www.youtube.com/embed/UPnrY5BxddI">
</iframe></div>
  </div>
</div>

<div class = "div_slika">
<img class ="slika" src ="ImgRes/slika4.jpg" id ="treca">
 <div class="overlay">
    <div class="text"><iframe width="800" height="500" src="https://www.youtube.com/embed/Uoahlpj8noI">
</iframe></div>
  </div>
</div>

<div class = "div_slika">
<img class ="slika" src ="ImgRes/patch.jpg" id ="cetvrta">
</div>
<div>
<p style = "color:white; font-size : 20px; position:relative; left:10%; top: -50px; width:80%">
<span style ="font-size:26px">Hotfix 0.12.9.10510.</span>
<br><br><br>
Fixed:
<br><br><br>
• The incorrect calculation of the recoil of weapons with the buttstock folded and mounted on the buttstock butt pad
<br><br><br><br><br><br>
<span style ="font-size:26px">Hotfix 0.12.9.10489.</span>
<br><br><br>
Fixed:
<br><br><br>
• Raiders behaving incorrectly in different conditions<br><br>
• Searches of system units on location did not happen right away<br><br>
• Application of buffs / debuffs from food, water, and stimulants if the character already has a debuff<br><br>
• Errors that caused the game server to crash<br><br>
• Visual duplication of item characteristics in the flea market<br><br>
• Various bugs in the game client<br><br>
</p>
</div>
<ul class="banner_nav">

			<a href = "#prva" style = "text-decoration:none">   <li class="item">
				<div>Patch 0.12 teaser</div>
			</li>
			<a href = "#druga" style = "text-decoration:none">	<li class="item">
				<div> RAID episode 1</div>
			</li></a>
			<a href = "#treca" style = "text-decoration:none">	<li class="item">
				<div>RAID episode 2</div>
			</li>
			<a href = "#cetvrta" style = "text-decoration:none"><li class="item">
				<div>Patch notes</div>
			</li>
	</ul>
	

</body>
</html>
