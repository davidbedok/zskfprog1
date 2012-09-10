<?php
	include("library/progtheorems.lib.php");
	$data = array ( 2, 4, 6, 8, 10, 12 );
	$divider = 3;
	print "Number of elements which are divisible by ".$divider.": ".countingDivisible($data, $divider);
?>
