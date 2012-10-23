<?php
	include("library/useful.lib.php");
	$numbersA = array ( 2, 5, 3, 12 );
	$numbersB = array ( 8, 1, 2, 9, 3 );
	print_r(intersect($numbersA, $numbersB));
	
	// IMPORTANT: key preservation! (indexes: from first param array)
	print_r(array_intersect($numbersA, $numbersB));
?>
