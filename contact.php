<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
$value = "Logout";
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	$value = "Register";
	$link = "http://localhost:8012/register.php";
   }
   else{
   $value = "Logout";
   $link = "http://localhost:8012/logout.php";
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

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 400px;
  text-align: center;
  margin: 20px 80px;
  font-family: arial;
  float : left;
  background-color:white;
  color: black;
}

.title {
  color: grey;
  font-size: 18px;
}

.kontakt {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px 0px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 28pt;
  color: black;
}

kontakt:hover, a:hover {
  opacity: 1;
}
.card a:hover{
	color:gray;
}


.slika{
	max-width: 390px;
	max-height: 250px;
}
.wrapper{
	position : relative;
	margin: auto;
	width:88%;
}
</style>
<title>Contact</title>
</head>
<body>

<div class="topnav">

  <!-- Centered link -->
  <div class="topnav-center">
    <a href="http://localhost:8012/phpnaslovna.php">News</a>
	<a href="http://localhost:8012/about.php">About</a>
	<a href="http://localhost:8012/contact.php" class="active">Contact</a>
	<a href="http://localhost:8012/traders.php">Traders</a>
	<a href="http://localhost:8012/InteractiveMap/ShorelineMapV2.php">Interactive Map</a>
  </div>
  
  <div class = "logo">
  <!-- Left-aligned links (default) -->
  <a href="http://localhost:8012/phpnaslovna.php" ><img src ="logo3.png" alt = "logo" style = "width:50%; height:50%;"></a>
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

<img src ="kontakt_ban.jpg" style = "display: block;
  margin-left: auto;
  margin-right: auto;
  margin-top: 110px;
  box-shadow: 0px 0px 150px 1px #ffffff;">

<div class ="wrapper">
<div class="card">
  <img src="katalinic.jpg" alt="Katalinic" style="width:100%;" class ="slika">
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
  <img src="graf.jpg" alt="Graf" style="width:100%" class ="slika">
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
  <img src="ljubo.jpg" alt="Vanja" style="width:100%" class ="slika">
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
