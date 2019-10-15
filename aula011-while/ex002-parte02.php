<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Estrutura While</title>
</head>
<body>
    <?php
        $i = 1;
        while($i <= 5) {
            $v = "num". $i;
            $url = "v". $i;
            $$v = $_GET[$url] ?? 0;
            $i++;
        };

        $i = 1;
        while($i <= 5) {
            $v = "num". $i;
            echo "Valor $i : ". $$v . "<br/>";
            $i++;
        };
    ?>
    <br/>
    <a href="ex002.php">Voltar</a>
</body>
</html>