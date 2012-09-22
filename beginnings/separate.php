<?php
	include("library/progtheorems.lib.php");
	$numbers = array ( 6, 1, 5, 2, 4, 9, 7, 3, 8 );
	separateParity($numbers, $evenNumbers, $oddNumbers);
	print "even numbers: ";
	print_r($evenNumbers);
	print "odd numbers: ";
	print_r($oddNumbers);	
?>
