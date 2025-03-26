<?php
    function soma($a, $b) {
        return $a + $b;
    }
    soma(2, 3); // 5

    // Parametros e argumentos
    function oi(
        $ola,
        $nome,
        $pontuacao = 0

    ) {
        // ...
    }

    // valor por referencia
    function makecoffee($type = "cappuccino")
{
    return "Fazendo uma xícara de café $type.\n";
}
echo makecoffee();
echo makecoffee(null);
echo makecoffee("espresso");
    
    // retorno
    function quadrado($numero) {
        return $numero * $numero;
    }

    // funções variaveis
    function coo() {
        echo "foo\n";
    }

    // funções internas
    function foo() {
        function bar() {
            echo "bar\n";
        }
    }

    // funções anonimas
    $greet = function($name)
    {
        printf("Hello %s\r\n", $name);
    };

    // arrow functions
    $soma = fn($a, $b) => $a + $b;
?>