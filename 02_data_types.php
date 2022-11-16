<?php

/*

Common Data Types
(1) String
(2) Int
(3) Float
(4) Boolean
(5) Array
(6) Object
(7) NULL
(8) Resource

*/

$this_is_string = "I love php.";
echo $this_is_string . '<br>';
echo "echo the variable using wrapper inside double quotes: {$this_is_string}";

$this_is_int = 20;
echo '<hr>Int data type: ' . $this_is_int;

$this_is_float = 9990.12;
echo '<hr>Float data type: ' . $this_is_float;
echo '<hr>';

echo 5 + 5;
echo '<br>';
echo 10 / 2;

$this_is_true = true;
$this_is_false = false;
echo '<hr>Boolean data type (TRUE) return value: ' . $this_is_true;
echo '<br>Boolean data type (FALSE) return value: ' . $this_is_false;
echo '<hr>';

$this_is_array = ['I', 'Love', 'PHP'];
foreach($this_is_array as $array)
{
    echo $array . '<br>';
}

$this_is_array_second = [
    'product' => 'nescafe ice',
    'description' => 'nescafe with milk(cold)',
    'price' => 2.50,
];

echo '<hr>';

foreach($this_is_array_second as $index => $array)
{
    echo 'key: ' . $index . ', value: ' . $array;
    echo '<br>';
}

echo '<hr>';

define('HOST', 'localhost');
define('DATABASE', 'dev_database');
echo HOST;
echo '<br>';
echo DATABASE;
echo '<br>';
define("CARS", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);

foreach (CARS as $car)
{
    echo $car . '<br>';
}