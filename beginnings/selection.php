<?php
	include("library/progtheorems.lib.php");
	$data = array ( 2, 4, 6, 8 );
	$divider = 3;
	print "the ".selectionDivisible($data, $divider)." (st/nd/rd/th) element is divisible by ".$divider;
?>
