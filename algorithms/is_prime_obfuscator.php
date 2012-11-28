<?php

	function xxx ( $param ) {
		if ( $param == 1 ) {
			return false;
		} else if ( $param < 4 ) {
			return true;
		} else if ( $param % 2 == 0 ) {
			return false;
		} else if ( $param < 9 ) {
			return true;
		} else if ( $param % 3 == 0 ) {
			return false;
		}
		$i = 2;
		$sqrtparam = sqrt($param);
		while (($param % $i != 0) && ($i <= $sqrtparam)) {
			$i++;
		}
		return ($i > $sqrtparam);
	}
	
	function testIsPrime( $number ) {
		if ( xxx($number) ) {
			print "<b>".$number." is prime</b><br/>";
		} else {
			print $number." is not prime<br/>";	
		}
	}	
	
	for ( $i = 2; $i < 100; $i++ ) {
		testIsPrime($i);	
	}

?>
