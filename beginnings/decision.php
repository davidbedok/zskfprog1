<?php
	include("library/progtheorems.lib.php");
	$data = array ( 6, 4, 2, 8 );
	$divider = 3;
	print_r($data);
	if (decisionDivisible($data, $divider)) {
		print "exists element which is divisible by ".$divider;	
	} else {
		print "does not exist element which is divisible by ".$divider;	
	}
?>
