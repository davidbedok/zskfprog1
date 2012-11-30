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
?>
