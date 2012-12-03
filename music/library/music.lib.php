<?php

	function findMusic ( $musics, $name ) {
		$music = null;
		$i = 0;
		while ( ( $i < count($musics) ) && ( $musics[$i]['name'] != $name ) ) {
			$i++;
		}
		if ( $i < count($musics) ) {
			$music = $musics[$i];
		}
		return $music;
	}
	
?>
