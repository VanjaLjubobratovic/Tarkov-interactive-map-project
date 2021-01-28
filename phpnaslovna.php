<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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

<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color:black;
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

.logo a{
  padding: 10px 0px;
}
.logo a:hover{
  background-color: #333;
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
.slika{
width : 80%;
object-fit:contain;
 display: block;
 margin-left: auto;
 margin-right: auto;
 box-shadow: 0px 0px 150px 1px #996600;
}
.div_slika{
padding: 120px 0px;
position:relative;
}








.banner_nav {
    position: fixed;
    right: 10px;
    top: 50%;
	margin-top: -143px;
	z-index: 105;
	max-width: 80%;
}
.banner_nav .item {
	opacity:0.8;
	box-shadow: 0 0 100px rgba(65,61,52,1), 0 0 6px rgba(232,190,107,0.8);
	border: 1px solid #000;
	margin-left: auto;
	margin-right: 0;
	margin-bottom: 10px;
	border-radius: 13px;
	width: 27px;
	max-width: 100%;
	height: 27px;
	font-size: 18px;
	font-family: 'Bender';
	color: #9a8866;
	background: black;
    cursor: pointer;
	text-align: center;
	line-height: 1.3em;
	position: relative;
	overflow: hidden;
	-webkit-transition: width 0.2s ease-in-out;
	-moz-transition: width 0.2s ease-in-out;
	-o-transition: width 0.2s ease-in-out;
	transition: width 0.2s ease-in-out;
}
.banner_nav .item.active {
	opacity:1;
	background: #9a8866;
	color: black;
}
.banner_nav .item.last {
	margin-bottom: 0;
}
.banner_nav .item div {
	display: none;
	padding: 0;
	margin: 0;
	width:100%;
}
.banner_nav .item:hover div {
	display: block;
}
.banner_nav .item:hover {
	width: 310px;
}

.overlay {
  position: absolute;
  top: 11%;
  bottom: 0;
  left: 10%;
  right: 0;
  height: 78%;
  width: 80%;
  opacity: 0;
  transition: .5s ease;
  background: rgba(0,0,0,0.5);
}

.overlay:hover {
  opacity: 1;
}

.text {
  position: relative;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.naslov{
	font-size : 50pt;
	font-family : Bookman;
	text-align : center;
	color: white;
	position: relative;
	top: 100px;
	z-index : 2;
}

html {
  scroll-behavior: smooth;
}
</style>
<script></script>
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

<div class="naslov">
<p style =" margin-bottom:0px; padding : 0px">Most Recent Tarkov News</p>
<hr style ="margin-top : 5px; border: 5px solid darkorange;  border-radius: 5px;">
</div>
<div class = "div_slika">
<img class ="slika" src ="slika1.jpg" id ="prva">
 <div class="overlay">
    <div class="text"><iframe width="800" height="500" src="https://www.youtube.com/embed/ODiEy2ClWNw">
</iframe></div>
  </div>
</div>

<div class = "div_slika">
<img class ="slika" src ="slika3.jpg" id ="druga">
 <div class="overlay">
    <div class="text"><iframe width="800" height="500" src="https://www.youtube.com/embed/UPnrY5BxddI">
</iframe></div>
  </div>
</div>

<div class = "div_slika">
<img class ="slika" src ="slika4.jpg" id ="treca">
 <div class="overlay">
    <div class="text"><iframe width="800" height="500" src="https://www.youtube.com/embed/Uoahlpj8noI">
</iframe></div>
  </div>
</div>

<div class = "div_slika">
<img class ="slika" src ="patch.jpg" id ="cetvrta">
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
