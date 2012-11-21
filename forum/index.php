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
		$_SESSION['USER'] = array();
		$_SESSION['USERS'] = loadUsers($USERS_FILE);
		$_SESSION['POSTS'] = loadPosts($POSTS_FILE);
		$_SESSION['USERPOSTS'] = fillUserPosts($_SESSION['USERS'],$_SESSION['POSTS']);
	}
	$USER = $_SESSION['USER'];
	$USERS = $_SESSION['USERS'];
	$POSTS = $_SESSION['POSTS'];
	$USERPOSTS = $_SESSION['USERPOSTS'];

	$action = getParameter('action','list');

	$error = '';
	
	$actioncontent = '';
	
	if ( $action == 'login' ) {	
		$nickname = getParameter('nickname','');
		$password = getParameter('password','');
		$USER = login($USERS,$nickname,$password);
		if ( count ($USER) > 0 ) {
			$_SESSION['USER'] = $USER;
		} else {
			$error = 'Login failed';
		}
		$action = 'list';
	}
	if ( $action == 'logout' ) {
		$USER = array();
		$_SESSION['USER'] = $USER;
		$action = 'list';
	}
	if ( $action == 'register' ) {
		$nickname = getParameter('nickname','');
		$familyname = getParameter('familyname','');
		$firstname = getParameter('firstname','');
		$password = getParameter('password','');
		$passwordagain = getParameter('passwordagain','');
		$errors = checkRegister($nickname,$familyname,$firstname,$password,$passwordagain);
		if ( count($errors) > 0 ) {
			$error = errorsHtml($errors);
			$action = 'gotoregister';
		} else {
			$newUserUnid = maximumUnid($USERS) + 1;
			$USER = createUser($newUserUnid,$nickname,$familyname,$firstname,$password);
			insertToFile($USERS_FILE,$USER);
			
			$USERS = loadUsers($USERS_FILE);
			$_SESSION['USERS'] = $USERS;
			
			$_SESSION['USER'] = $USER;
			$action = 'list';
		}
	}
	if ( $action == 'newpost' ) {
		$message = getParameter('message','');	
		$newPost = createPost($USER['unid'],$message);
		insertToFile($POSTS_FILE,$newPost);
		
		$POSTS = loadPosts($POSTS_FILE);
		$_SESSION['POSTS'] = $POSTS;
		
		$USERPOSTS = fillUserPosts($USERS,$POSTS);
		$_SESSION['USERPOSTS'] = $USERPOSTS;
		
		$action = 'list';
	}
	
	if ( $action == 'list' ) {
		$actioncontent = listHtml($USERPOSTS,$USER,$error);	
	} 
	if ( $action == 'gotoregister' ) {
		$actioncontent = registerHtml($error);	
	}
	
	print frameHtml($actioncontent);
?>