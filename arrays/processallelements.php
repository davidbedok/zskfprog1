<?php
	function square( $element ) {
		return $element * $element;
	} 
	
	function addon( &$element, $index, $custom ) {
		$element = $element + $custom;
	} 

	$numbers = array ( 1, 2, 3, 4, 5 );
	
	print_r($numbers);
	print "<br/>";
	$numbers = array_map(square, $numbers);
	print_r($numbers);
	print "<br/>";
	
	array_walk($numbers, addon, 2);
	print_r($numbers);
	print "<br/>";
?>
