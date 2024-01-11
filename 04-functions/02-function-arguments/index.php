<?php

function add($a = 1, $b = 1)
{
  return $a + $b;
}

echo add(1, 2);
echo '<br>';
echo add(100, 250);
echo '<br>';
echo add();

function sayHello($name = 'World')
{
  return 'Hello ' . $name;
}

echo sayHello();
echo '<br>';

function addAll(...$numbers)
{
  $total = 0;
  foreach ($numbers as $number) {
    $total += $number;
  }
  return $total;
}

echo addAll(1, 2, 3, 4, 5, 6, 7, 8, 9);
