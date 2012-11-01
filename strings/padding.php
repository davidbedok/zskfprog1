<?php
	print str_pad("hello",10,"-",STR_PAD_LEFT)."<br/>"; // "-----hello"
	print str_pad("hello",10,"-",STR_PAD_RIGHT)."<br/>"; // "hello-----"
	print str_pad("hello",10,"-",STR_PAD_BOTH)."<br/>"; // "--hello---"
?>
