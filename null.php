<?php
    $var = null;
    if ($var === null) {
        echo "A variavel mostra null \n";
    }
    if(is_null($var)){
        echo "A variavel mostra null \n";
    }
    var_dump($var);
    echo "\n";

    $defined = null;
    $undefined;
    isset($defined);
    isset($undefined);

    is_null($defined);
    is_null($undefined);

    $username = isset($_GET['user']) ? $_GET['user'] : 'nobody'; // Com null coalescing operator
    $username = $_GET['user'] ?? 'nobody'; // Com null coalescing operator
    $username = $_GET['user'] ?? $_POST['user'] ?? 'nobody'; // Pode ser usado com mais de uma variavel

    // Database query that might not return a result
$user = $db->findUserById($id); // might return null

// Default function parameters
function greet($name = null) {
    echo "Hello " . ($name ?? "Guest");
}
?>