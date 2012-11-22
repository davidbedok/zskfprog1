<?php
	$nickname = getParameter('nickname','');
	$password = getParameter('password','');
	$USER = login($USERS,$nickname,$password);
	if ( count ($USER) > 0 ) {
		$_SESSION['USER'] = $USER;
	} else {
		$error = 'Login failed';
	}
	$forward = 'list';
?>
