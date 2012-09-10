<?php
	include("library/progtheorems.lib.php");
	$data = array ( 1, 2, 3, 4, 5, 6, 7, 8, 9 );
	separateParity($data, $evenNumbers, $oddNumbers);
	print "even numbers: ";
	print_r($evenNumbers);
	print "odd numbers: ";
	print_r($oddNumbers);	
?>
