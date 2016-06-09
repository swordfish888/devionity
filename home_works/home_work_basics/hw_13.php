<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 23.05.2016
 * Time: 12:18
 */

$s = 42;
$t = 3;

$v = $s / $t;
echo "Cкорость автомобиля на участке $s при скорости $t составляет $v км/час";

$metersInKilometr = $v * 1000;
$secondsInHour = 3600;
$mForSecond = $metersInKilometr / $secondsInHour;
echo "<br>";
echo "Cкорость автомобиля на участке $s при скорости $t составляет $mForSecond м/с";

