<?php
	function filterCoins( $coins, $countrycode ) {
		$result = array();
		foreach ( $coins as $coin ) {
			if ( $coin['countrycode'] == $countrycode ) {
				$result[] = $coin;	
			}
		}
		return $result;
	}
	
	function deleteCoin ( &$coins, $unid ) {
		$i = 0;
		while ( ( $i < count($coins) ) && ( $coins[$i]['unid'] != $unid ) ) {
			$i++;
		}
		if ( $i < count($coins) ) {
			unset($coins[$i]);	
		}
	}
	
	function maximumUnid ( $coins ) {
		$maximum = -1;
		if ( count($coins) > 0 ) {
			$maximum = $coins[0]['unid'];
			for ( $i = 1; $i < count($coins); $i++) {
				if ( $maximum < $coins[$i]['unid'] ) {
					$maximum = $coins[$i]['unid'];	
				}
			}
		}
		return $maximum;
	}
	
?>
