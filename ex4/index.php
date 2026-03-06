<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex4</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="numero1">Número 1:</label>
        <input type="number" name="numero1" id="numero1">
        <label for="numero2">Número 2:</label>
        <input type="number" name="numero2" id="numero2">
        <button type="submit" name="somar">Somar</button>
        <button type="submit" name="subtrair">Subtrair</button>
        <button type="submit" name="multiplicar">Multiplicar</button>
        <button type="submit" name="dividir">Dividir</button>
    </form>

    <?php
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $soma = $numero1 + $numero2;
    $subtracao = $numero1 - $numero2;
    $multiplicacao = $numero1 * $numero2;
    $divisao = $numero1 / $numero2;
    if (isset($_POST['somar'])) {
        echo "<p>Resultado de $numero1 + $numero2 = $soma.</p>";
    } elseif (isset($_POST['subtrair'])) {
        echo "<p>Resultado de $numero1 - $numero2 = $subtracao.</p>";
    } elseif (isset($_POST['multiplicar'])) {
        echo "<p>Resultado de $numero1 * $numero2 = $multiplicacao.</p>";
    } elseif (isset($_POST['dividir'])) {
        if ($numero2 != 0) {
            echo "<p>Resultado de $numero1 / $numero2 = $divisao.</p>";
        } else {
            echo "<p>Não é possível dividir por zero.</p>";
        }
    }
    ?>
</body>

</html>