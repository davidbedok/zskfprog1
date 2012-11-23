<?php
	$message = getParameter('message','');	
	$newPost = createPost($USER['unid'],$message);
	insertToFile($POSTS_FILE,$newPost);
	
	$POSTS = loadPosts($POSTS_FILE);
	$_SESSION['POSTS'] = $POSTS;
	
	$USERPOSTS = fillUserPosts($USERS,$POSTS);
	$_SESSION['USERPOSTS'] = $USERPOSTS;
	
	$forward = 'gotolist';
?>
