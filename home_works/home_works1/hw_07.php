<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 23.05.2016
 * Time: 10:37
 */

if ($age >= 0 && $age <= 17) {
    echo "Вам еще рано работать";
} elseif ($age >= 18 && $age <= 59) {
    echo "Вам еще работать и работать";
} elseif ($age > 59) {
    echo "Вам пора на пенсию";
}
