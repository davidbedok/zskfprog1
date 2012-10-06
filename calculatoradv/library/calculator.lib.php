<?php
	function calcResult( $operandleft, $operation, $operandright ) {
		$result = 0;
		switch ( $operation ) {
			case "summation": 
				$result = $operandleft + $operandright;
				break;
			case "subtraction": 
				$result = $operandleft - $operandright;
				break;
			case "multiplication": 
				$result = $operandleft * $operandright;
				break;
			case "division": 
				if ( $operandright != 0 ) {
					$result = $operandleft / $operandright;
				} else {
					$result = "n/a";	
				}
				break;
		}
		return $result;		
	}

	function getFileContent ( $file_name ){
		$fp = fopen($file_name,"r");
		$filesize = filesize($file_name);
		$filecontent = fread($fp, $filesize);
		$filecontent = str_replace("\r","",$filecontent);
		$filecontent = str_replace("\n","",$filecontent);
		fclose($fp);					
		return $filecontent;
	}
	
	function calcFormHtml( $operandleft, $operation, $operandright, $result ) {
		$calcform = getFileContent("pages/calcform.html");
		$calcform = str_replace("{phpself}",$_SERVER['PHP_SELF'],$calcform);
		$calcform = str_replace("{operandleft}",$operandleft,$calcform);
		$calcform = str_replace("{summationselected}",( $operation == "summation" ? 'selected="selected"' : '' ),$calcform);
		$calcform = str_replace("{subtractionselected}",( $operation == "subtraction" ? 'selected="selected"' : '' ),$calcform);
		$calcform = str_replace("{multiplicationselected}",( $operation == "multiplication" ? 'selected="selected"' : '' ),$calcform);
		$calcform = str_replace("{divisionselected}",( $operation == "division" ? 'selected="selected"' : '' ),$calcform);
		$calcform = str_replace("{operandright}",$operandright,$calcform);
		$calcform = str_replace("{result}",$result,$calcform);
		return $calcform;
	}
?>
