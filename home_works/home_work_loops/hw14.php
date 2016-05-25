<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24.05.2016
 * Time: 16:13
 */

$elements = array(4, 2, 5, 19, 13, 0, 10);

foreach ($elements as $e) {
    if ($e == 2 || $e == 3 || $e == 4) {
        echo "Есть!";
        break;
    } else {
        echo "Нет!";
    }
}