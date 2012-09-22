<?php
	include("library/progtheorems.lib.php");
	$numbers = array ( 2, 15, 7, 6, 9, 12, 11 );
	$divisibleData = assortmentDivisible($numbers, 3);
	print_r($divisibleData);
	for ($i = 0; $i < count($divisibleData); $i++) {
		print($numbers[$divisibleData[$i]]." ");	
	}
?>
