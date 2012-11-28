<?php

	function xxx ( $param ) {
		if ($param == 1) {
			return 1;
		}
		if ($param == 2 || $param == 3) {
			return 2;
		}
		if ($param == 4) {
			return 3;
		}
		$result = 2;
		$sqrtNumber = sqrt($param);
		$sqrtNumberInt = intval($sqrtNumber);
		if ($sqrtNumberInt * $sqrtNumberInt == $param) {
			$result++;
		}
		if ($param % 2 == 0) {
			$result += 2;
			for ($i = 3; $i < $sqrtNumber; $i++) {
				if ($param % $i == 0) {
					$result += 2;
				}
			}
		} else {
			for ($i = 3; $i < $sqrtNumber; $i += 2) {
				if ($param % $i == 0) {
					$result += 2;
				}
			}
		}
		return $result;
	}

	function testDivisorsCount( $param ) {
		print $param." divisors count: ".xxx($param)."<br/>";
	}	
	
	for ( $i = 1; $i < 100; $i++ ) {
		testDivisorsCount($i);
	}
	
?>
