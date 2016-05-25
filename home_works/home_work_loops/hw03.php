<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24.05.2016
 * Time: 13:29
 */

$elements = array (26, 17, 136, 12, 79, 15);
$result = 0;
foreach ($elements as $item) {
    $result += $item*$item;
}
echo "Сумма элементов массива = " . $result;