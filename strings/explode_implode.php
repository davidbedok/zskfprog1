<?php
	$input = "Hello PHP World!";
	$resultOfExplode = explode(" ",$input);
	print_r($resultOfExplode); 
	// Array ( [0] => Hello [1] => PHP [2] => World! ) 
	
	print "<br/>";
	
	$resultOfImplode = implode(",",$resultOfExplode);
	print $resultOfImplode;
	// Hello,PHP,World!
?>
