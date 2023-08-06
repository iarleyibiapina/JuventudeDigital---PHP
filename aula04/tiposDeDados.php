<?php
// veririfando tipo de dado com 'is_'?

$test = false;
var_dump($test);
if(is_bool($test)){
    echo "é booleano";
} else {
    echo "não é booleano";
}
echo "<br>";
$inteiro = 0;
if(is_int($inteiro)){
    echo "é inteiro";
} else {
    echo "não é inteiro";
}
echo "<br>";
//existem diversas validações:

// aqui a variavel local é redefinida a cada vez que chama
function varLet(){
    $local = 0;
    $local++;
    echo $local;
}
//static ela não perde o conteudo quando a função acaba
function varStat(){
    static $loja = 0; 
    $loja++;
    echo $loja;
}

varLet();
varLet();
varLet();
varLet();
echo "<br>";
varStat();
varStat();
varStat();
varStat();
echo "<br>";

// descobrindo tipo de variavel
echo $inteiro.' é do tipo '. gettype($inteiro);

// 'definindo' um tipo de variavel
$variavelString = '123';
$variavelNovoTipo = (float)$variavelString;
echo "<br>";
echo 'Antes a variavel '.$variavelString.' era do tipo '. gettype($variavelString) . ' e agora o tipo dela é ' . gettype($variavelNovoTipo) . ' e valor: ' . $variavelNovoTipo;
