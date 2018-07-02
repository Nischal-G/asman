<!DOCTYPE html>
<html>
  <head>
    <style>
      #map {
        min-width: 300px;
        min-height: 300px;
        width: 100%;
        height: 100%;
       }
    </style>
  </head>
  <body>
    <h3>My Google Maps Demo</h3>
    <div id="map"></div>
    <script>
    function initMap() {
      var uluru = {lat: 27.631447, lng: 85.369665};
      var map = new google.maps.Map(
          document.getElementById('map'), {zoom: 15, center: uluru});
      var marker = new google.maps.Marker({position: uluru, map: map});
    }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6B4H7XPGS15CSjzkc7BdptN_Ls0tsQeA&callback=initMap">
    </script>
  </body>
</html>