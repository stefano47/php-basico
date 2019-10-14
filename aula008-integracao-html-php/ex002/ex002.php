<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Integração HTML com PHP</title>
</head>
<body>
    <?php
        $nome = $_GET["nome"] ?? "[não informado]";
        $ano = $_GET["ano"] ?? 0;
        $sexo = $_GET["sexo"] ?? "[sem sexo]";
        $idade = date("Y") - $ano;
        echo "$nome é $sexo e tem $idade anos."
    ?>
    <a href="ex002.html">Voltar</a>
</body>
</html>