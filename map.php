        <style>
      #map {
        height: 400px;
        width: 100%;
       }
    </style>
	<div id="map"></div>
    <script>
      function initMap() {
		//var latLng = new google.maps.LatLng(latitude.toFixed(4), longitude.toFixed(4));
        var Amiens = {lat:<?php if(isset($_GET['lat']))
									echo $_GET['lat'];
								else
									echo '49.869194';
							?>
					 , lng:<?php if(isset($_GET['lng']))
									echo $_GET['lng'];
								else
									echo '2.2595558';
							?> };
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: <?php if(isset($_GET['lat']))
									echo 15;
								else
									echo 5;
							?>,
          center: Amiens
        });
        var marker = new google.maps.Marker({
          position: Amiens,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNYzzCd3Fz7giD-2Tmb6ZdQFywnPjErn0&callback=initMap">
    </script>