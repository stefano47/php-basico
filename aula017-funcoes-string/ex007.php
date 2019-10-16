<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Funções String do PHP</title>
</head>
<body>
    <?php
        # 24 - Função str_repeat()
        $txt = str_repeat("Php", 5);
        echo "$txt <br/>";

        # 25 - Função str_replace()
        $frase = "Gosto de estudar Matemática!!!";
        $novaf = str_replace("Matemática", "PHP", $frase);
        print($novaf);
    ?>
</body>
</html>