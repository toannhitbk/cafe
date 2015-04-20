@extends('frontend.layouts')

@section('contents')
    <div class="bazingaThinColumnWider">
    <h1>CONTACT</h1>
    <div class="bazingaDivider" style="float:left;"></div>
    <br />
        <div style="float:left;">
            <h2>Bazinga Cafe </h2>
            <p>
                <strong>Hải Bối - Đông Anh</strong>
                <br />
                <strong>Hà Nội</strong>
                <br />
                <strong>Việt Nam</strong>
            </p>
            <p>
                <a href="mailto:toanbk@hotmail.com.vn"><strong>toanbk@hotmail.com.vn</strong></a><br />
                <a href="http://cafe" target="_blank"><strong>http://cafe</strong></a>
            </p>

            <p><strong>Reservations:</strong></p>
            <ul>
                <li>+48 722 188 134 (igor)</li>
                <li>+48 667 200 706 (greg)</li>
            </ul>
        </div>
        <div style="float::right">
            <style>
                  #map-canvas {
                    width: 500px;
                    height: 400px;
                    margin: 0px;
                    padding: 0px;
                  }
            </style>
            <div id="map-canvas"></div>
               <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&language=ar"></script>
                <script>
                    function initialize() {
                      var mapOptions = {
                        scaleControl: true,
                        center: new google.maps.LatLng(21.1091527, 105.7976726),
                        zoom: 17
                      };

                      var map = new google.maps.Map(document.getElementById('map-canvas'),
                          mapOptions);

                      var marker = new google.maps.Marker({
                        map: map,
                        position: map.getCenter()
                      });
                      var infowindow = new google.maps.InfoWindow();
                      infowindow.setContent('<b>sdfsdfdsfdsfdsfdsf</b>');
                      google.maps.event.addListener(marker, 'click', function() {
                          infowindow.open(map, marker);
                      });
                    }

                    google.maps.event.addDomListener(window, 'load', initialize);
                </script>
            </div>
    </div><!--bazingaThinColumn-->
      
   @stop

@section('image_backgrounds')
    {image : '/frontend/img/backgrounds/background_menu.jpg'}
@stop