<?php
	function loadMembers ( $filename ){
		$coins = array();
		$content = file($filename,FILE_IGNORE_NEW_LINES);
		foreach ($content as $line) {
			$coindata = explode(";",$line);
			if ( count($coindata) == 4 ) {
				$coins[] = createMember(trim($coindata[0]), trim($coindata[1]), trim($coindata[2]), trim($coindata[3]));	
			}
		}
		return $coins;
	}
	
	function createMember( $unid, $name, $movie, $image ) {
		$member = array();
		$member['unid'] = $unid;
		$member['name'] = $name;
		$member['movie'] = $movie;
		$member['image'] = $image;
		return $member;
	}
	
	function loadNetwork ( $filename ){
		$coins = array();
		$content = file($filename,FILE_IGNORE_NEW_LINES);
		foreach ($content as $line) {
			$coindata = explode(";",$line);
			if ( count($coindata) == 2 ) {
				$coins[] = createConnection(trim($coindata[0]), trim($coindata[1]));	
			}
		}
		return $coins;
	}
	
	function createConnection( $memberUnidLeft, $memberUnidRight ) {
		$connection = array();
		$connection['left'] = $memberUnidLeft;
		$connection['right'] = $memberUnidRight;
		return $connection;
	}
	
?>
