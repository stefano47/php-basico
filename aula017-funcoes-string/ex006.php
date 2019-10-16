<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Funções String do PHP</title>
</head>
<body>
    <?php
        # 21 - Função substr_count()
        $f = "estou aprendo PHP no curso em vídeo de PHP";
        $cont = substr_count($f, "PHP");
        echo "PHP encontrado $cont vezes<br />";

        # 22 - Função substr()
        $site = "Curso em Vídeo";
        $sub = substr($site, 0, 5);
        echo "$sub<br/>";

        # 23 - Função str_pad()
        $nome = "Stefano";
        $nn = str_pad($nome, 30, " ", STR_PAD_RIGHT);
        echo "Meu nome é $nn lindo";
    ?>
</body>
</html>