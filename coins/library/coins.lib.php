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
?>
