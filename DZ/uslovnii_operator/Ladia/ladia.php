<?php
include_once 'form.php';
include_once './DZ/uslovnii_operator/ladia/function.php';

	$a = $_GET['a'];
	$b = $_GET['b'];
	$n = $_GET['n'];
	$k = $_GET['k'];

echo ladia($a, $b, $n, $k) . '<br>';