<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Operadores - Relacionais</title>
</head>
<body>
    <?php
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $media = ($nota1 + $nota2) / 2;
        echo "<h2>A média entre $nota1 e $nota2 é $media</h2>";
        $sit = $media < 6 ? "REPROVADO" : "APROVADO";
        echo "<br/>O aluno está <strong>$sit</strong>";
    ?>
</body>
</html>