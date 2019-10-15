<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Estrutura Switch</title>
</head>
<body>
    <?php
        $d = $_GET["ds"] ?? 0;

        switch($d) {
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                $r = "tem aula";
                break;
            case 7:
            case 8:
                $r = "não tem aula";
                break;
            default:
                echo "Dia da semana inválido";
        };

        echo "Hoje o aluno $r";
    ?>
</body> 
    <br>
    <a href="javascript:history.go(-1)">Voltar</a>
</html>