<?php
	function loadUsers ( $filename ){
		$coins = array();
		$content = file($filename,FILE_IGNORE_NEW_LINES);
		foreach ($content as $line) {
			$coindata = explode(";",$line);
			if ( count($coindata) == 5 ) {
				$coins[] = createUser(trim($coindata[0]), trim($coindata[1]), trim($coindata[2]), trim($coindata[3]), trim($coindata[4]));	
			}
		}
		return $coins;
	}
	
	function createUser( $unid, $nickname, $familyname, $firstname, $password ) {
		$user = array();
		$user['unid'] = $unid;
		$user['nickname'] = $nickname;
		$user['familyname'] = $familyname;
		$user['firstname'] = $firstname;
		$user['password'] = $password;
		return $user;
	}
	
	function loadPosts ( $filename ){
		$coins = array();
		$content = file($filename,FILE_IGNORE_NEW_LINES);
		foreach ($content as $line) {
			$coindata = explode(";",$line);
			if ( count($coindata) == 2 ) {
				$coins[] = createPost(trim($coindata[0]), trim($coindata[1]));	
			}
		}
		return $coins;
	}
	
	function createPost( $userunid, $message ) {
		$post = array();
		$post['userunid'] = $userunid;
		$post['message'] = $message;
		return $post;
	}
	
	function insertToFile( $filename, $data ){
		$line = implode(";",$data)."\n"; 
		file_put_contents($filename,$line,FILE_APPEND);
	}
	
?>
