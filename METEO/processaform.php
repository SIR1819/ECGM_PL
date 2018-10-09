<?php

// mostra variavel "local" GET

if (isset($_GET["local"])) {
    $local = $_GET["local"]; 
} else {
    $local = NULL;
}


if ($local) {
    echo "o valor que chegou foi " .$local;
} else {
    echo "não chegou aqui nada";
}
?>