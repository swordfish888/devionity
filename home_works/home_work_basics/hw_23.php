<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 23.05.2016
 * Time: 16:25
 */
$text = "Lorem ipsum dolor sit amet" . "<br>";
$text1 = ", consectetur adipiscing elit";
$number = 42;

echo $text;

print $text;

printf("Lorem ipsum %u dolor sit amet %s", $number, $text1);

