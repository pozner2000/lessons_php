<?php

function calc_gipotrnuz($a, $b)
{
    if($a < 1000 && $b < 1000)

    { $c = sqrt(pow($a, 2) + pow($b, 2));
    return $c;
    }
    return 'а или б не соответствует допустимым значениям';
}

function sum($a, $b)
{
    return $a + $b;
}

function poloj($arr)
{
    $total = 0;
    for($i = 0; $i < count($arr); $i++)
    {
        if($arr[$i] > 0)
        {
            $total++;
            
        }
    }
    return $total;
}
function boolwe($a)
{
    if($a < 10000)
    {
        foreach (range(1, $a) as $number)
        {
            $b = 0;
            for($i = 0; $i < $number; $i++)
            {
                $b = $i;
            }
        }
        return $b;
    }
    else
    {
        echo 'Введите число меньше 1000';
    }
}

function maximum($a)
{
    if($a > 1 && $a < 35)
    {
        $maximum = 0;
        foreach(range(1, $a) as $item)
        {
            $maximum = max(array($item));
        }
        return $maximum;
    }
    else
    {
        echo 'Введите число больше 1 и меньше 35';
    }
}

?>