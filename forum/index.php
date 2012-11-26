<?php
	session_start();
	if(function_exists("date_default_timezone_set") and function_exists("date_default_timezone_get")) @date_default_timezone_set(@date_default_timezone_get());
	
	$USERS_FILE = "data/users.dat";
	$POSTS_FILE = "data/posts.dat";
	
	include("library/common.lib.php");
	include("library/data.lib.php");
	include("library/forum.lib.php");
	include("library/view.lib.php");
	
	include("session.php");
	
	$action = getParameter('action','gotolist');

	$error = '';
	$registerdata = createUser(-1,"","","","");
	$content = '';
	$forward = '';

	include("action/".$action.".php");
	if ( $forward != '' ) {
		include("action/".$forward.".php");
	}
	
	print frameHtml($content);
?>