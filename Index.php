<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php


	$a = $_GET['a'];
	$b = $_GET['b'];
	$n = $_GET['n'];
	$k = $_GET['k'];

	// Ладья
	if($a >= 1 && $a <=8 && $b >= 1 && $b <=8 && $n >= 1 && $n <=8 && $k >= 1 && $k <=8)
	{
		if($a == $n || $a == $k || $b == $n || $b == $k)
		{
			echo 'yes' . '<br>';
		}
		else
		{
			echo 'no' . '<br>';
		}
	}
	else
	{
		echo 'Введите число от 1 до 8';
	}

	// Слон

	if($a >= 1 && $a <=8 && $b >= 1 && $b <=8 && $n >= 1 && $n <=8 && $k >= 1 && $k <=8)
	{
		if (abs($n - $a) == abs($k - $b))
		{
			echo 'yes' . '<br>';
		}
		else
		{
			echo 'no' . '<br>';
		}
	}	
	else
	{
		echo 'Введите число от 1 до 8';
	}









	include_once 'header.php';
	include_once 'main_content.php';
	include_once 'footer.php';
	?>
</body>

</html>