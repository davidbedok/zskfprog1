<?php

	function divisorsCount ( $number ) {
		if ($number == 1) {
			return 1;
		}
		if ($number == 2 || $number == 3) {
			return 2;
		}
		if ($number == 4) {
			return 3;
		}
		$count = 2;
		$sqrtNumber = sqrt($number);
		$sqrtNumberInt = intval($sqrtNumber);
		if ($sqrtNumberInt * $sqrtNumberInt == $number) {
			$count++;
		}
		if ($number % 2 == 0) {
			$count += 2;
			for ($i = 3; $i < $sqrtNumber; $i++) {
				if ($number % $i == 0) {
					$count += 2;
				}
			}
		} else {
			for ($i = 3; $i < $sqrtNumber; $i += 2) {
				if ($number % $i == 0) {
					$count += 2;
				}
			}
		}
		return $count;
	}

	function testDivisorsCount( $number ) {
		print $number." divisors count: ".divisorsCount($number)."<br/>";
	}	
	
	for ( $i = 1; $i < 100; $i++ ) {
		testDivisorsCount($i);
	}
	
?>
