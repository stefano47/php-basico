<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Funções String do PHP</title>
</head>
<body>
    <?php
        # 11 - Função implode -> join()
        $v[0] = "Curso";
        $v[1] = "em";
        $v[2] = "Vídeo";
        $t = implode("#", $v);
        print($t);

        # 12 - Função chr()
        $letra = chr(67);
        echo "<br />$letra";

        # 13 - Função ord()
        $letra = ord("c");
        echo "<br /> $letra";
    ?>
</body>
</html>