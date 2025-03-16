<?php

echo "Hello World \n";
print "Hello World \n"; // Há algumas limitações e diferenças ao echo

$name = "Lucas\n";
echo $name;

$y = 1;
$x = $y;
$y = 7;
echo $x; // passagem por valor, não por referencia = 1. Por & na frente do y para ser por referencia

echo "Hello $name";
echo "Hello" . $name; // Maneiras iguais de imprimir resultado. ESSE ESTA CONCATEMANDO



?>