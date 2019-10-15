<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Estrutura Switch</title>
</head>
<body>
    <?php
        $est = $_GET["est"] ?? 1;

        switch($est) {
            case 1:
                $r = "Região Norte";
                break;
            case 2:
                $r = "Região Nordeste";
                break;
            case 3: 
                $r = "Região Centro-Oeste";
                break;
            case 4:
                $r = "Região Sudeste";
                break;
            case 5:
                $r = "Região Sul";
                break;
            default:
                $r = "NÃO INFORMADO";
        }
        echo "É um estado da $r.";
    ?>
    <br>
    <a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>