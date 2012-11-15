<?php

	function frameHtml($issuers,$coins,$currentcode) {
		$content = getFileContent("pages/frame.html");
		$content = str_replace("{listform}",listFormHtml($issuers,$currentcode),$content);
		$content = str_replace("{coins}",coinsHtml($coins,$currentcode),$content);
		$content = str_replace("{newcoinform}",newCoinFormHtml($issuers,$currentcode),$content);
		$content = str_replace("{phpself}",$_SERVER['PHP_SELF'],$content);
		return $content;
	}
	
	function listFormHtml($issuers,$currentcode) {
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
	
	function coinsHtml( $coins, $currentcode ) {
		$frame = getFileContent("pages/coinsframe.html");
		if ( count($coins) > 0 ) {
			$content = getFileContent("pages/coins.html");
			$subcontent = getFileContent("pages/coinrow.html");
			$rows = "";
			foreach ($coins as $coin) {
				$rows .= coinHtml($subcontent,$coin);
			}
			$content = str_replace("{coinrows}",$rows,$content);
		} else {
			$content = getFileContent("pages/coinsempty.html");
		}
		$frame = str_replace("{coins}",$content,$frame);
		$frame = str_replace("{countrycode}",$currentcode,$frame);
		return $frame;
	}
	
	function coinHtml( $content, $coin ) {
		$coinkeys = array_keys($coin);
		foreach ( $coinkeys as $key ) {
			$content = str_replace("{".$key."}",$coin[$key],$content);
		}
		return $content;
	}
	
	function newCoinFormHtml($issuers,$currentcode) {
		$content = getFileContent("pages/newcoinform.html");
		$content = str_replace("{issuers_select}",issuersSelect($issuers,$currentcode),$content);
		return $content;	
	}
	
?>
