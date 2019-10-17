<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Array PHP</title>
</head>
<body>
    <pre>
        <?php
            $n = array(3, 5, 2, 8, 7);
            print_r($n);
            $n[] = 9;
            print_r($n);
            array_push($n, 6);
            print_r($n);
            array_pop($n); # add um elemento na última posição do vetor
            print_r($n); # rm o último elemento do vetor
        ?>
    </pre>
</body>
</html>