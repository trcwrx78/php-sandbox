<?php

// function add($a, $b)
// {
//     return $a + $b;
// }

$add = fn ($a, $b) => $a + $b;

// echo $add(1, 2) . '<br>';

$numbers = [1, 2, 3, 4, 5];

$squaredNumbers = array_map(fn ($number) => $number * $number, $numbers);

print_r($squaredNumbers);
