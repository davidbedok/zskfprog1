<!DOCTYPE html>
<html>
<head>
<title>Physical Education Small Ball Throwing</title>
</head>
<body>
<?php
	$students = array("Alfa","Bravo","Charlie","Delta","Echo","Foxtrot","Golf");
	$spectacledStudents = array(true,false,true,false,true,true,false); // szemuveges
	$smallBallThrowing = array(51,73,25,56,34,19,55); // kislabda hajitas
	
	if (isset($_REQUEST['spectacled'])){ $spectacled = ( $_REQUEST['spectacled'] == 1 ); } else { $spectacled = false; }
	if (isset($_REQUEST['student'])){ $studentindex = $_REQUEST['student']; } else { $studentindex = 0; }
	
	$similarStudents = array();
	for ($i = 0; $i < count($students); $i++ ) {
		if ( $spectacled == $spectacledStudents[$i] ) {
			if ( $studentindex != $i ) {
				if ( ( $smallBallThrowing[$i] > ( $smallBallThrowing[$studentindex] - 10 )  ) &&
				   ( $smallBallThrowing[$i] < ( $smallBallThrowing[$studentindex] + 10 )  ) ) {
					$similarStudents[] = $students[$i];
				}
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
<h1>Physical Education Small Ball Throwing</h1>
<table border="1">
	<thead>
		<tr>
			<th>Name</th>
			<th>Spectacled</th>
			<th>Small Ball Throwing</th>	
		</tr>
		<?php for ($i = 0; $i < count($students); $i++ ) { ?>
			<tr>
				<td><?php 
					print ( decisionContains($similarStudents,$students[$i]) ? "<b>".$students[$i]."</b>" : $students[$i] );
				?></td>
				<td><?php print ( $spectacledStudents[$i] ? "spectacled" : "-" ); ?></td>
				<td><?php print $smallBallThrowing[$i]; ?></td>
			</tr>
		<?php } ?>	
	</thead>
</table>
<form id="pelineformid" name="pelineform" action="<?php print $_SERVER['PHP_SELF']; ?>" method="get">
	<fieldset>
		<legend>Question</legend>
		<table>
			<tr>
				<td>Who are throw similar than</td>
				<td>
					<select id="studentid" name="student">
						<?php for ($i = 0; $i < count($students); $i++ ) { ?>
							<option value="<?php print $i; ?>" <?php print ( $studentindex == $i ? 'selected="selected"' : '' ); ?>><?php print $students[$i]; ?></option>
						<?php } ?>
					</select>			
				</td>
				<td>among of people</td>
				<td>
					<select id="spectacledid" name="spectacled">
						<option value="1" <?php print ( $spectacled ? 'selected="selected"' : '' ); ?>>with</option>
						<option value="0" <?php print ( !$spectacled ? 'selected="selected"' : '' ); ?>>without</option>
					</select>			
				</td>
				<td>glasses?</td>
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