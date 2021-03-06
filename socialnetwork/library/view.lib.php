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
	
	function memberHtml( $member, $membernetwork, $phonetypes, $memberphones ) {
		$content = getFileContent("pages/singlemember.html");
		$content = fillHtml($content,$member);
		$content = str_replace("{connections}",membersHtml($membernetwork),$content);
		$content = str_replace("{phones}",phonesHtml($phonetypes,$memberphones),$content);
		return $content;
	}
	
	function phonesHtml( $phonetypes, $phones ) {
		if ( count($phones) > 0 ) {
			$content = getFileContent("pages/phones.html");
			$subcontent = getFileContent("pages/phone.html");
			$rows = "";
			foreach ($phones as $phone) {
				$row = fillHtml($subcontent,$phone);
				$row = str_replace("{phonetype}",phoneType($phonetypes,$phone['phonetype_unid']),$row);
				$rows .= $row;
			}
			$content = str_replace("{phones}",$rows,$content);
		} else {
			$content = getFileContent("pages/nophone.html");
		}
		return $content;
	}
	
?>
