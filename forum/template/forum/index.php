<?php
	session_start();
	
	$USERS_FILE = "data/users.dat";
	$POSTS_FILE = "data/posts.dat";
	
	include("library/common.lib.php");
	include("library/data.lib.php");
	include("library/forum.lib.php");
	include("library/view.lib.php");
	
	include("session.php");
	
	$action = getParameter('action','list');

	$error = '';
	$content = '';
	$forward = '';
	
	include("action/".$action.".php");
	if ( $forward != '' ) {
		include("action/".$forward.".php");
	}
	
	print frameHtml($content);
?>