<?php
	include("library/progtheorems.lib.php");
	$data = array ( 2, 4, 6, 8 );
	$divider = 3;
	$index = selectionDivisible($data, $divider);
	print "the ".$index." (st/nd/rd/th) element is divisible by ".$divider;
	print " - element: ".$data[$index];
?>
