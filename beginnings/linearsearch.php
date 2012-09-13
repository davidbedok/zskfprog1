<?php
	include("library/progtheorems.lib.php");
	$data = array ( 10, 3, 8, 4, 5, 2 );
	$index = linearSearch($data, 8);
	if ( $index != -1 ) {
		echo "index of element (".$data[$index].") in array: ".$index;
	} else {
		echo "array does not contain the searched element";
	}
?>
