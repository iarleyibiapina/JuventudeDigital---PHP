<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa</title>
    <style>
        header{
            text-align: center;
        }
        .form-data{
            height: 60vh;
            display: flex;
            justify-content: center;
        }
        form{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        input{
            margin-bottom: 25px;
            width: 20rem;
            height: 30px;
            text-align: center;
        }
        button{
            padding: 10px
        }
        label{
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
    <h1>Seja bem vindo a 'oficina do tião'</h1>
    <p>Agende agora e seu veiculo tera o melhor 'tendimentu' 'du' 'ciara'</p>
    <sub>Conserto seu carro <strong>NA SUA CASA!</strong></sub>
    </header>
    <div class="form-data">
        <form action="home.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required placeholder="Exemplo: João Fernado">
            <label for="endereco">Endereco:</label>
            <input type="text" name="endereco" id="endereco" placeholder="Rua: xxxxxxx">
            <label for="cidade">Cidade:</label>
            <input type="text" name="cidade" id="cidade" placeholder="Fortaleza, salvador...">
            <label for="bairro">Bairro:</label>
            <input type="text" name="bairro" id="bairro" placeholder="Cristo redentor, Pirambu...">
            <label for="cep">CEP:</label>
            <input type="text" name="cep" id="cep" required placeholder="XXXXXX-XXX">
            <button type="submit">Enviar dados</button>
        </form>
        </div>
</body>
</html>