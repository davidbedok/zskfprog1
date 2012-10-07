<?php
	include("library/calculator.lib.php");
	if (isset($_REQUEST['operandleft'])){ $operandleft = $_REQUEST['operandleft']; } else { $operandleft = 20; }
	if (isset($_REQUEST['operandright'])){ $operandright = $_REQUEST['operandright']; } else { $operandright = 20; }
	if (isset($_REQUEST['operation'])){ $operation = $_REQUEST['operation']; } else { $operation = "summation"; }
	$result = calcResult($operandleft,$operation,$operandright);
	
	print frameHtml($operandleft,$operation,$operandright,$result);
?>