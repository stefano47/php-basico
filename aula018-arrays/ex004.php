<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Array PHP</title>
</head>
<body>
    <pre>
        <?php
            $n = array(
                array(2, 3),
                array(3, 4),
                array(5, 9)
            );
            print_r($n);
            echo "<br/>";
            $n[0][1] = $n[1][1];
            print_r($n);
        ?>
    </pre>
</body>
</html>