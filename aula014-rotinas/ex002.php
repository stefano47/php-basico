<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Rotinas em PHP</title>
</head>
<body>
    <?php
        function soma($a, $b) {
            $s = $a + $b;
            return $s;
        }
        $x = 4;
        $y = 3;
        $r = soma($x, $y);
        echo "$x + $y = $r";
    ?>
</body>
</html>