<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24.05.2016
 * Time: 13:50
 */

$arr = array('Коля' => '200', 'Вася'  => '300', 'Петя'  => '400');

foreach ($arr as $name => $zp) {
    echo $name . " - зарплата " . $zp . " долларов." . "<br>";
}