<?php
	include("library/arrays.lib.php");
	
	function userDefinedCompare( $itemA, $itemB ) {
		if ( $itemA['age'] == $itemB['age'] ) {
			return 0;	
		} else {
			return ( $itemA['age'] < $itemB['age'] ? -1 : 1 );	
		}
	}
	
	$people = array();
	$people[] = createPerson("Darth", "Vader", "Anakin", "Skywalker", 47, "Jedi/Sith");
	$people[] = createPerson("Padmé", "Amidala", "Padmé", "Amidala", 29, "Princess/Queen/Senator");
	$people[] = createPerson("Jar Jar", "Binks", "Jar Jar", "Binks", 88, "General/Senator");
	$people[] = createPerson("Chewbacca", "-", "Chewbacca", "-", 43, "First mate");
	
	print peopleAdvHtml($people);
	print "<br/><br/>";
	
	usort($people, 'userDefinedCompare');
	
	print peopleAdvHtml($people);
?>
