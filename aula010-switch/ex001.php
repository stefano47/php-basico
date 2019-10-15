<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Estrutura Switch</title>
</head>
<body>
    <?php
        $n = $_GET["num"] ?? 0;
        $op = $_GET["op"] ?? 1;
        switch($op) {
            case 1:
                $r = $n * 2;
                break;
            case 2: 
                $r = pow($n, 3);
                break;
            case 3:
                $r = sqrt($n);
                break;
        }
        echo $r;
    ?>
    <br>
    <a href="ex001.html">Voltar</a>
</body>
</html>