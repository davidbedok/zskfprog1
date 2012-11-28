<?php

	function frameHtml( $pagecontent ) {
		$content = getFileContent("pages/frame.html");
		$content = str_replace("{pagecontent}",$pagecontent,$content);
		$content = str_replace("{phpself}",$_SERVER['PHP_SELF'],$content);
		return $content;
	}
	
	function membersHtml( $members ) {
		
	}
	
	// private
	function fillHtml( $content, $data ) {
		$datakeys = array_keys($data);
		foreach ( $datakeys as $key ) {
			$content = str_replace("{".$key."}",$data[$key],$content);
		}
		return $content;
	}
	
	function memberHtml( $member, $membernetwork ) {
		
	}
	
?>
