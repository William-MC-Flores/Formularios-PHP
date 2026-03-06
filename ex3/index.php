<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex3</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="numero1">Número 1:</label>
        <input type="number" name="numero1" id="numero1">
        <label for="numero2">Número 2:</label>
        <input type="number" name="numero2" id="numero2">
        <button type="submit">Somar</button>
    </form>

    <?php
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $soma = $numero1 + $numero2;
    echo "<p>Resultado de $numero1 + $numero2 = $soma.</p>";
    ?>
</body>
</html>