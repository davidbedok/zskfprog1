<?php
	$data = array ( 10, 20, 30, 40 );
	
	$result = 0;
	for ($i = 0; $i < count($data); $i++) {
		$result += $data[$i];
	}
	print $result;
?>
