<?php

$tarefa = 3;
// OBS PRECISA DO BREAK, senao junta todos o case


echo "tarefa numero: ";

switch ($tarefa) {
    case 1:
        echo " numero 1";
        break;
    case 2:
        echo " numero 2";
        break;
    case 3:
        echo " numero 3";
        break;
    default: 
    echo "nenhuma tarefa feita";
    break;
}