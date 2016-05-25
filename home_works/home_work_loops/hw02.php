<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24.05.2016
 * Time: 12:33
 */

$elements = array (1, 20, 15, 17, 24, 35);
$result = 0;
foreach ($elements as $item) {
    $result += $item;
}
echo "Сумма элементов массива = " . $result;