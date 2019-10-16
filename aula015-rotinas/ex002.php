<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Rotinas em PHP</title>
</head>
<body>
    <?php
        # Rotinas Externas
        include_once "funcoes.php"; # poderia ser usado o require
        # o include_once testa se o arquivo já foi carregado no script
        echo "<h1>Testando novas funções</h1>";
        ola();
        mostrarValor(4);
        echo "<h2>Finalizando o teste</h2>";
    ?>
</body>
</html>