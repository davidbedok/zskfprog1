<?php
	$nickname = getParameter('nickname','');
	$familyname = getParameter('familyname','');
	$firstname = getParameter('firstname','');
	$password = getParameter('password','');
	$passwordagain = getParameter('passwordagain','');
	$errors = checkRegister($nickname,$familyname,$firstname,$password,$passwordagain);
	if ( count($errors) > 0 ) {
		$error = errorsHtml($errors);
		$registerdata = createUser(-1,$nickname,$familyname,$firstname,"");
		$forward = 'gotoregister';
	} else {
		$newUserUnid = maximumUnid($USERS) + 1;
		$USER = createUser($newUserUnid,$nickname,$familyname,$firstname,$password);
		insertToFile($USERS_FILE,$USER);
		
		$USERS = loadUsers($USERS_FILE);
		$_SESSION['USERS'] = $USERS;
		
		$_SESSION['USER'] = $USER;
		$forward = 'gotolist';
	}
?>
