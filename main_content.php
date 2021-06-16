<?php
    //include_once './DZ/ls_13_06_2021/zadacha_1/sum_chisel.php'; 
    //echo $_SERVER["PATH_INFO"];
    $path = $_SERVER["PATH_INFO"];
    $path = substr($path,1);
    if($path=='sum')
    {
        include_once 'DZ/ls_13_06_2021/zadacha_1/sum_chisel.php'; 
    }
    else if ($path=='test')
    {
        include_once 'DZ/test/test/test.php'; 
    }
    else if ($path=='ladia')
    {
        include_once 'DZ/uslovnii_operator/ladia/ladia.php'; 
    }
    else if ($path=='slon')
    {
        include_once 'DZ/uslovnii_operator/slon/slon.php'; 
    }
    else
    {
        echo $path." page not found";
    }
?>