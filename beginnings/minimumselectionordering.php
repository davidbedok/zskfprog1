<?php
	include("library/progtheorems.lib.php");
	$data = array ( 10, 3, 8, 4, 5, 2 );
	minimumSelectionOrdering($data, 1, 3);
	print_r($data);
?>