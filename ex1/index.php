<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex1</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <button type="submit">Enviar</button>
    </form>

    <?php 
    $nome = $_POST['nome'];
    echo "<p>Olá, $nome!</p>";
    ?>
</body>
</html>