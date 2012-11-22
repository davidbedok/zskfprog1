<?php
	if (isset($_REQUEST['reset'])){ $reset = $_REQUEST['reset']; } else { $reset = 0; }
	if ($reset > 0){
		unset($_SESSION['INIT']);	
	}
	if (!isset($_SESSION['INIT'])){
		$_SESSION['INIT'] = true;
		$_SESSION['USER'] = array();
		$_SESSION['USERS'] = loadUsers($USERS_FILE);
		$_SESSION['POSTS'] = loadPosts($POSTS_FILE);
		$_SESSION['USERPOSTS'] = fillUserPosts($_SESSION['USERS'],$_SESSION['POSTS']);
	}
	$USER = $_SESSION['USER'];
	$USERS = $_SESSION['USERS'];
	$POSTS = $_SESSION['POSTS'];
	$USERPOSTS = $_SESSION['USERPOSTS'];
?>
