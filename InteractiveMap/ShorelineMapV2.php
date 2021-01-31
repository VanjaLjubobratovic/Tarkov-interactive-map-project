
<html>
<head>
  <title>Shoreline interactive map</title>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
  integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
  crossorigin=""/>

  <link rel="stylesheet" href="mapStyle.css">

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

 <script type="text/javascript">
   function downloadUrl(url, callback) {
    var request = window.ActiveXObject ?
    new ActiveXObject('Microsoft.XMLHTTP') :
    new XMLHttpRequest;

    request.onreadystatechange = function() {
     if(request.readyState == 4) {
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
  			} else {
  				x[i].style.visibility = 'visible';
  			}
  		}
  	}

    function onMapClick(e) {
      var popup = L.popup();
      popup
        .setLatLng(e.latlng)
        .setContent(e.latlng.toString())
        .openOn(map);
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


<!--ADDING MARKERS TO MAP FROM DATABASE-->
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
  var map = L.map('map', {zoomControl: false}).setView([57.5, 10], 2);

  /*var southWest = map.unproject([1080, 0], map.getMaxZoom());
  var northEast = map.unproject([0, 720], map.getMaxZoom());*/

  // load a tile layer
  L.tileLayer('Tiles\\{x}_{y}_{z}.jpg',
  {
    attribution: 'Tarkov Interactive Map',
    maxZoom: 3,
    minZoom: 2,
    crs: L.CRS.Simple,
    tileSize: L.point(360, 360)
  }).addTo(map);

  /*var northEast = map.unproject([1080, 0], map.getMaxZoom());
  var southWest = map.unproject([0, 720], map.getMaxZoom());*/

  /*var northEast = point(85, 199);
  var southWest = point(-59, -180);
  map.setMaxBounds(new L.LatLngBounds(southWest, northEast));*/

  map.setMaxBounds(map.getBounds());

  map.on('click', onMapClick);


 </script>
</body>
</html>
