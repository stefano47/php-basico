<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $txt = $_GET["t"] ?? "Texto Genérico";
        $tam = $_GET["tam"] ?? "8pt";
        $cor = $_GET["cor"] ?? "#000000";
    ?>
    <meta charset="UTF-8">
    <title>Integração do HTML com PHP</title>
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <?php
        echo "<span class='texto'>$txt</span>";
    ?>
    <a href="ex003.html">Voltar</a>
</body>
</html>