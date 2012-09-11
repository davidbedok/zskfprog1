<?php
	include("library/progtheorems.lib.php");
	$data = array ( 6, 1, 5, 2, 4, 9, 7, 3, 8 );
	separateParity($data, $evenNumbers, $oddNumbers);
	print "even numbers: ";
	print_r($evenNumbers);
	print "odd numbers: ";
	print_r($oddNumbers);	
?>
