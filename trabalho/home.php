<?php
    if(isset($_POST['nome']) && isset($_POST['cep'])){
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $cidade = $_POST['cidade'];
        $bairro = $_POST['bairro'];
        $cep = $_POST['cep'];
    } else {
        header('location: ./index.php');
        }
    $arrayGlobal = ["Gol", "Uno", "Pálio", "Vectra", "Fiesta", "206", "Ka", "Siena", "Golf GTi", "Siena"];
    function exibeArray($array){
    foreach($array as $items){
        print("<li>".$items."</li>");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tião 'ficinas'</title>
    <style>
        header{
            text-align: center;
        }
        .info-user{
            padding-top: 16px;
        }
        .info-user:hover{
            border: 1px dotted black;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <header>
    <h1>Seja bem vindo a 'oficina do tião'</h1>
    <p>Agende agora e seu veiculo tera o melhor 'tendimentu' 'du' 'ciara'</p>
    <sub>Conserto seu carro <strong>NA SUA CASA!</strong></sub>
    </header>
    <main>
        <p>ANOTADO homi!, agora só esperar que o tião chegará</p>

        <div class="info-user">
            <ul>
            <span>Nome: </span>
            <?php echo $nome?>
            <br>
            <span>Endereco: </span>
            <?php echo $endereco?>
            <br>
            <span>Cidade: </span>
            <?php echo $cidade?>
            <br>
            <span>Bairro: </span>
            <?php echo $bairro?>
            <br>
            <span>Cep: </span>
            <?php echo $cep?>
            </ul>
        </div>

        <div class="title" style="text-align: center;">
    <h1>TIÂO TRABALHA COM:</h1>
    </div>
    <div style="border: 1px solid black; width: 200px; text-align: center;" >
        <h2>Lista de carros</h2>
        <hr>
        <div class="items">
            <ul style="text-align: start;">
        <?php echo exibeArray($arrayGlobal) ?>
            </ul>
        </div>
    </div>
    </main>
</body>
</html>