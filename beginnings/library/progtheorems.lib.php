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
	
	function union( $dataA, $dataB ) {
		$union = $dataA;
		$index = count($dataA);
		for ($i = 0; $i < count($dataB); $i++ ) {
			$j = 0;
			while (($dataB[$i] != $dataA[$j]) && ($j < count($dataA))) {
				$j++;
			}
			if ( $j == count($dataA)) {
				$union[$index++] = $dataB[$i];		
			}
		}
		return $union;
	}
	
	function intersect( $dataA, $dataB ) {
		$intersect = array();
		$index = 0;
		for ($j = 0; $j < count($dataA); $j++ ) {
			$i = 0;
			while (($dataB[$i] != $dataA[$j]) && ($i < count($dataB))) {
				$i++;
			}
			if ( $i < count($dataB)) {
				$intersect[$index++] = $dataA[$j];		
			}
		}
		return $intersect;
	}
	
	function runUpSortedSet( $dataA, $dataB ) {
		$merge = array();
		$index = 0;
		$i = 0;
		$j = 0;
		while ( ($i < count($dataB)) && ($j < count($dataA)) ) {
			if ( $dataA[$j] < $dataB[$i]) {
				$merge[$index++] = $dataA[$j];
				$j++;
			} else if ( $dataA[$j] > $dataB[$i]) {
				$merge[$index++] = $dataB[$i];
				$i++;
			} else {
				$merge[$index++] = $dataA[$j];
				$j++;
				$i++;
			}
		}
		while ($i < count($dataB)) {
			$merge[$index++] = $dataB[$i];
			$i++;	
		}
		while ($j < count($dataA)) {
			$merge[$index++] = $dataA[$j];
			$j++;	
		}
		return $merge;
	}
	
	function swap( &$data, $indexA, $indexB ) {
		$tmp = $data[$indexA];
		$data[$indexA] = $data[$indexB];
		$data[$indexB] = $tmp;
	}
	
	function simpleSwapOrdering ( &$data ) {
		for ( $i = 0; $i < count($data)-1; $i++ ) {
			for ( $j = $i+1; $j < count($data); $j++ ) {
				if ( $data[$i] > $data[$j] ) {
					swap($data, $i, $j);	
				}
			}
		}
	}
	
	function minimumSelectionOrdering( &$data ) {
		for ( $i = 0; $i < count($data)-1; $i++ ) {
			$minPos = $i;
			for ( $j = $i; $j < count($data); $j++ ) {
				if ( $data[$j] < $data[$minPos] ) {
					$minPos = $j;
				}
			}
			swap($data, $i, $minPos);
		}
	}
	
?>
