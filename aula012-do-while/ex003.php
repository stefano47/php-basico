<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Estrutura do..while</title>
</head>
<body>
    <form action="ex003parte002.php" method="get">
        Número: <select name="num" id="inum">
            <?php
                $c = 1;
                do{
                    echo "<option value='$c'>$c</option>";
                    $c++;
                }while($c <= 10);
            ?>
        </select>
        <input type="submit" value="Tabuada">
    </form>
</body>
</html>