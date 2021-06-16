<?php


function slon($a, $b, $n, $k)
{
	if($a >= 1 && $a <=8 && $b >= 1 && $b <=8 && $n >= 1 && $n <=8 && $k >= 1 && $k <=8)
	{
		if (abs($n - $a) == abs($k - $b))
		{
			return 'yes' . '<br>';
		}
		else
		{
			return 'no' . '<br>';
		}
	}	
	else
	{
		return 'Введите число от 1 до 8';
	}
}    
    ?>