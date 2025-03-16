<?php

$numero_decimal = 10;
$numero_negativo = -5;
$numero_zero = 0;
$numero_hexadecimal = 0xFF; // 255 em decimal
$numero_octal = 077; // 63 em decimal
$numero_binario = 0b11111111; // 255 em decimal

echo $numero_decimal; // Imprime 10
echo "\n";
echo $numero_negativo; // Imprime -5
echo "\n";
echo $numero_zero; // Imprime 0
echo "\n";
echo $numero_hexadecimal; // Imprime 255
echo "\n";
echo $numero_octal; // Imprime 63
echo "\n";
echo $numero_binario . "\n"; // Imprime 255

// conversão

$stringNum = "10";
$numero = intval($stringNum);
echo $numero . "\n"; // Imprime 10

// verifica se é inteiro

$numero = 10;
echo is_int($numero) ? "É inteiro" : "Não é inteiro" . "\n"; // Imprime É inteiro
?>
