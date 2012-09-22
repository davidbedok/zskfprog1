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
		while ( ( $i < count($data) ) && ( $data[$i] % $divider != 0 ) ) {
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
				$divisibleData[$count++] = $i;	
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
			while (($j < count($dataA)) && ($dataB[$i] != $dataA[$j])) {
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
			while (($i < count($dataB)) && ($dataB[$i] != $dataA[$j])) {
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
	
	function simpleSwapSort ( &$data ) {
		for ( $i = 0; $i < count($data)-1; $i++ ) {
			for ( $j = $i+1; $j < count($data); $j++ ) {
				if ( $data[$i] > $data[$j] ) {
					swap($data, $i, $j);	
				}
			}
		}
	}
	
	function minimumSelectionSort( &$data ) {
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
	
	function linearSearch( $data, $element ) {
		$index = -1;
		$i = 0;
		while ( ( $i < count($data) ) && ( $data[$i] != $element ) ) {
			$i++;
		}
		if ( $i < count($data) ) {
			$index = $i;	
		}
		return $index;
	}
	
	function linearSearchInSortedArray( $data, $element ) {
		$index = -1;
		$i = 0;
		while ( ( $i < count($data) ) && ( $data[$i] < $element ) ) {
			$i++;
		}
		if ( ( $i < count($data) ) && ( $data[$i] == $element ) ) {
			$index = $i;	
		}
		return $index;
	}
	
	function binarySearch( $data, $element ) {
		$lower = 0;
		$upper = count($data) - 1;
		$index = -1;
		while( ( $index == -1 ) && ( $lower <= $upper ) ) {
			$i = round( ( $lower + $upper ) / 2 );
			if ( $data[$i] == $element ) {
				$index = $i;
			} else if ( $data[$i] < $element ) {
				$lower = $i+1;
			} else { 
				$upper = $i-1;
			}
		}
		return $index;
	}
	
?>
