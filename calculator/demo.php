<!DOCTYPE html>
<html>
<head>
<title>demo</title>
</head>
<body>
<?php
	$tableHeader = "Array data";
	$numbers = array(10, 20, 30, 40);
?>
<h1>Demo</h1>
<table border="1">
	<legend><?php print $tableHeader; ?></legend>
	<tr>
		<?php for ($i = 0; $i < count($numbers); $i++ ) { ?>
			<td><?php print $numbers[$i]; ?></td>
		<?php } ?>
	</tr>
</table>
</body>
</html>