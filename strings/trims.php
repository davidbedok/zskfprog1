<?php
	$input = "   Hello World   ";
	print "#".$input."#<br/>";
	print "#".ltrim($input)."#<br/>"; // "Hello World   "
	print "#".rtrim($input)."#<br/>"; // "   Hello World"
	print "#".trim($input)."#<br/>"; // "Hello World"
?>
