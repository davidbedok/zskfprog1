<?php
	function summation( $data ) {
		$result = 0;
		for ($i = 0; $i < count($data); $i++) {
			$result += $data[$i];
		}
		return $result;
	}
	
	$numbers = array ( 30, 20, 40, 10 );
	$sum = summation($numbers);
	print $sum;
?>
