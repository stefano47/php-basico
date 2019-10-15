<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Estrutura do..while</title>
</head>
<body>
    <?php
        $c = 1;
        do{
            echo "$c<br/>";
            $c++;
        }while($c <= 10);

        $x = 10;
        do{
            echo "$x<br/>";
            $x--;
        }while($x >= 1);

        $j = 1;
        do{
            echo "$j ";
            $j += 2;
        }while($j <= 20);

        $y = 60;
        do{
            echo "$y <br/>";
            $y -= 3;
        }while($y >= 1);
    ?>
</body>
</html>