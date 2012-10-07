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

	function getFileContent ( $filename ){
		$fp = fopen($filename,"r");
		$filesize = filesize($filename);
		$filecontent = fread($fp, $filesize);
		fclose($fp);					
		return $filecontent;
	}
	
	function frameHtml( $operandleft, $operation, $operandright, $result ) {
		$content = getFileContent("pages/frame.html");
		$calcform = calcFormHtml($operandleft,$operation,$operandright,$result);
		$content = str_replace("{calcform}",$calcform,$content);
		return $content;
	}
	
	function calcFormHtml( $operandleft, $operation, $operandright, $result ) {
		$content = getFileContent("pages/calcform.html");
		$content = str_replace("{phpself}",$_SERVER['PHP_SELF'],$content);
		$outertable = outerTableHtml($operandleft,$operation,$operandright,$result);
		$content = str_replace("{outertable}",$outertable,$content);
		return $content;
	}
	
	function outerTableHtml( $operandleft, $operation, $operandright, $result ) {
		$content = getFileContent("pages/outertable.html");
		$innertable = innerTableHtml($operandleft,$operation,$operandright,$result);
		$content = str_replace("{innertable}",$innertable,$content);
		return $content;
	}
	
	function innerTableHtml( $operandleft, $operation, $operandright, $result ) {
		$content = getFileContent("pages/innertable.html");
		$content = str_replace("{operandleft}",$operandleft,$content);
		$content = str_replace("{operandright}",$operandright,$content);
		$content = str_replace("{result}",$result,$content);
		$operations = operationsHtml($operation);
		$content = str_replace("{operations}",$operations,$content);
		return $content;
	}
	
	function operationsHtml( $operation ) {
		$content = getFileContent("pages/operations.html");
		$content = str_replace("{summationselected}",( $operation == "summation" ? 'selected="selected"' : '' ),$content);
		$content = str_replace("{subtractionselected}",( $operation == "subtraction" ? 'selected="selected"' : '' ),$content);
		$content = str_replace("{multiplicationselected}",( $operation == "multiplication" ? 'selected="selected"' : '' ),$content);
		$content = str_replace("{divisionselected}",( $operation == "division" ? 'selected="selected"' : '' ),$content);
		return $content;
	}
	
?>
