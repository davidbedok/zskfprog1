<?php
	function loadTabs ( $filename ){
		$musics = array();
		$content = file($filename,FILE_IGNORE_NEW_LINES);
		foreach ($content as $line) {
			$musicdata = explode(";",$line);
			$music = array();
			$music['name'] = trim($musicdata[0]);
			$music['scale'] = trim($musicdata[1]);
			$notes = array();
			for ( $i = 2; $i < count($musicdata); $i++ ) {
				$notes[] = $musicdata[$i];	
			}
			$music['notes'] = $notes;
			$musics[] = $music;
		}
		return $musics;
	}
?>
