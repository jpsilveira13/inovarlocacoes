@extends('layout')

@section('content')
    <div class="mapas" style="margin-top: 200px">
        <div class="col-md-12">
        <p>Localização</p>

        <p><button onclick="geoFindMe()">Mostrar minha localização</button></p>

        <div id="out">
            <div class="center-block">

            </div>
        </div>

        <script>
            function geoFindMe() {
                console.log('teste');
                var output = document.getElementById("out");

                if (!navigator.geolocation){
                    output.innerHTML = "<p>Geolocalização nao suportada</p>";
                    return;
                }
                function success(position) {
                    var latitude  = position.coords.latitude;
                    var longitude = position.coords.longitude;

                    output.innerHTML = '<p>Latitude é ' + latitude + '° <br>Longitude é ' + longitude + '°</p>';

                    var img = new Image();
                    img.src = "https://maps.googleapis.com/maps/api/staticmap?center=" + latitude + "," + longitude + "&zoom=13&size=600x600&sensor=false";

                    output.appendChild(img);
                };

                function error() {
                    output.innerHTML = "Região desconhecida";
                };

                output.innerHTML = "<p>Localizando…</p>";

                navigator.geolocation.getCurrentPosition(success, error);
            }

        </script>

        </div>
    </div>
@endsection