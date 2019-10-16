<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Funções String do PHP</title>
</head>
<body>
    <?php
        # 19 - Função strpos()
        $nome = "stefano paulo";
        $pos = strpos($nome, "paulo");
        echo "A string foi encontrada na posição $pos <br/>";

        # 20 - Função str
        $nome = "stefano paulo";
        $pos = stripos($nome, "PAULO");
        echo "A string foi encontrada na posição $pos <br/>";
    ?>
</body>
</html>