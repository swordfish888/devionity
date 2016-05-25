<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24.05.2016
 * Time: 20:08
 */

$days = array('Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье');

$currentDay = 'Вторник';


foreach ($days as $item) {
    if ($item == $currentDay) {
        echo "<i>$currentDay </i>";
    }  else {
        echo $item . " ";
    }
}