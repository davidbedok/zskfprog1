<?php
	function getFileContent ( $filename ){
		$fp = fopen($filename,"r");
		$filesize = filesize($filename);
		$filecontent = fread($fp, $filesize);
		fclose($fp);					
		return $filecontent;
	}
	
	function issuersSelect( $issuers ) {
		$content = getFileContent("pages/issuers_select.html");
		$subcontent = getFileContent("pages/issuer_option.html");
		$options = '';
		foreach ($issuers as $issuer) {
			$option = $subcontent;
			$option = str_replace("{code}",$issuer['code'],$option);
			$option = str_replace("{country}",$issuer['country'],$option);
			$options .= $option;
		}
		$content = str_replace("{issuer_option}",$options,$content);
		return $content;
	}
	
?>
