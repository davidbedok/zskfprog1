<?php
	$data = array ( 'key1' => "value1", 'key2' => "value2" );
	
	print_r($data);
	print "<br/>";
	print "KEYS: ";
	print_r(array_keys($data));
	print "<br/>";
	print "VALUES: ";
	print_r(array_values($data));
	print "<br/>";
	
	if ( array_key_exists('key2', $data) ) {
		print "Find key2!<br/>";
	} else {
		print "Not find key2!<br/>";
	}
	
	if ( array_key_exists('key3', $data) ) {
		print "Find key3!<br/>";
	} else {
		print "Not find key3!<br/>";
	}
	
	if ( in_array("value2", $data) ) {
		print "Find value2!<br/>";
	} else {
		print "Not find value2!<br/>";	
	}
	
	if ( in_array("value3", $data) ) {
		print "Find value3!<br/>";
	} else {
		print "Not find value3!<br/>";	
	}
	
	$keyA = array_search("value2", $data);
	// $keyA is mixed value! BOOLEAN false if not find, otherwise INT index
	if ($keyA === false) {
		print "Not find value2!<br/>";	
	} else {
		print "Find value2 (index: ".$keyA.")!<br/>";
	}
	
	$keyB = array_search("value3", $data);
	if ($keyB === false) {
		print "Not find value3!<br/>";	
	} else {
		print "Find value3 (index: ".$keyB.")!<br/>";
	}
	
?>
