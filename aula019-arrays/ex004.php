<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Array PHP</title>
</head>
<body>
    <pre>
        <?php
            $v = array(3, 5, 8, 2);
            print_r($v);
            sort($v); # coloca um array em ordem crescente
            print_r($v);
            rsort($v); # coloca um array em ordem decrescente
            print_r($v);
            asort($v); # coloca um array em ordem crescente mas mantém os índices
            print_r($v);
            arsort($v); # coloca um array em ordem descrescente mas mantém os índices
            print_r($v);
        ?>
    </pre>
</body>
</html>