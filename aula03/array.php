<?php

$array = ["a", "b", "c", "d", "e"];

// count serve para 'contar' o numero de elementos no array
for($i = 0; $i < count($array); $i++){
    echo $array[$i];
}


//array associativo possui uma chave para cada elemento
$empregados = ['nome' => 'Hugo', 'cargo' => 'contador'];
    echo "<br>";
    echo $empregados['nome'];
