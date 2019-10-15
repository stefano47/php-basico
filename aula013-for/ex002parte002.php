<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <title>Estrutura for</title>
</head>
<body>
    <?php
        $n = $_GET["num"] ?? 1;
        for($c = 1; $c <= 10; $c++) {
            $r = $n * $c;
            echo "$n x $c = $r<br/>";
        }
    ?>
    <br>
    <a href="ex002.php">Voltar</a>
</body>
</html>