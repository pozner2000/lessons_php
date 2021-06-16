<?php

    include_once 'form.php';
    include_once 'DZ/ls_13_06_2021/zadacha_1/function.php';
    $a = $_GET['a'];
    $b = $_GET['b'];

    echo $a + $b; 
    echo '||';
    //print_r(summ);
    $s = summ($a, $b);//maximum_2($a, $b);
    echo $s;
    echo '||';
    echo "<br>";
    $included_files = get_included_files();

    foreach ($included_files as $filename) {
        echo "$filename<br>";
    }

?>

 