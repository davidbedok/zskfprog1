<?php
	include("library/arrays.lib.php");

	$numbers = array(10, 20, 30, 40, 50);
	
	$frame = getFileContent("pages/frame.html");
	$numbers = numbersHtml($numbers);
	$frame = str_replace("{numbers}",$numbers,$frame);
	
	$randomnumbers = randomNumbers(10, 50, 55);
	$frame = str_replace("{randomnumbers}",numbersHtml($randomnumbers),$frame);
	
	$person = array();
	$person['firstname'] = "Darth";
	$person['familyname'] = "Vader";
	$person['birthfirstname'] = "Anakin";
	$person['birthfamilyname'] = "Skywalker";
	$person['age'] = 47;
	$person['title'] = "Jedi/Sith";
	
	$frame = str_replace("{singleperson}",personHtml($person),$frame);
	
	$anotherperson = array( 'firstname' => "Padmé", 'familyname' => "Amidala", 'age' => 29, 'title' => "Princess/Queen/Senator" );
	
	$frame = str_replace("{anotherperson}",personHtml($anotherperson),$frame);
	
	$people = array();
	$people[] = createPerson("Darth", "Vader", "Anakin", "Skywalker", 47, "Jedi/Sith");
	$people[] = createPerson("Padmé", "Amidala", "Padmé", "Amidala", 29, "Princess/Queen/Senator");
	$people[] = createPerson("Jar Jar", "Binks", "Jar Jar", "Binks", 88, "General/Senator");
	$people[] = createPerson("Chewbacca", "-", "Chewbacca", "-", 43, "First mate");
	
	$frame = str_replace("{people}",peopleAdvHtml($people),$frame);
	
	print $frame;
?>