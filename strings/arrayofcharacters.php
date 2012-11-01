<?php
	$input = "Hello";
	print $input."<br/>";
	print $input[0]; // H
	print $input[1]; // e
	print "<br/>";
	print strlen($input); // 5  Never count($input) !!
	print "<br/>";
	$input = $input." World!"; // $input .= " World!";
	print $input."<br/>";
?>
