<?php
	print strpos("Hello World World","or")."<br/>"; // 7
	print strpos("Hello World World","or",10)."<br/>"; // 13
	print strrpos("Hello World World","or")."<br/>"; // 13
	print (strpos("Hello World World","and") === false ? "not find" : "find")."<br/>"; // not find
?>
