<?php

// Constants só se declara uma vez = const no js
define("name","Lucas");
echo name . "\n";

const age = 11; // não funciona para condicionais e loops
echo age;

// Variable

$carro = "jaguar";
$$carro = "Mercedes"; // Variables Variables. Isso é a mesma coisa que dizer que $mercedes = "jaguar";

?>