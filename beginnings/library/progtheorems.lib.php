<?php
	function summation( $data ) {
		$result = 0;
		for ($i = 0; $i < count($data); $i++) {
			$result += $data[$i];
		}
		return $result;
	}
	
	function decisionDivisible( $data, $divider ) {
		$i = 0;
		while ( ( $data[$i] % $divider != 0 ) && ( $i < count($data) ) ) {
			$i++;
		}
		return ( $i < count($data) );
	}
	
	function selectionDivisible( $data, $divider ) {
		$i = 0;
		while ( $data[$i] % $divider != 0 ) {
			$i++;
		}
		return $i;
	}
	
?>
