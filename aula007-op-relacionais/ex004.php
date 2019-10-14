<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Operadores - Relacionais</title>
</head>
<body>
    <?php
        $ano = $_GET["an"];
        $idade = 2019 - $ano;
        echo "<h2>Quem nasceu em $ano tem $idade anos.</h2>";
        $tipo = ($idade >= 18 && $idade < 65) ? "VOTO OBRIGATÓRIO" : "VOTO NÃO OBRIGATÓRIO";
        echo $tipo;
    ?>
</body>
</html>