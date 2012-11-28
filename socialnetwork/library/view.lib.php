<?php

	function frameHtml( $pagecontent ) {
		$content = getFileContent("pages/frame.html");
		$content = str_replace("{pagecontent}",$pagecontent,$content);
		$content = str_replace("{phpself}",$_SERVER['PHP_SELF'],$content);
		return $content;
	}
	
	function membersHtml( $members ) {
		$content = getFileContent("pages/members.html");
		$subcontent = getFileContent("pages/member.html");
		$rows = "";
		foreach ($members as $member) {
			$rows .= fillHtml($subcontent,$member);
		}
		$content = str_replace("{members}",$rows,$content);
		return $content;
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
		$content = getFileContent("pages/singlemember.html");
		$content = fillHtml($content,$member);
		$content = str_replace("{connections}",membersHtml($membernetwork),$content);
		return $content;
	}
	
?>
