<?php

//IF

$dia = false;
$noite = true;
$Car = 'nom';

if($dia != true){echo " dia |";}

if($noite == true){
    echo " noite |";
} else {
    echo " tarde |";
}

if($dia == true && $noite == true){
    echo " entardecer |";
}

if($dia == true || $noite == true){
    echo " é apenas dia ou noite |";
}

if($Car === is_string($Car) && $dia == false){
    echo " é string |";
}


$variavel1 = 1;
$variavel2 = 2;
$variavel3 = 3;

if($variavel1 == 1){
    if($variavel2 == 2){
        if($variavel3 == 3){
            echo " tudo certo |";
        }
    }
}

if($variavel1 > 1){
    echo " anatel|";
} elseif ($variavel1 <= 1){
    echo " entao é 1|";
}

//  ((V e V) e V)
if(($variavel1 == 1 && $variavel2 == 2) && ($variavel3 == 3)){
    echo " jubileu|";
}

// teste 1 linha (apenas quando resultado for booleano)
$lo = 3;
($lo == 3) ? $lo++ : $lo--;
echo $lo;