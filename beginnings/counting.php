<?php
	include("library/progtheorems.lib.php");
	$data = array ( 4, 1, 6, 12, 7, 5 );
	$divider = 3;
	print "Number of elements which are divisible by ".$divider.": ".countingDivisible($data, $divider);
?>
