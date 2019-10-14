<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Operadores aritiméticos</title>
</head>
<body>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo "<h2>Números $n1 e $n2<br/></h2>";

        $soma = $n1 + $n2;
        echo "<br/>A soma vale $soma";

        $sub = $n1 - $n2;
        echo "<br/>A subtração vale $sub";

        $mut = $n1 * $n2;
        echo "<br/>A multiplicação vale $mut";

        $div = $n1 / $n2;
        echo "<br/>A divisão vale $div";

        $mod = $n1 % $n2;
        echo "<br/>O resto da divisão vale $mod";

        #Ordem de precedência
        # ()
        # * / % -> o que aparecer primeiro da esquerda pra direita
        # + - -> o que aparecer primeiro da esquerda pra direita

        $media = ($n1 + $n2) / 2;
        echo "<br/>A média é $media";
    ?>
</body>
</html>