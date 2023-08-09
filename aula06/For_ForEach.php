<?php

$listaNumeros = [1, 2, 3, 4, 5, "fim", 6, 7, 8, 9, 10];
$listaNumerosReserva = [1,2,4,5,6,7,8,9,10,11,12,13,14,15];
$listaChaveada = array("nome" => "julio", 'sobrenome' => "nunes");
$tamanhoArray = count($listaNumeros);

// ____________________________________________________________________________________________
echo "caso 01:";
$teste = true;
while($teste){
    // roda array se achar string, para
    for($i=0;$i < $tamanhoArray;$i++){
        echo "$listaNumeros[$i]"; 
        if(gettype($listaNumeros[$i]) == "string"){
            $teste = false;
        }
    }
}
echo "<br>";


// ____________________________________________________________________________________________
echo "caso 02:";

foreach ($listaNumerosReserva as $x) {
    # code...
    echo $x;    
}
echo "<br>";

echo "caso 02.1:";
foreach ($listaChaveada as $chave) {
    # code...
    echo "<br> trazendo o valor: $chave";
    echo "<br>";
    echo "<br>buscando pela chave: ".$listaChaveada['nome'].$listaChaveada['sobrenome']; 
}
echo "<br>";

// ____________________________________________________________________________________________
echo "caso 03:";

$contador = 0;
$esperado = 0;
echo "<br> somando os valores do array até resultar em 40 <br>";
do {
    // pega elemento da posiçao atual e soma os valores.
    $esperado += $listaNumerosReserva[$contador];
    echo "valor atual: $esperado";
 $contador++;
} while ($esperado <= 40);

