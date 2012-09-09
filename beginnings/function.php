<?php
	function summation( $data ) {
		$result = 0;
		for ($i = 0; $i < count($data); $i++) {
			$result += $data[$i];
		}
		return $result;
	}
	
	$data = array ( 10, 20, 30, 40 );
	$sum = summation($data);
	print $sum;
?>
