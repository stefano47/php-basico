<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Operadores de Atribuição</title>
</head>
<body>
    <?php
        #variáveis referenciadas

        $a = 3;
        $b = &$a;
        $b += 5;
        echo "A variável a vale $a";
        echo "<br/>A variável b vale $b";
    ?>
</body>
</html>