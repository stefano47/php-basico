<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Rotinas em PHP</title>
</head>
<body>
    <?php
        function teste($x) { # passagem de parâmetro por valor, na passagem de valor por referência seria acrescentado o & na frente da variável
            $x += 2;
            echo "<p>O valor de X é $x</p>";
        }
        $a = 3;
        teste($a); 
        echo "<p>O valor de A é $a</p>";
    ?>
</body>
</html>