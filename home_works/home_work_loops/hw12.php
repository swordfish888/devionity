<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24.05.2016
 * Time: 15:38
 */

$num = 0;

for ($n = 1000; $n > 50; $n /= 2) {
    $num++;
    echo $num . "-я итерация => " . $n . "<br>";
}
echo "Число необходимых итераций равно " . $num;
