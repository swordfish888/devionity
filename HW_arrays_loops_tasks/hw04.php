<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24.05.2016
 * Time: 13:40
 */

$arr = array(
    'green' => 'зеленый',
    'red'   => 'красный',
    'blue'  => 'голубой');

echo "Названия цветов на английском языке:<br>";
foreach ($arr as $enCol => $ruCol) {
    echo $enCol . "<br>";
}
echo "Названия цветов на русском языке:<br>";
foreach ($arr as $enCol => $ruCol) {
    echo $ruCol . "<br>";
}



