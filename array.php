<?php
    // Arrays
    $frutas = ["Banana", "Maçã", "Morango", "Uva"];
    $numeros = [1, 2, 3, 4, 5];

    $pessoa = [
        "nome" => "João",
        "idade" => 20,
        "cidade" => "São Paulo"
    ];

    $misturado = [
        "nome" => "Maria",
        25,
        "Linguagens" => ["PHP", "JavaScript", "Python"]
    ];

    echo $frutas[0]; // Banana
    echo $numeros[2]; // 3
    echo $pessoa["nome"]; // João

    $frutas[] = "Abacaxi";
    $pessoa["sobrenome"] = "Silva";

    // Operações com arrays
    echo count($frutas); // 5
    if (array_key_exists("nome", $pessoa)) {
        echo "Existe a chave 'nome' no array pessoa";
    }
    if (in_array("Maçã", $frutas)) {
        echo "Existe a fruta 'Maçã' no array frutas";
    }

    $keys = array_keys($pessoa); // ["nome", "idade", "cidade"]
    $values = array_values($pessoa); // ["João", 20, "São Paulo"]

    // Manipulação de arrays	

    $combinado = array_merge($frutas, $numeros); // Combina os arrays
    $filtrado = array_filter($numeros, function($n) { // Filtra os números maiores que 2
        return $n > 2;
    });

    $mapeado = array_map(function($n) { // Multiplica todos os elementos por 2
        return $n * 2;
    }, $numeros);

    $reduzido = array_reduce($numeros, function($acc, $n) { // Soma todos os elementos
        return $acc + $n;
    }, 0);

    $slice = array_slice($frutas, 1, 2); // ["Maçã", "Morango"]

    array_pop($frutas); // Remove o último elemento
    array_shift($frutas); // Remove o primeiro elemento
    unset($pessoa["cidade"]); // Remove a chave "cidade" do array pessoa

    // Sorteando

    sort($frutas); // Ordena em ordem crescente
    rsort($frutas); // Ordena em ordem decrescente

    asort($pessoa); // Ordena pela chave
    arsort($pessoa); // Ordena pela chave em ordem decrescente
    ksort($pessoa); // Ordena pelos valores
    krsort($pessoa); // Ordena pelos valores em ordem decrescente

    usort($frutas, function($a, $b) { // Ordena com função de comparação
        return strlen($a) - strlen($b);
    });

    // Iteração

    foreach ($frutas as $fruta) { // Itera sobre o array frutas
        echo $fruta;
    }

    foreach ($pessoa as $keys => $values) { // Itera sobre o array pessoa
        echo "$keys: $values";
    }

    for ($i = 0; $i < count($numeros); $i++) { // Itera sobre o array números
        echo $numeros[$i];
    }

    // Arrays multidimensionais

    $alunos = [
        ["nome" => "João", "idade" => 20],
        ["nome" => "Maria", "idade" => 25]
    ];

    echo $alunos[0]["nome"]; // João

    foreach ($alunos as $aluno) {
        echo $aluno["nome"] . "is" . $aluno["idade"] . "years old";
    }
?>