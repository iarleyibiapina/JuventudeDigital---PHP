<?php
if(isset($_POST['cor']) && isset($_POST['nome'])){
    $corSelecionada = $_POST['cor'];
    $nome = $_POST['nome'];
    // echo $corSelecionada;
} else {
    header ('location: ./form.php');
}
?>

