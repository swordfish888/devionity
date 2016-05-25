<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 25.05.2016
 * Time: 11:42
 */

$arr = array (rand(1,100), rand(1,100), rand(1,100), rand(1,100), rand(1,100));
print_r($arr);
echo "<br>";
$product = 1;

for ($i = 0; $i < count($arr); $i++) {
    if ($i % 2 != 0) {
        $neparnyiArr[$i] = $arr[$i];
    } else {
        $product *= $arr[$i];
    }
}

echo "Произведение элементов, которые больше ноля и у которых парные индексы равно " . $product . "<br>";
print_r($neparnyiArr);