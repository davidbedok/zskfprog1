<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style/calculator.css" />
<title>calculator</title>
</head>
<body>
<?php
	if (isset($_REQUEST['operandleft'])){ $operandleft = $_REQUEST['operandleft']; } else { $operandleft = 20; }
	if (isset($_REQUEST['operandright'])){ $operandright = $_REQUEST['operandright']; } else { $operandright = 20; }
	if (isset($_REQUEST['operation'])){ $operation = $_REQUEST['operation']; } else { $operation = "summation"; }
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
				$result = "NaN";	
			}
			break;
	}
?>
<h1>Simple calculator webapplication</h1>
<form id="calcformid" name="calcform" action="<?php print $_SERVER['PHP_SELF']; ?>" method="get">
	<fieldset>
		<legend>Operands</legend>
		<table id="outer">
			<tr>
				<td>
					<table id="inner">
						<tr>
							<td><input name="operandleft" type="number" value="<?php print $operandleft; ?>" /></td>
							<td>
								<select name="operation">
								<option value="summation" <?php if ( $operation == "summation" ) { print 'selected="selected"'; } ?>>+</option>
									<option value="subtraction" <?php if ( $operation == "subtraction" ) { print 'selected="selected"'; } ?>>-</option>
									<option value="multiplication" <?php if ( $operation == "multiplication" ) { print 'selected="selected"'; } ?>>*</option>
									<option value="division" <?php if ( $operation == "division" ) { print 'selected="selected"'; } ?>>/</option>
								</select>			
							</td>
							<td><input name="operandright" type="number" value="<?php print $operandright; ?>" /></td>
							<td>=</td>
							<td><?php print $result; ?></td>
						</tr>
						<tr>
							<td colspan="5">
								<input type="submit" value="Calculate">
							</td>
						</tr>
					</table>				
				</td>
				<td class="toright">
					<img id="calcimg" src="images/calculator.png" alt="calculator web application" />
				</td>
			</tr>
		</table>
	</fieldset>
</form>
</body>
</html>