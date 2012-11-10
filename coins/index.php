<?php
	$ISSUERS_FILE = "data/issuers.dat";
	$COINS_FILE = "data/coins.dat";
	
	include("library/common.lib.php");
	include("library/coins.lib.php");
	include("library/data.lib.php");
	include("library/view.lib.php");
	
	$issuers = loadIssuers($ISSUERS_FILE);
	$coins = loadCoins($COINS_FILE);
	
	$action = getParameter('action','list');
	
	if ( $action == 'list' ) {
		$countrycode = getParameter('issuer','HU');
		$coins = filterCoins($coins,$countrycode);
	} else if ( $action == 'insert' ) {
		$countrycode = getParameter('issuer','-');
		$type = getParameter('type','-');
		$nominalvalue = getParameter('nominalvalue','-');
		$family = getParameter('family','-');
		$firstissue = getParameter('firstissue','-');
		$designer = getParameter('designer','-');
		$material = getParameter('material','-');
		$coin = createCoins($countrycode,$type,$nominalvalue,$family,$firstissue,$designer,$material);
		insertCoins($COINS_FILE,$coin);
		
		$coins = loadCoins($COINS_FILE);
		$coins = filterCoins($coins,$countrycode);
	}
	
	print frameHtml($issuers,$coins,$countrycode);
?>