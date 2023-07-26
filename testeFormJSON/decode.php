<?php
// PUXA ARQUIVO
require 'answer.php';

// CONVERTE JSON
$dadosNovos = json_decode($dadosJson);

//var_dump($dadosNovos); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados passados</title>
</head>
<body>
    <h1>Seus dados:</h1>
    <p><?php echo $dadosNovos->nome;?></p>
    <p><?php echo $dadosNovos->sobreNome;?></p>
    <p><?php echo $dadosNovos->ultimoNome;?></p>

    <a href="./testeform.php">Digitar novos dados</a>
</body>
</html>