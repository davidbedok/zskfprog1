<!DOCTYPE html>
<html>
<head>
<title>Physical Education Line</title>
</head>
<body>
<?php
	$students = array("Alfa","Bravo","Charlie","Delta","Echo","Foxtrot","Golf");
	$sexOfStudents = array(1,1,2,1,2,2,1);
	$heightOfStudents = array(156,187,189,173,181,168,175);
	
	if (isset($_REQUEST['sex'])){ $sex = $_REQUEST['sex']; } else { $sex = 2; }
	if (isset($_REQUEST['student'])){ $studentindex = $_REQUEST['student']; } else { $studentindex = 0; }
	
	$higherStudents = array();
	for ($i = 0; $i < count($students); $i++ ) {
		if ( $sex == $sexOfStudents[$i] ) {
			if ( $heightOfStudents[$i] > $heightOfStudents[$studentindex] ) {
				$higherStudents[] = $students[$i];
			}
		}
	}
	
	function decisionContains( $data, $value ) {
		$i = 0;
		while ( ( $i < count($data) ) && ( $data[$i] != $value ) ) {
			$i++;
		}
		return ( $i < count($data) );
	}
?>
<h1>Physical Education Line</h1>
<table border="1">
	<thead>
		<tr>
			<th>Name</th>
			<th>Sex</th>
			<th>Height</th>	
		</tr>
		<?php for ($i = 0; $i < count($students); $i++ ) { ?>
			<tr>
				<td><?php 
					print ( decisionContains($higherStudents,$students[$i]) ? "<b>".$students[$i]."</b>" : $students[$i] );
				?></td>
				<td><?php print ( $sexOfStudents[$i] == 1 ? "man" : "woman" ); ?></td>
				<td><?php print $heightOfStudents[$i]; ?></td>
			</tr>
		<?php } ?>	
	</thead>
</table>
<form id="pelineformid" name="pelineform" action="<?php print $_SERVER['PHP_SELF']; ?>" method="get">
	<fieldset>
		<legend>Question</legend>
		<table>
			<tr>
				<td>Who are higher</td>
				<td>
					<select id="sexid" name="sex">
						<option value="1" <?php print ( $sex == 1 ? 'selected="selected"' : '' ); ?>>man(s)</option>
						<option value="2" <?php print ( $sex == 2 ? 'selected="selected"' : '' ); ?>>woman(s)</option>
					</select>			
				</td>
				<td>than</td>
				<td>
					<select id="studentid" name="student">
						<?php for ($i = 0; $i < count($students); $i++ ) { ?>
							<option value="<?php print $i; ?>" <?php print ( $studentindex == $i ? 'selected="selected"' : '' ); ?>><?php print $students[$i]; ?></option>
						<?php } ?>
					</select>			
				</td>
				<td>?</td>
			</tr>
			<tr>
				<td colspan="5">
					<input type="submit" value="Process">
				</td>
			</tr>
		</table>				
	</fieldset>
</form>
</body>
</html>