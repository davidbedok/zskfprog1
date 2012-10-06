<?php
	include("library/progtheorems.lib.php");
	$dataA = array ( 3, 4, 5, 8, 12, 17, 23, 42 );
	$dataB = array ( 1, 2, 3, 8, 9 );
	print_r(runUpSortedSet($dataA, $dataB));	
?>
