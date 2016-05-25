<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24.05.2016
 * Time: 16:55
 */

$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$counter = 0;
foreach ($arr as $item) {
    if ($counter <  2) {
        echo $item . ", ";
        $counter++;
    } else {
        echo $item . "<br>";
        $counter = 0;
    }
}
