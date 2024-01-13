<?php

class MathUtility
{
  public static $pi = 3.14;

  public static function add(...$nums)
  {
    return array_sum($nums);
  }
}

// $mathUtil1 = new MathUtility();
// $mathUtil2 = new MathUtility();
// echo $mathUtil1->pi . '<br>';
// echo $mathUtil2->pi . '<br>';

echo MathUtility::$pi . '<br>';
echo MathUtility::add(1, 2, 3, 4, 5) . '<br>';
