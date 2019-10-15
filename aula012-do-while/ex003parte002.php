<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Estrutura do..while</title>
</head>
<body>
    <?php
        $n = $_GET["num"] ?? 1;
        $c = 1;
        do{
            $r = $n * $c;
            echo "$n x $c = $r<br/>";
            $c++;
        }while($c <= 10);
    ?>
    <br>
    <a href="ex003.php">Voltar</a>
</body>
</html>