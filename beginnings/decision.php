<?php
	include("library/progtheorems.lib.php");
	$numbers = array ( 6, 4, 2, 8 );
	$divider = 3;
	print_r($numbers);
	if (decisionDivisible($numbers, $divider)) {
		print "exists element which is divisible by ".$divider;	
	} else {
		print "does not exist element which is divisible by ".$divider;	
	}
?>
