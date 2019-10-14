<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Integração do HTML com PHP</title>
</head>
<body>
    <?php
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "A raiz quadrada de $valor é ". number_format($rq, 2);
    ?>
    <a href="ex001.html">Voltar</a>
</body>
</html>