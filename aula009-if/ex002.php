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
        if($i < 16) {
            $tipoVoto = "não vota";
        } elseif($i < 18 || $i > 64) {
            $tipoVoto = "voto opcional";
        } else {
            $tipoVoto = "voto obrigatório";
        }
        echo "<br/>$tipoVoto";
    ?>
    <br>
    <a href="ex002.html">Voltar</a>
</body>
</html>