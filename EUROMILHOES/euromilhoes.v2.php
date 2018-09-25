<?php
include_once("libchave.php");
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
                <li><?php echo $numeros[0]; ?></li>
                <li><?php echo $numeros[1]; ?></li>
                <li><?php echo $numeros[2]; ?></li>
                <li><?php echo $numeros[3]; ?></li>
                <li><?php echo $numeros[4]; ?></li>
            </ul>
            <ul class="estrelas">
                <li><?php echo $estrelas[0]; ?></li>
                <li><?php echo $estrelas[1]; ?></li>
            </ul>
        </div>
        <div id="pagefoot">
            &copy; &lt;Pedro Moreira&gt; nota:  O Prof. tem 50% de comissão
        </div>
    </body>
</html>