<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Array PHP</title>
</head>
<body>
    <pre>
        <?php
            $v = array(
                1 => 3,
                0 => 5,
                3 => 8,
                2 => 2
            );
            print_r($v);
            ksort($v); # coloca os índices em ordem crescente
            print_r($v);
            krsort($v); # coloca os índices em ordem decrescente
            print_r($v);
        ?>
    </pre>
</body>
</html>