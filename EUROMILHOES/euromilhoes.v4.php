<?php
$url = "http://localhost/SIR1819/ECGM_PL/EUROMILHOES/serveChaves.php";

// obter a string JSON
$chaveJSON = file_get_contents($url);

// descodificar o JSON para obter um objeto PHP
$chavePHP = json_decode($chaveJSON);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Euromilhões</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="euromilhoes.css">
    </head>
    <body>
        <div id="pagehead">
            <h1>Euromilhões</h1>
        </div>
        <div class="chave">
            <ul class="numeros">
                <li><?php echo $chavePHP->numeros[0]; ?></li>
                <li><?php echo $chavePHP->numeros[1]; ?></li>
                <li><?php echo $chavePHP->numeros[2]; ?></li>
                <li><?php echo $chavePHP->numeros[3]; ?></li>
                <li><?php echo $chavePHP->numeros[4]; ?></li>
            </ul>
            <ul class="estrelas">
                <li><?php echo $chavePHP->estrelas[0]; ?></li>
                <li><?php echo $chavePHP->estrelas[1]; ?></li>
            </ul>
        </div>
        <div id="pagefoot">
            &copy; &lt;Pedro Moreira&gt; nota:  O Prof. tem 50% de comissão
        </div>
    </body>
</html>