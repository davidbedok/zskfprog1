<?php
	$ISSUERS_FILE = "data/issuers.dat";
	$COINS_FILE = "data/coins.dat";
	
	include("library/common.lib.php");
	include("library/data.lib.php");
	include("library/coins.lib.php");
	include("library/view.lib.php");
	
	$issuers = loadIssuers($ISSUERS_FILE);
	$coins = loadCoins($COINS_FILE);
	
	$action = getParameter('action','list');
	
	if ( $action == 'list' ) {
		$countrycode = getParameter('issuer','HU');
		$coins = filterCoins($coins,$countrycode);
	} else if ( $action == 'insert' ) {
		$unid = maximumUnid($coins) + 1;
		$countrycode = getParameter('issuer','-');
		$type = getParameter('type','-');
		$nominalvalue = getParameter('nominalvalue','-');
		$family = getParameter('family','-');
		$firstissue = getParameter('firstissue','-');
		$designer = getParameter('designer','-');
		$material = getParameter('material','-');
		$coin = createCoins($unid,$countrycode,$type,$nominalvalue,$family,$firstissue,$designer,$material);
		insertCoin($COINS_FILE,$coin);
		
		$coins = loadCoins($COINS_FILE);
		$coins = filterCoins($coins,$countrycode);
	} else if ( $action == 'delete' ) {
		$countrycode = getParameter('issuer','HU');
		$key = findSubmitImgKeyByPrefix($_REQUEST,"delete_");
		if ( $key != "" ) {
			$end = substr($key,strlen("delete_"));
			$unid = substr($end,0,strpos($end,"_"));
			deleteCoin($coins,$unid);
			saveCoins($COINS_FILE,$coins);
		}
		$coins = loadCoins($COINS_FILE);
		$coins = filterCoins($coins,$countrycode);
	}
	
	print frameHtml($issuers,$coins,$countrycode);
?>