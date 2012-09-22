<?php
	include("library/complextheorems.lib.php");
	$numbers = array ( 7, 4, 2, 7, 2, 9, 8, 2 );
	print_r($numbers);
	$minimumIndexes = assortmentMinimumIndexes($numbers);
	print_r($minimumIndexes);
?>
