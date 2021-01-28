
<html>
<head>
  <title>Shoreline interactive map</title>
  <meta charset="UTF-8">

   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>

   <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
	
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
  	#buttons {
  		width: 300px;
  		margin-top: 50px;
  		margin-left: 20px;
  		float:left;
		z-index:1;
  	}

    #map {
    	width: 1080;
    	height: 820;
    	margin-top: 50px;
    	margin-left: 50px;
    	float: left;
    	background: black;
    	border-radius: 12px;
    }

    #legend {
  		width: 300px;
  		margin-top: 50px;
  		background: black;
  		border-radius: 12px;
  		padding-right: 20px;
  		padding-left: 20px;
  		color: white;
  		float:left;
    }

    .leaflet-popup-content-wrapper {
  		background-color: black;
	}

	.toggleButton {
		background-color: #654321;
		color: black;
		text-align: center;
		font-size: 24;
		width: 150px;
		height: 150px;
		font-weight: bold;
		border-radius: 12px;
		transition-duration: 0.4s;
		margin-bottom: 10px;
		border: none;
	}

	.toggleButton:hover {
		background-color: #B2906F;
		box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
	}

	.toggleButton:focus {
		outline: none;
	}

	.legendImg {
		width: 60px;
		height: 60px;
	}

	#desc {
		color: #ffffff;
		font-weight: bold;
	}

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
    height:99px;
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

	.logo{
	}

	.logo a:hover{
	background-color:#333;
	}

	.sve{
	position:relative;
	top:60px;
	}

  </style>

  <script type="text/javascript">
  	function downloadUrl(url, callback) {
  		var request = window.ActiveXObject ?
  		new ActiveXObject('Microsoft.XMLHTTP') :
  		new XMLHttpRequest;

  		request.onreadystatechange = function() {
  			if(request.readyState == 4) {
  				//request.onreadystatechange = doNothing;
  				callback(request, request.status);
  			}
  		};
  		request.open('GET', url, true);
  		request.send(null);
  	}


  	function toggleMarkers(className) {
  		var x = document.getElementsByClassName(className);

  		for(i = 0; i < x.length; i++) {
  			if(window.getComputedStyle(x[i]).visibility === 'visible') {
  				x[i].style.visibility = 'hidden';
  				//alert("now hidden");
  			} else {
  				x[i].style.visibility = 'visible';
  				//alert("visible");
  			}
  		}
  	}
  </script>

</head>
<body>

	<!--YOUR PATHETIC HTML GOES HERE-->
	<div class="topnav">
   <!-- Centered link -->
  <div class="topnav-center">
    <a href="http://localhost:8012/ProjektRWA/phpnaslovna.php">News</a>
	<a href="http://localhost:8012/ProjektRWA/about.php">About</a>
	<a href="http://localhost:8012/ProjektRWA/contact.php">Contact</a>
	<a href="http://localhost:8012/ProjektRWA/traders.php">Traders</a>
	<a href="http://localhost:8012/ProjektRWA/ProjektRWA-main/ShorelineMapV2.php" class="active">Interactive Map</a>
  </div>
  
  <!-- Left-aligned links (default) -->
  <div class ="logo">
  <a href= "http://localhost:8012/ProjektRWA/phpnaslovna.php" ><img  src ="logo3.png" alt = "logo" style = "width:215px;position:fixed; top:10px; left:107.5px;"></a>
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
	
	<div class = "sve">
  	<div id="map"></div>
  	<div id="buttons">
  		<button class="toggleButton" onclick="toggleMarkers('stash')">Toggle Stashes</button>
  		<button class="toggleButton" onclick="toggleMarkers('boss')">Toggle Bosses</button>
  		<button class="toggleButton" onclick="toggleMarkers('extract')">Toggle Extraction Points</button>
  		<button class="toggleButton" onclick="toggleMarkers('key')">Toggle Key Spawns</button>
  	</div>

  	<div id="legend">
  		<center><h1>Legend:</h1>
  			<br>
  			<img class="legendImg" src="sanitarIcon.png">
  			<h3>Sanitar boss spawn</h3>

  			<br><hr><br>
  			<img class="legendImg" src="StashPlasticOutline.png">
  			<img class="legendImg" src="StashWooden.png">
  			<h3>Ground cache</h3>

  			<br><hr><br>
  			<img class="legendImg" src="redCard.png">
  			<h3>Valuable Key Spawns</h3>

  			<br><hr><br>
  			<img class="legendImg" src="extractPmc.png">
  			<img class="legendImg" src="extractScav.png">
  			<img class="legendImg" src="extractAll.png">
  			<h3>Extraction Points PMC, SCAV, ALL</h3>
  		</center>
  	</div>
	</div>

  <script>
  downloadUrl('http://localhost:8012/ProjektRWA/InteractiveMap/markers.php', function(data) {
  	var xml = data.responseXML;
  	var markers = xml.documentElement.getElementsByTagName('marker');
  	Array.prototype.forEach.call(markers, function(markerElem) {
  		var id = markerElem.getAttribute('ID');
  		var x_coord = markerElem.getAttribute('x_coord');
  		var y_coord = markerElem.getAttribute('y_coord');
  		var icon = markerElem.getAttribute('icon');
  		var type = markerElem.getAttribute('type');
  		var description = markerElem.getAttribute('description');

  		var stashIcon = L.icon({
  			iconUrl: icon,
  			iconSize: [40, 40],
  		});

  		var marker = L.marker([x_coord, y_coord], {icon: stashIcon});
  		map.addLayer(marker);

  		var popup = L.popup({
  			keepInView: true,
  			maxWidth: 400,
  		})
  			.setLatLng([0,0])
  			.setContent('<center><img src = "ShorelineLocations/' + id + '.png" height = "250px" width = "350px" alt = "' + type + id + '"/><br><h2 id="desc">' + description + '</h2></center>');

  		marker.bindPopup(popup);
  		L.DomUtil.addClass(marker._icon, type);

  		map.on('popupclose', function() {
  			map.panTo(map.getCenter());
  		});

  	});
  });

  // initialize the map
  var map = L.map('map').setView([5, 5], 2);

  var southWest = map.unproject([1920, 0], map.getMaxZoom());
  var northEast = map.unproject([0, 1080], map.getMaxZoom());

  // load a tile layer
  L.tileLayer('Tiles\\map_{x}_{y}.jpg',
    {
      attribution: 'Tarkov Interactive Map',
      maxZoom: 2,
      minZoom: 2,
      crs: L.CRS.Simple,
      tileSize: L.point(360, 360)
    }).addTo(map);

  	var northEast = map.unproject([1080, 0], map.getMaxZoom());
  	var southWest = map.unproject([0, 720], map.getMaxZoom());
  	map.setMaxBounds(new L.LatLngBounds(southWest, northEast));

  	//map.dragging.disable();


  	//onClick coordinate popup 
  	var popup = L.popup();
	function onMapClick(e) {
    	popup
        .setLatLng(e.latlng)
        .setContent("You clicked the map at " + e.latlng.toString())
        .openOn(map);
	}

	map.on('click', onMapClick);
  </script>
</body>
</html>
