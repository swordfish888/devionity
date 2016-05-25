<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24.05.2016
 * Time: 18:21
 */

$days = array('Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье');

$weekEnd1 = 'Суббота';
$weekEnd2 = 'Воскресенье';

foreach ($days as $item) {
    if ($item == $weekEnd1) {
        echo "<b>$weekEnd1 </b>";
    } elseif ($item == $weekEnd2) {
        echo "<b>$weekEnd2 </b>";
    } else {
        echo $item . " ";
    }
}