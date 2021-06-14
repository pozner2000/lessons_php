<?php
    include_once 'function.php';
    $a = $_GET['a'];
    echo boolwe($a) . '-' . 'количество элементов массива, больших предыдущего' . '<br>';

    echo maximum($a) . '-' . 'максимальное число в массиве' . '<br>'


?>