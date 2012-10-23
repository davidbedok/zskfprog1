<?php
	// stack - last in first out (LIFO)
	
	$numbers = array();
	
	array_unshift($numbers, 10);
	array_unshift($numbers, 20);
	array_unshift($numbers, 30);
	
	print_r($numbers);
	print "<br/>";
	
	$firstElement = array_shift($numbers);
	
	print_r($numbers);
	print "<br/>";
	print "first element: ".$firstElement."<br/>";
	
	// queue - first in first out (FIFO)
	
	$queue = array();
	
	array_push($queue, 10);
	array_push($queue, 20);
	array_push($queue, 30);
	
	print_r($queue);
	print "<br/>";
	
	$firstElement = array_shift($queue);
	
	print_r($queue);
	print "<br/>";
	print "first element: ".$firstElement."<br/>";	
?>
