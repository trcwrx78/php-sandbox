<?php
/*
Fizzbuzz Challenge:
Write a program that prints the numbers from 1 to 100. But for multiples of three print “Fizz” instead of the number and for the multiples of five print “Buzz”. For numbers which are multiples of both three and five print “FizzBuzz”. Remember, you can use the modulus operator to check if a number is divisible by another number.
*/

for ($i = 1; $i <= 100; $i++) {
  if ($i % 3 == 0 && $i % 5 == 0) {
    echo $i . '- Fizzbuzz' . '<br>';
  } elseif ($i % 3 == 0) {
    echo $i . '- Fizz' . '<br>';
  } elseif ($i % 5 == 0) {
    echo $i . '- Buzz' . '<br>';
  } else {
    echo $i . '<br>';
  }
}
