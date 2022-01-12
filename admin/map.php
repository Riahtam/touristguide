<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVmidE2g_zuC_tPz4Qc6fivx4qUdKTJSs&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <script>
     

     

      function initMap() {
          var pune = {lat: 18.5204, lng: 73.8567};
        map = new google.maps.Map(document.getElementById("map"), {
          zoom: 10,
          center: pune
        });

        var marker = new google.maps.Marker({
            position: pune,
            map: map
        });
      }
    </script>
  </head>
  <body>
    <div id="map"></div>
  </body>
</html>
