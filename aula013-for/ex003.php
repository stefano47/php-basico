<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <title>Estrutura for</title>
</head>
<body>
    <?php
        $num = $_GET["num"];
        $r = 0;
        for($c = 1; $c <= $num; $c++) {
            if($c % 2 == 0) {
                $r += 1;
            };
        };
        if($r === 2) {
            echo "O número $num é primo.";
        } elseif($r === 1) {
            echo "O número $num é primo";
        } else {
            echo "O número $num não é primo";
        };
    ?>
    <br>
    <a href="ex003.html">Voltar</a>
</body>
</html>