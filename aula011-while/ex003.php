<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Estrutura While</title>
</head>
<body>
    <?php
        $i = $_GET["ini"] ?? 0;
        $f = $_GET["fim"] ?? 0;
        $p = $_GET["passo"] ?? 1;

        if($i > $f) {
            while($i >= $f) {
                echo "$i ";
                $i -= $p;
            }; 
        } else {
            while($i <= $f) {
                echo "$i ";
                $i += $p;
            };
        };
    ?>
    <br>
    <a href="ex003.html">Voltar</a>
</body>
</html>