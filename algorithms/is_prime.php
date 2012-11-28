<?php

	function isPrime ( $number ) {
		if ( $number == 1 ) {
			return false;
		} else if ( $number < 4 ) {
			return true;
		} else if ( $number % 2 == 0 ) {
			return false;
		} else if ( $number < 9 ) {
			return true;
		} else if ( $number % 3 == 0 ) {
			return false;
		}
		$i = 2;
		$sqrtNumber = sqrt($number);
		while (($number % $i != 0) && ($i <= $sqrtNumber)) {
			$i++;
		}
		return ($i > $sqrtNumber);
	}
	
	function testIsPrime( $number ) {
		if ( isPrime($number) ) {
			print "<b>".$number." is prime</b><br/>";
		} else {
			print $number." is not prime<br/>";	
		}
	}	
	
	for ( $i = 2; $i < 100; $i++ ) {
		testIsPrime($i);	
	}

?>
