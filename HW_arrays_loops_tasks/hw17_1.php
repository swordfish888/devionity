<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 09.06.2016
 * Time: 16:22
 */
$month = date('F');

$yearMonths = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
foreach ($yearMonths as $months) {
    if ($months == $month) {
        echo '<b>' . $months . '</b> ';
    } else {
        echo $months . ' ';
    }
}