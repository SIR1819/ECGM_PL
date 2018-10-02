<?php

$url_base = "https://api.darksky.net/forecast";
$apikey = "814e5b27d87937feb926c8b0178f77c3";
$lat = "41.866902";
$lon = "-8.438903";
$params = "units=si";

$url = $url_base . "/" . $apikey . "/" . $lat . "," . $lon . "?" . $params;

//echo $url;

$previsaoJSON = file_get_contents($url);
$previsaoPHP = json_decode($previsaoJSON);

$temperatura = $previsaoPHP->currently->temperature;
$icon = $previsaoPHP->currently->icon;
$iconurl = "https://darksky.net/images/weather-icons/" . $icon . ".png";

//echo $temperatura;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1> Estado do tempo em Prozelo (Arcos de Valdevez) </h1>
<h2> temp : <?php echo $temperatura; ?> </h2>
<img src="<?php echo $iconurl; ?>"/>
    
</body>
</html>