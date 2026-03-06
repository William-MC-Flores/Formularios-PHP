<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex2</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <label for="idade">Idade:</label>
        <input type="number" name="idade" id="idade">
        <button type="submit">Enviar</button>
    </form>

    <?php 
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    if ($idade < 1) {
       echo "<p>Idade inválida.</p>";
    } else {
        echo "<p>Olá, $nome!</p>";
        echo "<p>Você tem $idade anos.</p>";
        
        if ($idade < 18) {
            echo "<p>Você é menor de idade.</p>";
        } else {
            echo "<p>Você é maior de idade.</p>";
        }
    }
    ?>
</body>
</html>