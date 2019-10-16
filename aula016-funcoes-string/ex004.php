<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Funções String do PHP</title>
</head>
<body>
    <?php
        # 4 - Função strlen()
        # 5 - Função trim()
        # 6 - Função ltrim()
        # 7 - Função rtrim()
        # 8 - Função str_word_count()

        $s = "Eu vou estudar PHP agora";
        $cont = str_word_count($s, 0);
        printf($cont);
        
    ?>
</body>
</html>