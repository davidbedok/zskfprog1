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

	function filterCoins( $coins, $countrycode ) {
		$result = array();
		foreach ( $coins as $coin ) {
			if ( $coin['countrycode'] == $countrycode ) {
				$result[] = $coin;	
			}
		}
		return $result;
	}
	
	function maximumUnid ( $coins ) {
		$maximum = -1;
		if ( count($coins) > 0 ) {
			$maximum = $coins[0]['unid'];
			for ( $i = 1; $i < count($coins); $i++) {
				if ( $maximum < $coins[$i]['unid'] ) {
					$maximum = $coins[$i]['unid'];	
				}
			}
		}
		return $maximum;
	}
	
?>
