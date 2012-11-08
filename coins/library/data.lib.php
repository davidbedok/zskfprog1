<?php
	function loadIssuers ( $filename ){
		$issuers = array();
		$content = getFileContent($filename);
		$lines = explode("\n",$content);
		for ($i = 0; $i < (count($lines) - 1); $i++) {
			$line = $lines[$i];
			$issuer = explode(";",$line);
			$issuers[$i] = createIssuer(trim($issuer[0]), trim($issuer[1]));
		}
		return $issuers;
	}
	
	function createIssuer( $code, $country ) {
		$issuer = array();
		$issuer['code'] = $code;
		$issuer['country'] = $country;
		return $issuer;
	}
	
?>
