<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <!-- DADOS PASSADO COM GET -->
    <style>
        .container{
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        input[type="text"]{
            margin: 5px;
            width: 300px;
            text-align: center;
        }
    </style>
<form method="get" action="decode.php">
    <div class="container">
    <input type="text" name="name" id="" placeholder="nome" required>
    <input type="text" name="midName" id="" placeholder="sobrenome" required>
    <input type="text" name="lastName" id="" placeholder="ultimo nome" required>
    <button type="submit">Enviar</button>
    </div>
</form>
</body>
</html>