<?php
	function fillUserPosts( $users, $posts ) {
		$userposts = array();
		foreach ( $posts as $post ) {
			$user = findUser($users,$post['userunid']);
			$userposts[] = createUserPost($user['nickname'],$post['message']);
		}
		return $userposts;
	}
	
	function findUser ( $users, $unid ) {
		$user = null;
		$i = 0;
		while ( ( $i < count($users) ) && ( $users[$i]['unid'] != $unid ) ) {
			$i++;
		}
		if ( $i < count($users) ) {
			$user = $users[$i];
		}
		return $user;
	}
	
	function login ( $users, $nickname, $password ) {
		$user = array();
		$i = 0;
		while ( ( $i < count($users) ) && ( $users[$i]['nickname'] != $nickname ) ) {
			$i++;
		}
		if ( $i < count($users) ) {
			if ( $users[$i]['password'] == $password ) {
				$user = $users[$i];
			}
		}
		return $user;
	}
	
	function checkRegister($nickname, $familyname, $firstname, $password, $passwordagain) {
		$errors = array();
		if ( strlen($nickname) < 5 ) {
			$errors[] = "Nickname is too short (min length: 5).";	
		}
		if ( $familyname == "" ) {
			$errors[] = "Familyname is empty.";	
		}
		if ( $firstname == "" ) {
			$errors[] = "Firstname is empty.";	
		}
		if ( $password == "" ) {
			$errors[] = "Password is empty.";	
		}
		if ( $password != $passwordagain ) {
			$errors[] = "Passwords are different.";	
		}
		return $errors;
	}
	
	function createUserPost( $usernick, $message ) {
		$post = array();
		$post['usernick'] = $usernick;
		$post['message'] = $message;
		return $post;
	}
	
	function maximumUnid ( $users ) {
		$maximum = -1;
		if ( count($users) > 0 ) {
			$maximum = $users[0]['unid'];
			for ( $i = 1; $i < count($users); $i++) {
				if ( $maximum < $users[$i]['unid'] ) {
					$maximum = $users[$i]['unid'];	
				}
			}
		}
		return $maximum;
	}
	
?>
