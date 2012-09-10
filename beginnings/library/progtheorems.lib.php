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
	
	function countingDivisible( $data, $divider ) {
		$count = 0;
		for ($i = 0; $i < count($data); $i++) {
			if ( $data[$i] % $divider == 0 ) {
				$count++;	
			}
		}
		return $count;
	}
	
	function maximumSelection( $data ) {
		$maximum = -1;
		if ( count($data) > 0 ) {
			$maximum = $data[0];
			for ($i = 1; $i < count($data); $i++) {
				if ( $maximum < $data[$i] ) {
					$maximum = $data[$i];	
				}
			}
		}
		return $maximum;
	}
	
	function assortmentDivisible( $data, $divider ) {
		$divisibleData = array();
		$count = 0;
		for ($i = 0; $i < count($data); $i++) {
			if ( $data[$i] % $divider == 0 ) {
				$divisibleData[$count++] = $data[$i];	
			}
		}
		return $divisibleData;
	}
	
	function separateParity( $data, &$evenNumbers, &$oddNumbers ){
		$evenNumbers = array();
		$enIndex = 0;
		$oddNumbers = array();
		$onIndex = 0;
		for ($i = 0; $i < count($data); $i++) {
			if ( $data[$i] % 2 == 0 ) {
				$evenNumbers[$enIndex++] = $data[$i];
			} else {
				$oddNumbers[$onIndex++] = $data[$i];
			}
		}
	}
	
?>
