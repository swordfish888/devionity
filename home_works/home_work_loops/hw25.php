<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 25.05.2016
 * Time: 9:44
 */

$arr = array (rand(1, 100), rand(1, 100), rand(1,100), rand(1, 100), rand(1, 100));

print_r($arr);
echo "<br>";

$max = max($arr);
$min = min($arr);

$positionMin = array_search(min($arr), $arr);
$positionMax = array_search(max($arr), $arr);

echo "Минимальное число " .$min. " находится в ячейке [" . $positionMin . "]<br>";
echo "Максимальное число " .$max. " находится в ячейке [" . $positionMax . "]<br>";

//$arr[$key_min] = $max;
//$arr[$key_max] = $min;

$tmp = $arr[$positionMin];
$arr[$positionMin] = $arr[$positionMax];
$arr[$positionMax] = $tmp;


print_r($arr);

