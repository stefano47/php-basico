<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Funções String do PHP</title>
</head>
<body>
    <?php
        # 1 - Função printf()
        $t = "Aqui temos um texto gigante criados pelo PHP que vai mostrar o funcionamento da função wordwrap";
        $r = wordwrap($t, 20, "<br/>\n");
        echo $r;
    ?>
</body>
</html>