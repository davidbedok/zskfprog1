<?php
	$numbers = range(1, 10);
	shuffle($numbers);
	
	print_r($numbers);
	print "<br/>";
	
	sort($numbers);
	
	print_r($numbers);
	print "<br/>";
	
	rsort($numbers);
	
	print_r($numbers);
	print "<br/>";
?>
