<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 23.05.2016
 * Time: 11:02
 */

if(($age >= 0)&&($age < 18)){
    echo "Вам еще рано работать";
}
elseif(($age > 17)&&($age < 60)){
    echo "Вам еще работать и работать";
}
elseif($age > 59){
    echo "Вам пора на пенсию";
}
else{
    echo "Неизвестный возраст";
}