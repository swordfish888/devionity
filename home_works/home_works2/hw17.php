<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24.05.2016
 * Time: 17:29
 */

$months = array('Январь',
                'Февраль',
                'Март',
                'Апрель',
                'Май',
                'Июнь',
                'Июль',
                'Август',
                'Сентябрь',
                'Октябрь',
                'Ноябрь',
                'Декабрь');

$currentMonth = 'Май';

foreach ($months as $item) {
    if ($item == $currentMonth) {
        echo "<b>$currentMonth </b>";
    } else {
        echo $item . " ";
    }
}