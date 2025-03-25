<?php
    // Estruturas de Controle
    if ($a > $b) {
        echo "A é maior que B";
    } elseif ($a < $b) {
        echo "A é menor que B";
    } else {
        echo "A é igual a B";
    }

    // Loops
    while ($a < 10) {
        echo $a;
        $a++;
    }
    do {
        echo $a;
        $a++;
    } while ($a < 10);

    for ($i = 0; $i < 10; $i++) {
        echo $i;
    }

    foreach ($array as $value) { // O foreacho é usa do para iterar sobre arrays. Ex: [1, 2, 3]
        echo $value;
    }

    // break
    for ($i = 0; $i < 10; $i++) {
        if ($i == 5) {
            break;
        }
        echo $i;
    }

    // continue
    for ($i = 0; $i < 10; $i++) {
        if ($i == 5) {
            continue;
        }
        echo $i;
    }

    // switch
    switch ($a) {
        case 1:
            echo "A é 1";
            break;
        case 2:
            echo "A é 2";
            break;
        default:
            echo "A não é 1 nem 2";
    }

    // match
    match ($a) {
        1 => "A é 1",
        2 => "A é 2",
        default => "A não é 1 nem 2",
    };

    // declare estudar mais depois
    declare(ticks=1) {
        // código
    }

    // return
    function soma($a, $b) {
        return $a + $b;
    }

    // include
    include 'arquivo.php'; // Inclui o arquivo.php

    // require
    require 'arquivo.php'; // Inclui o arquivo.php e emite um erro fatal se o arquivo não for encontrado

    // include_once
    include_once 'arquivo.php'; // Inclui o arquivo.php apenas uma vez

    // require_once
    require_once 'arquivo.php'; // Inclui o arquivo.php apenas uma vez

    // goto
    goto a;
    echo 'Foo';
    a:
    echo 'Bar';
    
?>