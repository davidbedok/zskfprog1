<?php

	function frameHtml( $actioncontent ) {
		$content = getFileContent("pages/frame.html");
		$content = str_replace("{actioncontent}",$actioncontent,$content);
		$content = str_replace("{phpself}",$_SERVER['PHP_SELF'],$content);
		return $content;
	}
	
	function listHtml( $userposts, $currentuser, $error ) {
		$content = getFileContent("pages/list.html");
		$content = str_replace("{box}",boxHtml($currentuser,$error),$content);
		$content = str_replace("{userposts}",userPostsHtml($userposts),$content);
		$content = str_replace("{newpost}",newPostHtml($currentuser),$content);
		return $content;
	}
	
	// private
	function boxHtml( $currentuser, $error ) {
		$box = '';
		if ( count( $currentuser ) > 0 ) {
			$box = getFileContent("pages/userbox.html");
			$box = fillHtml($box,$currentuser);
		} else {
			$box = getFileContent("pages/loginbox.html");
			$box = str_replace("{error}",$error,$box);
		}
		return $box;
	}
	
	// private
	function userPostsHtml( $userposts ) {
		$content = getFileContent("pages/userposts.html");
		$subcontent = getFileContent("pages/userpost.html");
		$rows = "";
		foreach ($userposts as $userpost) {
			$rows .= fillHtml($subcontent,$userpost);
		}
		$content = str_replace("{posts}",$rows,$content);
		return $content;
	}
	
	// private
	function fillHtml( $content, $data ) {
		$datakeys = array_keys($data);
		foreach ( $datakeys as $key ) {
			$content = str_replace("{".$key."}",$data[$key],$content);
		}
		return $content;
	}
	
	// private
	function newPostHtml($currentuser) {
		$content = '';
		if ( count( $currentuser ) > 0 ) {
			$content = getFileContent("pages/newpost.html");
		}
		return $content;	
	}
	
	function registerHtml( $error, $registerdata ) {
		$content = getFileContent("pages/register.html");
		$content = str_replace("{error}",$error,$content);
		$content = fillHtml($content,$registerdata);
		return $content;
	}

	function errorsHtml( $errors ) {
		$content = getFileContent("pages/errors.html");
		$subcontent = getFileContent("pages/error.html");
		$elements = '';
		foreach ($errors as $error) {
			$element = $subcontent;
			$element = str_replace("{error}",$error,$element);
			$elements .= $element;
		}
		$content = str_replace("{errors}",$elements,$content);
		return $content;
	}
	
?>
