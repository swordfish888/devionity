<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 23.05.2016
 * Time: 11:02
 */

if (!is_numeric($age) || $age < 0) {
    echo "Неизвестный возраст";
} elseif ($age >= 0 && $age <= 17) {
    echo "Вам еще рано работать";
} elseif ($age >= 18 && $age <= 59) {
    echo "Вам еще работать и работать";
} elseif ($age > 59) {
    echo "Вам пора на пенсию";
}