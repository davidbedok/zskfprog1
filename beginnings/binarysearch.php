<?php
	include("library/progtheorems.lib.php");
	$numbers = array ( 2, 3, 4, 5, 8, 10 );
	$index = binarySearch($numbers, 8);
	if ( $index != -1 ) {
		echo "index of element (".$numbers[$index].") in array: ".$index;
	} else {
		echo "array does not contain the searched element";
	}
?>
