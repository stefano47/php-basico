<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <title>Estrutura for</title>
</head>
<body>
    <?php
        $num = $_GET["num"] ?? 1;
        $r = 0;
        for($c = 1; $c <= $num; $c++) {
            if($num % $c == 0) {
                $r++;
            }
        }
        if($r == 2) {
            echo "$num é primo";
        } else {
            echo "$num não é primo";
        }
    ?>
    <br>
    <a href="ex003.html">Voltar</a>
</body>
</html>