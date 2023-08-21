<?php
require './verify.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .userColor{
            color: <?php echo $corSelecionada . ";"?>
        }
    </style>
</head>
<body>
    <h1 class="userColor"><?php echo $nome ?> Cor escolhida</h1>
    <br>
    <a href="./form.php">Voltar</a>
</body>
</html>