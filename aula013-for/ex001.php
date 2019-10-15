<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <title>Estrutura for</title>
</head>
<body>
    <?php
        for($c = 1; $c <= 10; $c++) {
            echo "$c ";
        };
        echo "<br/>";
        for($i = 10; $i >= 1; $i--) {
            echo "$i ";
        };
        echo "<br/>";
        for($x = 0; $x <= 20; $x += 2) {
            echo "$x ";
        };
        echo "<br/>";
        for($y = 0; $y <= 50; $y += 5) {
            echo "$y ";
        };
    ?>
</body>
</html>