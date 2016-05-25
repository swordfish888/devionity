<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 25.05.2016
 * Time: 12:09
 */

$colors = array ('red','yellow','blue','gray','maroon','brown','green');

$rows = 5;
$cols = 5;

echo "<table>";

for ($tr=1; $tr<=$rows; $tr++){
    echo "<tr>";
    for ($td=1; $td<=$cols; $td++){
        echo "<td style='background-color: " . $colors[array_rand($colors)] . ";'>". rand(1, 100000) ."</td>";
    }
    echo "</tr>";
}

echo "</table>";