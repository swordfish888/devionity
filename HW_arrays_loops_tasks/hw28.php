<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 25.05.2016
 * Time: 14:06
 */
$rows = 10;
$cols = 10;

echo "<table border='1'>";

for ($tr = 1; $tr <= $rows; $tr++) {
    echo "<tr>";
    for ($td = 1; $td <= $cols; $td++) {
        if ($tr == 1 || $td == 1) {
            echo "<th style='background-color: green;'>" . $td*$tr  . "</th>";
        } else {
            echo "<td>" . $td*$tr  . "</td>";
        }
    }
    echo "</tr>";
}

echo "</table>";