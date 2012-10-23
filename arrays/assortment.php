<?php
	include("library/useful.lib.php");
	$numbers = array ( 2, 15, 7, 6, 9, 12, 11 );
	$divisibleDataOld = assortmentDivisible($numbers, 3);
	print_r($divisibleDataOld);
	
	$divisibleDataNew = assortmentDivisibleNew($numbers);
	print_r($divisibleDataNew);
?>
