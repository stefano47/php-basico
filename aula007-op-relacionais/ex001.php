<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Operadores - Relacionais</title>
</head>
<body>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];
        echo "<h2>Os valores passados foram $n1 e $n2</h2>";
        $r = ($tipo == "s") ? $n1 + $n2 : $n1 * $n2;
        echo "<br/>Resultado: $r";
    ?>
</body>
</html>