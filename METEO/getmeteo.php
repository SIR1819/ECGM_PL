<?php
// XFNxQ82etHEFDAjhOSzhE4hozjwbRq45

// http://www.mapquestapi.com/geocoding/v1/address?key=KEY&location=Washington,DC

if (isset($_GET["local"])) {
    $local = urlencode($_GET["local"]); 
} else {
    $local = NULL;
}

if ($local) {
// coordenadas
$GEOAPIKEY = "XFNxQ82etHEFDAjhOSzhE4hozjwbRq45";
$geo_url_base = "http://www.mapquestapi.com/geocoding/v1/address?";
$geo_api_key_param = "key=".$GEOAPIKEY;
$geo_api_location_param = "location=". $local;

$geo_url = $geo_url_base.$geo_api_key_param."&".$geo_api_location_param;

$data_geo = file_get_contents($geo_url);

$data_geo_PHP =  json_decode($data_geo);

$lat = $data_geo_PHP->results[0]->locations[0]->latLng->lat;
$lon = $data_geo_PHP->results[0]->locations[0]->latLng->lng;
$localidade = $data_geo_PHP->results[0]->locations[0]->adminArea5;
$pais = $data_geo_PHP->results[0]->locations[0]->adminArea1;

// echo "coordenadas para ".$localidade." , ".$pais. ": ". $lat. " , ". $lon;

// -- estado do tempo
$meteo_url_base = "https://api.darksky.net/forecast";
$meteo_apikey = "814e5b27d87937feb926c8b0178f77c3";
//$lat = "41.866902";
//$lon = "-8.438903";
$meteo_params = "units=si";

$meteo_url = $meteo_url_base . "/" . $meteo_apikey . "/" . $lat . "," . $lon . "?" . $meteo_params;


$previsaoJSON = file_get_contents($meteo_url);
$previsaoPHP = json_decode($previsaoJSON);

$temperatura = $previsaoPHP->currently->temperature;
$icon = $previsaoPHP->currently->icon;
$iconurl = "https://darksky.net/images/weather-icons/" . $icon . ".png";


}

?>
<html>
<head>
    <title>Info Meteorológica</title>
</head>
<body>
   <!-- formulario -->
   <div>
        <form action="getmeteo.php" method="GET">
            <input type="text" name="local" id="ilocal">
            <input type="submit" value="Obter Estado do Tempo">
        </form>
   </div> 
   <!-- info meteorógica condicional -->
   <?php
   if ($local) {
       include "info.inc.php";
   }
   ?>
</body>
</html>