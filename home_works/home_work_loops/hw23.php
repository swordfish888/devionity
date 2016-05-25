<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24.05.2016
 * Time: 21:59
 */

$sum = 0;

for ($n = 123; $n > 0; $n /= 10) {
    $sum += $n % 10;
}
echo  $sum;

//$sum = 0;
//$number = 123;
//$arr = str_split($number);
//
//foreach ($arr as $item) {
//    $sum += $item;
//}
//echo $sum;