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
	
	function createUserPost( $usernick, $message ) {
		$userpost = array();
		$userpost['usernick'] = $usernick;
		$userpost['message'] = $message;
		return $userpost;
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
	
	function maximumUnid ( $data ) {
		$maximum = -1;
		if ( count($data) > 0 ) {
			$maximum = $data[0]['unid'];
			for ( $i = 1; $i < count($data); $i++) {
				if ( $maximum < $data[$i]['unid'] ) {
					$maximum = $data[$i]['unid'];	
				}
			}
		}
		return $maximum;
	}
	
?>
