<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Rotinas em PHP</title>
</head>
<body>
    <?php
        #Rotinas com Parâmetros Dinâmicos
        function soma() {
            $p = func_get_args(); # pega todos os parâmetros passados e coloca em um vetor
            $tot = func_num_args(); # retorna o número de parâmetros que foram passados
            $s = 0;
            for($i = 0; $i < $tot; $i++) {
                $s += $p[$i];
            }
            return $s;
        }
        $r = soma(3, 5, 2, 8, 7, 6, 10);
        echo "A soma dos valores é $r";
    ?>
</body>
</html>