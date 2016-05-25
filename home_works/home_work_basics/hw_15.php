<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 23.05.2016
 * Time: 13:02
 */
$a = 10;
$b = 5;
//$operator = '+';
//$operator = '-';
//$operator = '*';
$operator = '/';
//$operator = '%';
$error = "На ноль делить нельзя!";

echo $a . $operator . $b . "=";

switch ($operator) {
    case ('+');
        echo $result = $a + $b;
        break;
    case ('-'):
        echo $result = $a - $b;
        break;
    case ('*'):
        echo $result = $a * $b;
        break;
    case ('/'):
        if ($b == 0) {
            echo $error;
        } else {
            echo $result = $a / $b;
        }
        break;
    case ('%'):
        if ($b == 0) {
            echo $error;
        } else {
            echo $result = $a % $b;
        }
        break;
    default :
        echo "Повторите действие!";
}
