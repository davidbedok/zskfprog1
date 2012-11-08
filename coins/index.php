<?php
	include("library/coins.lib.php");
	include("library/data.lib.php");
	
	$issuers = loadIssuers("data/issuers.dat");
	
	print issuersSelect($issuers);
?>