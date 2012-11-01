<?php
	print str_repeat("<>",10)."<br/>"; // <><><><><><><><><><>
	print str_shuffle("Hello World")."<br/>"; // e.g.: "dlo rWoHlle"
	print strrev("Hello")."<br/>"; // "olleH"

	print strtolower("Hello World")."<br/>"; // hello world
	print strtoupper("Hello World")."<br/>"; // HELLO WORLD
	print ucfirst("hello world")."<br/>"; // Hello world
	print ucwords("hello world")."<br/>"; // Hello World
?>
