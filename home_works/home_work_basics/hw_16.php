<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 23.05.2016
 * Time: 14:33
 */
$a = 11;
$b = 3;

if ($a > $b) {
    echo "Число $a больше числа $b";
} else {
    echo "Число $b больше числа $a";
}

echo "<br>";

echo "Из двух чисел $a и $b большим является число " . max($a, $b);