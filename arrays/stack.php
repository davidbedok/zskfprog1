<?php
	// stack - last in first out (LIFO)
	
	$numbers = array();
	
	array_push($numbers, 10);
	array_push($numbers, 20);
	array_push($numbers, 30);
	
	print_r($numbers);
	print "<br/>";
	
	$lastElement = array_pop($numbers);

	print_r($numbers);
	print "<br/>";
	print "last element: ".$lastElement."<br/>";	
?>
