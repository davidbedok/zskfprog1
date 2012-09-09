<?php
	include("library/progtheorems.lib.php");
	$data = array ( 2, 4, 6, 8 );
	$divider = 3;
	print_r($data);
	if (decisionDivisible($data, $divider)) {
		print "exists element which is divisible by ".$divider;	
	} else {
		print "does not exist element which is divisible by ".$divider;	
	}
?>
