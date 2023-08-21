<?php


$metodo = $_SERVER['REQUEST_METHOD'];

echo '<br>';

print('Variável SERVER: <br>');
print_r($_SERVER);


echo '<br>';

echo '<br>';
print('Variável ENV: <br>');
print_r($_ENV);
echo '<br>';





echo '<br>  Método: ' . $metodo ;


?>