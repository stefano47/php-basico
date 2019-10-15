<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <title>Estrutura for</title>
</head>
<body>
    <form action="ex002parte002.php" method="get">
        <select name="num" id="inum">
        <?php
            for($c = 1; $c <= 10; $c++) {
                echo "<option value='$c'>$c</option>";
            };
        ?>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>