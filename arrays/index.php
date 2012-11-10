<?php
	include("library/arrays.lib.php");

	$numbers = array(10, 20, 30, 40, 50);
	
	print numbersHtml($numbers);
	
	$randomnumbers = randomNumbers(10, 50, 55);
	print numbersHtml($randomnumbers);
	
	$person = array();
	$person['firstname'] = "Darth";
	$person['familyname'] = "Vader";
	$person['birthfirstname'] = "Anakin";
	$person['birthfamilyname'] = "Skywalker";
	$person['age'] = 47;
	$person['title'] = "Jedi/Sith";
	
	print personHtml($person);
	
	$anotherperson = array( 'firstname' => "Padmé", 'familyname' => "Amidala", 'birthfirstname' => "", 'birthfamilyname' => "", 'age' => 29, 'title' => "Princess/Queen/Senator" );
	
	print personHtml($anotherperson);
	
	$arrayOne = array();
	$arrayOne[0] = 1;
	$arrayOne[1] = 2;
	$arrayOne[2] = 3;
	
	$arrayTwo = array();
	$arrayTwo[0] = 10;
	$arrayTwo[1] = 20;
	
	$arrayOfArrays = array();
	$arrayOfArrays[0] = $arrayOne;
	$arrayOfArrays[1] = $arrayTwo;
	$arrayOfArrays[2] = randomNumbers(3,100, 999);
	
	print arrayOfArraysHtml($arrayOfArrays);
	
	// print $arrayOfArrays[0][0]; // 1
	// print $arrayOfArrays[0][1]; // 2
	// print $arrayOfArrays[1][1]; // 20
 	
	$matrix = array();
	$matrix[0] = array(1, 2, 3, 4, 5);
	$matrix[1] = array(6, 7, 8, 9, 10);
	$matrix[2] = array(11, 12, 13, 14, 15);
	$matrix[3] = array(16, 17, 18, 19, 20);
	$matrix[4] = array(21, 22, 23, 24, 25);
	$matrix[5] = array(26, 27, 28, 29, 30);
	$matrix[6] = array(31, 32, 33, 34, 35);

	print matrixAdvHtml($matrix);
	
	$people = array();
	$people[] = createPerson("Darth", "Vader", "Anakin", "Skywalker", 47, "Jedi/Sith");
	$people[] = createPerson("Padmé", "Amidala", "Padmé", "Amidala", 29, "Princess/Queen/Senator");
	$people[] = createPerson("Jar Jar", "Binks", "Jar Jar", "Binks", 88, "General/Senator");
	$people[] = createPerson("Chewbacca", "-", "Chewbacca", "-", 43, "First mate");
	
	print peopleAdvHtml($people);
?>