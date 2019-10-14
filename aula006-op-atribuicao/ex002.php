<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Operadores de Atribuição</title>
</head>
<body>
    <?php
        /*Esse exercício pretende demosntrar
          o uso de operadores de incremento
          e decremento. 
        */

        $atual = $_GET["aa"];
        echo "O ano atual é $atual, o ano anterior é ". --$atual;
    ?>
</body>
</html>