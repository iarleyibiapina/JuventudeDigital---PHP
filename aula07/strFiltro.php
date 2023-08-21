<?php

$om = "/link/diretorio/";

// explode, 'separa' string em um novo array
$filtro = explode("/", $om);
print_r($filtro);

echo "<br>";

// tamanho de uma string

$tamString = strlen($om);
echo $tamString;

echo "<br>";

$testeTrim = "abceda";
$testeDoisTrim = "   dk";
// trim tira a primeiro e ultimo caracter definidio pelo segundo parametro
echo trim($testeTrim, 'a');
// sem parametro tira os espaços em branco
echo trim($testeDoisTrim);

echo "<br>";
// tira parte de uma string, definida pelo segundo parametro, terceiro parametro é o tamanho max que pode ser retirado
echo substr($testeTrim, 4, strlen($testeTrim));

echo "<br>";

$str = "abcde";
// com limite tamanho do array e tirando espaços em branco.
for ($i=0; $i < strlen(trim($str)); $i++) {
    // substr vai 'pegar' vai tirar um tamanho definido no primeiro parametro, e exibir quantos 'posiçao' vai exibir no segundo parametro
    print("A letra da vez é " . substr(trim($str),$i,1)) . "<br>";
    print("A letra da vez é " . trim($str)) . "<br>";
}

// teste
$bin = "abcde";
print($bin) . "<br>";
// posiçoes sao definidas como array
// tira 1 da direita para esquerda e exibe 1
    print(substr($bin, '1', '1'));
    // pegando terceira letra
    print(substr($bin, '2', '1'));


?>