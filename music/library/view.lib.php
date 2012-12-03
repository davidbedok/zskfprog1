<?php

	function frameHtml( $musics, $musicname, $notes ) {
		$content = getFileContent("pages/frame.html");
		$content = str_replace("{musicoptions}",musicOptionsHtml($musics, $musicname),$content);
		$content = str_replace("{phpself}",$_SERVER['PHP_SELF'],$content);
		$content = str_replace("{notes}",$notes,$content);
		return $content;
	}
	
	function createNotesHtml ( $music ) {
		$content = getFileContent("pages/note_frame.html");
		$content = str_replace("{name}",$music['name'],$content);
		$notehtml = getFileContent("pages/note.html");
		$notehtml = str_replace("{scale}",$music['scale'],$notehtml);
		$notes = '';
		foreach ($music['notes'] as $note) {
			$noteitem = $notehtml;
			$noteitem = str_replace("{note}",$note,$noteitem);
			$notes .= $noteitem;
		}
		$content = str_replace("{notes}",$notes,$content);
		return $content;
	}
	
	function musicOptionsHtml( $musics, $musicname ) {
		$options = "";
		$content = getFileContent("pages/musicoption.html");
		foreach ($musics as $music) {
			$option = $content;
			$option = str_replace("{name}",$music['name'],$option);
			$selected = '';
			if ( $music['name'] == $musicname ) {
				$selected = 'selected="selected"';
			}
			$option = str_replace("{selected}",$selected,$option);
			$options .= $option;
		}
		return $options;
	}
	
?>
