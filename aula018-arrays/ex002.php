<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Array PHP</title>
</head>
<body>
    <pre>
        <?php
            $c = range(5, 20, 2);
            print_r($c);
            echo "<br/>";

            # Usando o foreach
            foreach($c as $v) {
                echo "$v ";
            }
        ?>
    </pre>
</body>
</html>