<?php
include_once 'form.php';
include_once './DZ/uslovnii_operator/slon/function.php';

	$a = $_GET['a'];
	$b = $_GET['b'];
	$n = $_GET['n'];
	$k = $_GET['k'];

echo slon($a, $b, $n, $k) . '<br>';