<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Operadores aritiméticos</title>
</head>
<body>
    <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo "<h2>Valores recebidos: $v1 e $v2</h2><br/>";
        echo "<h1>Funções aritiméticas PHP</h1><br/>";

        echo "<br/>Valor absoluto de $v1 é ". abs($v1);
        echo "<br/>$v1<sup>$v2</sup> é ". pow($v1, $v2);
        echo "<br/>A raiz quadrada de $v1 é ". sqrt($v1);
        echo "<br/>O valor arredondado de $v2 é ". round($v2); // ceil ou floor
        echo "<br/> A parte inteira de $v2 é ". intval($v2);
        echo "<br/> O valor de $v1 em moeda é R$". number_format($v1, 2, ",", ".")
    ?>
</body>
</html>