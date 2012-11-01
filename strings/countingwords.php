<?php
	print str_word_count("Hello World",0)."<br/>"; // 2
	print_r(str_word_count("  Hello World  ",1)); // Array ( [0] => Hello [1] => World )
	print "<br/>";
	print_r(str_word_count("Hello World",2)); // Array ( [0] => Hello [6] => World ) 
?>
