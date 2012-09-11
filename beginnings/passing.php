<?php
	function echoNewLine( $text, $value ){
		print $text.": <b>".$value."</b><br/>";
	}

	function passingByValue( $parameter ){
		$parameter = $parameter * 2;
		return $parameter;
	}
	
	function passingByReference( &$parameter ){
		$parameter = $parameter * 2;
		return $parameter;
	}
	
	$varA = passingByValue(10);
	echoNewLine("[value] varA", $varA); // 20
	
	$param = 25;
	$varB = passingByValue($param);
	echoNewLine("[value] param", $param); // 25
	echoNewLine("[value] varB", $varB); // 50
	
	$varC = 7;
	$varC = passingByValue($varC);
	echoNewLine("[value] varC", $varC); // 14
	
	// -------------------------------------------
	
	// $varA = passingByReference(10); 
	
	$param = 25;
	$varB = passingByReference($param);
	echoNewLine("[address] param (!!)", $param); // 50
	echoNewLine("[address] varB", $varB); // 50
	
	$varC = 7;
	$varC = passingByReference($varC);
	echoNewLine("[address] varC", $varC); // 14
	
	// ---------------------------------------------
	
	function passingByValueArray( $parameter ){
		$parameter[] = 10;
	}
	
	function passingByReferenceArray( &$parameter ){
		$parameter[] = 10;
	}
	
	$data = array(1, 2, 3);
	
	passingByValueArray($data);
	print_r($data); // 1, 2, 3
	
	print "<br/>";
	
	passingByReferenceArray($data);
	print_r($data); // 1, 2, 3, 10
?>
