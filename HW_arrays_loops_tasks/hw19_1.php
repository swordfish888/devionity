<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 09.06.2016
 * Time: 16:36
 */

$day = date('l');

$week = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
foreach($week as $days) {
    if ($days == $day) {
        echo "<i> $days </i>";
    } else {
        echo $days . " ";
    }
}
