<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24.05.2016
 * Time: 14:55
 */

$elements = array (2, 5, 9, 15, 0, 4);

foreach ($elements as $item) {
    if ($item > 3 && $item < 10) {
        echo $item . "<br>";
    }
}