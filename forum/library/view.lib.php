<?php

	function frameHtml($actioncontent) {
		$content = getFileContent("pages/frame.html");
		$content = str_replace("{actioncontent}",$actioncontent,$content);
		$content = str_replace("{phpself}",$_SERVER['PHP_SELF'],$content);
		return $content;
	}
	
	function userPostsHtml( $userposts ) {
		$content = getFileContent("pages/userposts.html");
		$subcontent = getFileContent("pages/userpost.html");
		$rows = "";
		foreach ($userposts as $userpost) {
			$rows .= fillHtml($subcontent,$userpost);
		}
		$content = str_replace("{posts}",$rows,$content);
		return $content;
	}
	
	function fillHtml( $content, $data ) {
		$datakeys = array_keys($data);
		foreach ( $datakeys as $key ) {
			$content = str_replace("{".$key."}",$data[$key],$content);
		}
		return $content;
	}
	
	function gergre($userposts,$currentcode) {
		$content = getFileContent("pages/listform.html");
		$content = str_replace("{phpself}",$_SERVER['PHP_SELF'],$content);
		$content = str_replace("{issuers_select}",issuersSelect($issuers,$currentcode),$content);
		return $content;	
	}

	function issuersSelect( $issuers, $currentcode ) {
		$content = getFileContent("pages/issuers_select.html");
		$subcontent = getFileContent("pages/issuer_option.html");
		$options = '';
		foreach ($issuers as $issuer) {
			$option = $subcontent;
			$option = str_replace("{code}",$issuer['code'],$option);
			$option = str_replace("{country}",$issuer['country'],$option);
			$selected = '';
			if ( $currentcode == $issuer['code'] ) {
				$selected = 'selected="selected"';
			}
			$option = str_replace("{selected}",$selected,$option);
			$options .= $option;
		}
		$content = str_replace("{issuer_option}",$options,$content);
		return $content;
	}
	
	function newCoinFormHtml($issuers,$currentcode) {
		$content = getFileContent("pages/newcoinform.html");
		$content = str_replace("{issuers_select}",issuersSelect($issuers,$currentcode),$content);
		return $content;	
	}
	
?>
