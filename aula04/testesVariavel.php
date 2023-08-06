<?php
$principal = 10;
$principal++;
echo $principal;
echo "<br>";
++$principal;
echo $principal;
echo "<br>";

function passou(){
    echo "passou";
}
function naoPassou(){
    echo "naoPassou";
}

if($principal === 12) passou();
echo "<br>";

$principal == 10 ? passou() : naoPassou();

?>