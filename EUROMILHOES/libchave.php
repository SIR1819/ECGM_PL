<?php

$estrelas = array();
$numeros = array();


function gera(&$partchave, $min, $max, $num) {
    while (sizeof($partchave) < $num) {
        $novo = rand($min,$max);
        if (!in_array($novo,$partchave)) {
            array_push($partchave, $novo);
        }
    } 
    sort($partchave);
}

gera($estrelas,1,12,2);
gera($numeros,1,50,5);

//var_dump($estrelas);
//var_dump($numeros);
?>