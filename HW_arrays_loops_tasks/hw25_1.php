<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 09.06.2016
 * Time: 18:46
 */

$arr = array (rand(1, 100), rand(1, 100), rand(1,100), rand(1, 100), rand(1, 100));
print_r($arr);
echo "<br>";
$min = $max = $arr[0];
$indexMin = $indexMax = 0;
for ($i = 1; $i < count($arr); $i++) {
    if ($arr[$i] > $max) {
        $indexMax = $i;
        $max = $arr[$i];
    } elseif ($arr[$i] < $min) {
        $indexMin = $i;
        $min = $arr[$i];
    }
}
echo "Максимальное число $max находится в ячейке [$indexMax]<br>";
echo "Минимальное число $min находится в ячейке [$indexMin]<br>";

$tmp = $arr[$indexMax];
$arr[$indexMax] = $arr[$indexMin];
$arr[$indexMin] = $tmp;
print_r($arr);