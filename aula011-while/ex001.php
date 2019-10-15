<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Estrutura While</title>
</head>
<body>
    <?php
        $c = 1;
        while($c <= 10) {
            echo $c. "<br/>";
            $c++;
        };
        
        $x = 10;
        while($x >= 0) {
            echo $x. "<br/>";
            $x -= 2;
        };
    ?>
</body>
</html>