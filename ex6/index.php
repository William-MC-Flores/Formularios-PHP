<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex6</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <label for="idade">Idade:</label>
        <input type="number" name="idade" id="idade">
        <button type="submit">enviar</button>
    </form>

    <?php 
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];

    if($nome || $email || $idade == null){
        echo "<p>preencha todos os campos</p>";
    } else{
        if($idade < 1){
            echo "<p>Idade invalida</p>";
        }
    }
    ?>
</body>
</html>