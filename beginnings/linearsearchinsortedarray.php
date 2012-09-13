<?php
	include("library/progtheorems.lib.php");
	$data = array ( 2, 3, 4, 5, 8, 10 );
	$index = linearSearchInSortedArray($data, 8);
	if ( $index != -1 ) {
		echo "index of element (".$data[$index].") in array: ".$index;
	} else {
		echo "array does not contain the searched element";
	}
?>
