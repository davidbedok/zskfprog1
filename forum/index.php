<?php
	session_start();
	
	$USERS_FILE = "data/users.dat";
	$POSTS_FILE = "data/posts.dat";
	
	include("library/common.lib.php");
	include("library/data.lib.php");
	include("library/forum.lib.php");
	include("library/view.lib.php");
	
	if (isset($_REQUEST['reset'])){ $reset = $_REQUEST['reset']; } else { $reset = 0; }
	if ($reset > 0){
		unset($_SESSION['INIT']);	
	}
	if (!isset($_SESSION['INIT'])){
		$_SESSION['INIT'] = true;
		$_SESSION['USERS'] = loadUsers($USERS_FILE);
		$_SESSION['POSTS'] = loadPosts($POSTS_FILE);
		$_SESSION['USERPOSTS'] = fillUserPosts($_SESSION['USERS'],$_SESSION['POSTS']);
	}
	$USERS = $_SESSION['USERS'];
	$POSTS = $_SESSION['POSTS'];
	$USERPOSTS = $_SESSION['USERPOSTS'];

	$action = getParameter('action','list');
	
	$actioncontent = '';
	if ( $action == 'list' ) {
	
		$actioncontent = userPostsHtml($USERPOSTS);
		
	} else if ( $action == 'insert' ) {
		/*
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
		$coins = filterCoins($coins,$countrycode);*/
	} else if ( $action == 'delete' ) {
		/*
		$countrycode = getParameter('issuer','HU');
		$key = findSubmitImgKeyByPrefix($_REQUEST,"delete_");
		if ( $key != "" ) {
			$end = substr($key,strlen("delete_"));
			$unid = substr($end,0,strpos($end,"_"));
			deleteCoin($coins,$unid);
			saveCoins($COINS_FILE,$coins);
		}
		$coins = loadCoins($COINS_FILE);
		$coins = filterCoins($coins,$countrycode); */
	}
	
	print frameHtml($actioncontent);
?>