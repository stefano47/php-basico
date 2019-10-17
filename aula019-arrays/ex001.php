<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Array PHP</title>
</head>
<body>
    <pre>
        <?php
            $n = array(3, 5, 8, 2);
            print_r($n);
            echo "<br/>";
            var_dump($n);
            echo "<br/>";
            echo "O vetor tem " . count($n) . " elementos";
        ?>
    </pre>
</body>
</html>