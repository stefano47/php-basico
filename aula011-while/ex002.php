<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Estrutura While</title>
</head>
<body>
    <form action="ex002-parte02.php" method="get">
        <?php
            $c = 1;
            while($c <= 5) {
                echo "Valor $c: <input type='number' name='v$c' id='iv1' max='100' min='0' value='0'><br>";
                $c++;
            };
        ?>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>