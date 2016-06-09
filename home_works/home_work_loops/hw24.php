<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24.05.2016
 * Time: 22:56
 */





$counter = 0;
$number = 442158755745;
$searchNumber = 7;

$arr = str_split($number);

foreach ($arr as $item) {
    if ($item == $searchNumber) {
        $counter++;
    }
}
echo $counter;