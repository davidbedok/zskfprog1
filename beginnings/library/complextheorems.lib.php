<?php
	function minimumSelection( $data ) {
		$minimum = -1;
		if ( count($data) > 0 ) {
			$minimum = $data[0];
			for ($i = 1; $i < count($data); $i++) {
				if ( $minimum > $data[$i] ) {
					$minimum = $data[$i];	
				}
			}
		}
		return $minimum;
	}
	
	function assortmentMinimumIndexes( $data ) {
		$minimumIndexes = array();
		$minimum = minimumSelection($data);
		if ( $minimum != -1 ) {
			$count = 0;
			for ($i = 0; $i < count($data); $i++) {
				if ( $data[$i] == $minimum ) {
					$minimumIndexes[$count++] = $i;	
				}
			}
		}
		return $minimumIndexes;
	} 
?>
