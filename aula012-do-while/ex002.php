<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Estrutura do..while</title>
</head>
<body>
    <?php
        $num = $_GET["num"] ?? 1;
        $c = $num;
        $fat = 1;
        do{
            $fat *= $c;
            $c--;
        }while($c >= 1);
        echo "$num! = $fat ";
    ?>
    <br>
    <a href="ex002.html">Voltar</a>
</body>
</html>