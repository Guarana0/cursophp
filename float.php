<?php

// Definindo floats em diferentes notações
$float_decimal = 3.14;
$float_cientifica = 3.14e2; // 314
$float_negativa = -7.6;

echo "Float decimal: " . $float_decimal . "\n";
echo "Float em notação científica: " . $float_cientifica . "\n";
echo "Float negativo: " . $float_negativa . "\n";

// Demonstrando imprecisão
$a = 0.1;
$b = 0.2;
$c = $a + $b;
echo "0.1 + 0.2 = " . $c . "\n"; // Pode não ser exatamente 0.3

// Arredondamento
echo "Arredondando " . $float_decimal . ":\n";
echo "round(): " . round($float_decimal) . "\n";
echo "ceil(): " . ceil($float_decimal) . "\n"; 
echo "floor(): " . floor($float_decimal) . "\n";

// Formatação
$valor_grande = 1234567.89;
echo "Formato com number_format(): " . number_format($valor_grande, 2, ',', '.') . "\n";

// Verificação de tipo
echo is_float($float_decimal) ? "É float" : "Não é float";

?>