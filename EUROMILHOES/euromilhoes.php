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
                <li><?php echo rand(1,50); ?></li>
                <li><?php echo rand(1,50); ?></li>
                <li><?php echo rand(1,50); ?></li>
                <li><?php echo rand(1,50); ?></li>
                <li><?php echo rand(1,50); ?></li>
            </ul>
            <ul class="estrelas">
                <li><?php echo rand(1,12); ?></li>
                <li><?php echo rand(1,12); ?></li>
            </ul>
        </div>
        <div id="pagefoot">
            &copy; &lt;Pedro Moreira&gt; nota:  O Prof. tem 50% de comissão
        </div>
    </body>
</html>