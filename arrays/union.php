<?php
	include("library/useful.lib.php");
	$numbersA = array ( 2, 5, 3, 12 );
	$numbersB = array ( 8, 1, 2, 9, 3 );
	print_r(union($numbersA, $numbersB));
	
	print_r(array_merge($numbersA, array_diff($numbersB, $numbersA)));
?>
