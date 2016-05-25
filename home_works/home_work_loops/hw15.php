<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24.05.2016
 * Time: 16:37
 */

$arr = array(4, 2, 5, 19, 13, 0, 10);
$count = 0;
foreach ($arr as $item) {
    $count++;
}
echo "Количество количество элементов массива равно " . $count;