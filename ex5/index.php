<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex5</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="numero">Numero:</label>
        <input type="number" name="numero" id="numero">
        <button type="submit">enviar</button>
    </form>

    <?php
    $numero = $_POST['numero'];
    if($numero % 2 == 0){
        echo "<p>O numero $numero é par</p>";
    } else{
        echo "<p>O numero $numero é impar</p>";
    }
    ?>
</body>

</html>