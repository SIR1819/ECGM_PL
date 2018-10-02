<?php
include_once("CGeraChave.php");

$novachave = new GeraChave();
header("Content-Type: application/json");
echo $novachave->asJSON();
?>