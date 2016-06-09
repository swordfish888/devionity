<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24.05.2016
 * Time: 13:57
 */

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach ($arr as $enCol => $ruCol) {
    $en[] = $enCol;
    $ru[] = $ruCol;
}
print_r($en);
echo "<br>";
print_r($ru);