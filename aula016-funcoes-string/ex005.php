<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Funções String do PHP</title>
</head>
<body>
    <?php
        # 9 - Função explode
        $site = "Curso em vídeo";
        $vetor = explode(" ", $site);
        print_r($vetor);
        echo "<br/>";
        # 10 - Função str_split()
        $nome = "Maria";
        $arr = str_split($nome);
        print_r($arr)
    ?>
</body>
</html>