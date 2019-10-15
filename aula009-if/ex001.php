<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Estrutura IF</title>
</head>
<body>
    <?php
        $a = $_GET["ano"] ?? 1900;
        $i = date("Y") - $a;
        echo "Você nasceu em $a e terá $i anos.";
        if($i >= 18) {
            $v = "é obrigado a votar";
            $d = "já pode dirigir";
        } else {
            $v = "não pode votar";
            $d = "não pode dirigir";
        };
        echo "<br/>Com essa idade você $v e $d.";
    ?>
    <br>
    <a href="ex001.html">Voltar</a>
</body>
</html>