<style>
    table {
        width: 300px;
        border: 1px solid black;
        border-collapse: collapse;
    }
    tr, td {
        padding: 3px;;
        border: 1px solid black;
        text-align: center;
    }
</style>
<table>
    <thead>
    <tr><td>Цвета на английском</td> <td>Цвета на русском</td></tr>
    </thead>
    <?php
    /**
     * Created by PhpStorm.
     * User: Alex
     * Date: 09.06.2016
     * Time: 13:12
     */
    $table = '';
    const BEGIN = '<tr><td>';
    const LINE = '</td><td>';
    const END = '</td></tr>';

    $table .= BEGIN;
    $arr = array('green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой');
    foreach ($arr as $enCol => $ruCol) {
        echo LINE . $enCol . LINE . $ruCol . END . '<br />';
    }
    ?>
</table>
    