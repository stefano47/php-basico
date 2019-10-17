<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Array PHP</title>
</head>
<body>
    <pre>
        <?php
            # Chaves personalizadas

            $v = array(
                1=> "A", 
                3=> "B", 
                6=> "C", 
                8=> "D");
            $v[] = "E";
            unset($v[6]);
            print_r($v);

            echo "<br/>";

            # Chaves associativas
            
            $v = array(
                "nome" => "Ana",
                "idade" => 23,
                "peso" => 65.5,
                "fuma" => true
            );
            foreach($v as $k => $c) {
                echo "O campo $k possui o conteúdo $c <br/>";
            }
        ?>
    </pre>
</body>
</html>