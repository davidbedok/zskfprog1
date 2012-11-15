<?php
	function getFileContent ( $filename ){
		$fp = fopen($filename,"r");
		$filesize = filesize($filename);
		$filecontent = fread($fp, $filesize);
		fclose($fp);					
		return $filecontent;
	}
	
	function getParameter( $name, $default ) {
		if (isset($_REQUEST[$name])) { 
			$value = $_REQUEST[$name]; 
		} else { 
			$value = $default; 
		}
		return $value;
	}
	
	function findSubmitImgKeyByPrefix( $request, $prefix ) {
		$key = "";
		$keys = array_keys($request);
		$i = 0;
		while ( ($i < count($keys)) && ( strpos($keys[$i],$prefix) === false ) ) {
			$i++;
		}
		if ( $i < count($keys) ) {
			$key = $keys[$i];	
		}
		return $key;
	}
?>
