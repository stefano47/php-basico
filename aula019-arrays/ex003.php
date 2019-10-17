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
            array_unshift($v, 7); # add um elemento na primeira posição do array
            print_r($v);
            array_shift($v); # rm o primeiro elemento do array
            print_r($v);
        ?>
    </pre>
</body>
</html>