<?php
	include("library/progtheorems.lib.php");
	$data = array ( 2, 15, 7, 6, 9, 12, 11 );
	$divisibleData = assortmentDivisible($data, 3);
	print_r($divisibleData);
?>
