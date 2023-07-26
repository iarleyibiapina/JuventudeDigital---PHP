<?php
// RECEBE DADOS E CONVERTE EM JSON


$dados = ["nome" =>$_GET["name"], "sobreNome" => $_GET["midName"], "ultimoNome" => $_GET["lastName"]];
// impossivel pois aqui é array
// echo $dados;
$dadosJson = json_encode($dados);
echo $dadosJson;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

