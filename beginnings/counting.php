<?php
	include("library/progtheorems.lib.php");
	$numbers = array ( 4, 1, 6, 12, 7, 5 );
	$divider = 3;
	$divElements = countingDivisible($numbers, $divider);
	print "Number of elements which are divisible by ".$divider.": ".$divElements;
?>
