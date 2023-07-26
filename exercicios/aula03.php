<?php 
// array com a familia
$familia = ["iarley", "yasmim", "ana alice"];
// array associativo com nome, endereco e email
$dados = ["nome"=>$familia[0], "endereco"=>"Celene", "email"=>"iarley@gmail.com"];
//funçao com parametro endereco e exibir na tela
function exibeEndereco($varLocal){
    return $varLocal["endereco"];
};
?>

<!DOCTYPE html>
<html>
<body>
<h1>Exibindo dados</h1>
<br>
<p>Familia de <?php echo $familia[0]?>:</p>
<ol>
    <?php for($i = 0; $i < count($familia); $i++){
        ?><li> <?php echo $familia[$i]; ?></li>
    <?php } ?>
</ol>
<br>

<p>Agora o endereço e email do array associativo:</p>
        <p>Endereco: <?php echo $dados["endereco"]; ?></p>
        <p>Email: <?php echo $dados["email"]; ?></p>
        <br>

<p>E o endereço passado como parametro em uma função:</p>
<p>Endereco pela função é: <?php echo exibeEndereco($dados); ?></p>

</body>
</html>
