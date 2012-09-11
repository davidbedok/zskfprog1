<?php
	$data = array ( 30, 20, 40, 10 );
	
	$result = 0;
	for ($i = 0; $i < count($data); $i++) {
		$result += $data[$i];
	}
	print $result;
?>
