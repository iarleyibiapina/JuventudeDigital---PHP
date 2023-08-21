<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cor</title>
</head>
<body>
    <form action="tela.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <label for="cor">Cor</label>
        <input type="color" name="cor" id="cor">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>