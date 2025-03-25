<?php
    // Aritimeticos
    +$a; // Identidade
    -$a; // Negativo
    $a + $b; // Adição
    $a - $b; // Subtração
    $a * $b; // Multiplicação
    $a / $b; // Divisão
    $a % $b; // Resto
    $a ** $b; // Exponenciação

    // Incremento e Decremento
    ++$a; // Pré-incremento
    $a++; // Pós-incremento
    --$a; // Pré-decremento
    $a--; // Pós-decremento

    // Atribuição
    $a = $b; // Atribuição
    $a += $b; // Adição
    $a -= $b; // Subtração
    $a *= $b; // Multiplicação
    $a /= $b; // Divisão
    $a %= $b; // Resto
    $a **= $b; // Exponenciação

    // Binários
    $a & $b; // E
    $a | $b; // OU
    $a ^ $b; // XOR
    ~$a; // Negação
    $a << $b; // Deslocamento à esquerda
    $a >> $b; // Deslocamento à direita

    // Comparação
    $a == $b; // Igual
    $a === $b; // Idêntico
    $a != $b; // Diferente
    $a !== $b; // Não idêntico
    $a < $b; // Menor que
    $a > $b; // Maior que
    $a <= $b; // Menor ou igual
    $a >= $b; // Maior ou igual
    $a <=> $b; // Comparação de espaços de navegação

    // Controle de Erro
    /* Erro de arquivo intencional */
$my_file = @file ('arquivo_nao_existente') or
die ("Falha abrindo arquivo: erro foi '" . error_get_last()['message'] . "'");
$value = @$cache[$key];

    // Execução
    $output = `ls -al`;
    echo "<pre>$output</pre>";

    // Lógicos
    $a and $b; // E
    $a && $b; // E
    $a or $b; // OU
    $a || $b; // OU
    $a xor $b; // XOR
    !$a; // Negação

    // String
    $a . $b; // Concatenação
    $a .= $b; // Concatenação
    
    // Array 
?>