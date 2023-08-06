<?php


$inicio = true;
$valor = 0;


while($inicio == true){
    echo $valor;
    ++$valor;
    if($valor > 10){
        $valor = false;
        // OU 
        // break melhor opção
        break;
    }
}