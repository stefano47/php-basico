<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $n1 = $_GET["n1"] ?? 0;
        $n2 = $_GET["n2"] ?? 0;
        $m = ($n1 + $n2) / 2;
    ?>
    <meta charset="UTF-8">
    <title>Calculadora de média</title>
</head>
<body>
    <?php
        echo "A média entre $n1 e $n2 é $m.<br>";
        if($m < 5) {
            $sit = "REPROVADO";
        } elseif($m < 7) {
            $sit = "RECUPERAÇÃO";
        } else {
            $sit = "APROVADO";
        }
        echo "O aluno está: <span class='sit'>$sit</span>.";
    ?>
    <br>
    <a href="ex003.html">Voltar</a>
</body>
</html>