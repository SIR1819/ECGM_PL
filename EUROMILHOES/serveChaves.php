<?php
include_once("CGeraChave.php");

$novachave = new GeraChave();
header("Content-Type: application/json");
sleep(5);
echo $novachave->asJSON();
?>