<?php

// Single quotes - simplest form
$singleQuoted = 'Hello World ';

// Double quotes - allows variable interpolation
$name = 'PHP';
$doubleQuoted = " \n Hello $name";

// String concatenation with dot operator
$concat = 'Hello ' . 'World';

$str = " \n Hello World \n";

// Length
echo strlen($str); // 11

// Position
echo strpos($str, "World"); // 6

// Substring
echo substr($str, 0, 5); // "Hello"

// Replace
echo str_replace("World", "PHP", $str); // "Hello PHP"

// Case manipulation
echo strtoupper($str); // "HELLO WORLD"
echo strtolower($str); // "hello world"

$heredoc = <<<EOD
This is a heredoc string
Variables like $name are expanded
Multiple lines are allowed
EOD;

// Nowdoc (like single quotes)
$nowdoc = <<<'EOD'
This is a nowdoc string
Variables like $name are NOT expanded
Multiple lines are allowed
EOD;


// Escaping in double quotes
echo "She said, \"Hello!\""; 

// Escaping in single quotes
echo 'It\'s a nice day';

// Trim whitespace
$trimmed = trim(" Hello World  "); // "Hello World"

// Split string
$parts = explode(" ", "Hello World"); // ["Hello", "World"]

// Join array elements
$joined = implode(", ", ["Hello", "World"]); // "Hello, World"


?>