<?php

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
	
	// $divider is not a parameter.. solution: use() in PHP 5.3, or create class..
	function dividerCallback( $element ) {
		return ($element % 3 == 0);
	}
	
	function assortmentDivisibleNew( $data ) {
		return array_filter($data, dividerCallback );
	}
	
	function intersect( $dataA, $dataB ) {
		$intersect = array();
		$index = 0;
		for ($j = 0; $j < count($dataA); $j++ ) {
			$i = 0;
			while (($i < count($dataB)) && ($dataB[$i] != $dataA[$j])) {
				$i++;
			}
			if ( $i < count($dataB)) {
				$intersect[$index++] = $dataA[$j];		
			}
		}
		return $intersect;
	}

?>
