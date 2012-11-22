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
		$post = array();
		$post['usernick'] = $usernick;
		$post['message'] = $message;
		return $post;
	}
	
	function login ( $users, $nickname, $password ) {
		
	}
	
	function checkRegister($nickname, $familyname, $firstname, $password, $passwordagain) {
		
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
