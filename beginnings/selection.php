<?php
	include("library/progtheorems.lib.php");
	$numbers = array ( 2, 6, 4, 8 );
	$divider = 3;
	$index = selectionDivisible($numbers, $divider);
	print "the ".$index." (st/nd/rd/th) element is divisible by ".$divider;
	print " - element: ".$numbers[$index];
?>
