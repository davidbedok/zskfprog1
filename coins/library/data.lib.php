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
	
	function loadCoins ( $filename ){
		$coins = array();
		$content = file($filename,FILE_IGNORE_NEW_LINES);
		foreach ($content as $line) {
			$coindata = explode(";",$line);
			if ( count($coindata) == 8 ) {
				$coins[] = createCoin(trim($coindata[0]), trim($coindata[1]), trim($coindata[2]), trim($coindata[3]), trim($coindata[4]), trim($coindata[5]), trim($coindata[6]), trim($coindata[7]));	
			}
		}
		return $coins;
	}
	
	function createCoin( $unid, $countrycode, $type, $nominalvalue, $family, $firstissue, $designer, $material ) {
		$coin = array();
		$coin['unid'] = $unid;
		$coin['countrycode'] = $countrycode;
		$coin['type'] = $type;
		$coin['nominalvalue'] = $nominalvalue;
		$coin['family'] = $family;
		$coin['firstissue'] = $firstissue;
		$coin['designer'] = $designer;
		$coin['material'] = $material;
		return $coin;
	}
	
	function insertCoin( $filename, $coin ){
		$line = implode(";",$coin)."\n"; 
		file_put_contents($filename,$line,FILE_APPEND);
	}
	
	function saveCoins( $filename, $coins ){
		$lines = "";
		foreach ($coins as $coin) {
			$lines .= implode(";",$coin)."\n";
		}
		file_put_contents($filename,$lines);
	}
	
?>
