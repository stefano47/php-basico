<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Operadores de Atribuição</title>
</head>
<body>
    <?php
        $preco = $_GET["p"];
        echo "O preço do produto é R$". number_format($preco, 2);

        $preco += $preco * 10/100;
        echo "<br/>O preço com aumento de 10% R$". number_format($preco, 2);
    ?>
</body>
</html>