<?php

	function getFileContent ( $filename ){
		$fp = fopen($filename,"r");
		$filesize = filesize($filename);
		$filecontent = fread($fp, $filesize);
		fclose($fp);					
		return $filecontent;
	}
	
	function numbersHtml( $data ) {
		$content = getFileContent("pages/numbers.html");
		$subcontent = getFileContent("pages/numberrow.html");
		$rows = "";
		for ($i = 0; $i < count($data); $i++) {
			$row = $subcontent;
			$row = str_replace("{index}",$i,$row);
			$row = str_replace("{value}",$data[$i],$row);
			$rows .= $row;
		}
		$content = str_replace("{rows}",$rows,$content);
		return $content;
	}
	
	function randomNumbers( $count, $min, $max ) {
		$data = array();
		for ($i = 0; $i < $count; $i++) {
			$data[] = rand($min, $max);
		}
		return $data;
	}
	
	function personHtml( $data ) {
		$content = getFileContent("pages/singleperson.html");
		$content = str_replace("{firstname}",$data['firstname'],$content);
		$content = str_replace("{familyname}",$data['familyname'],$content);
		$content = str_replace("{birthfirstname}",$data['birthfirstname'],$content);
		$content = str_replace("{birthfamilyname}",$data['birthfamilyname'],$content);
		$content = str_replace("{age}",$data['age'],$content);
		$content = str_replace("{title}",$data['title'],$content);
		return $content;
	}
	
	function createPerson( $firstname, $familyname, $birthfirstname, $birthfamilyname, $age, $title ) {
		$person = array();
		$person['firstname'] = $firstname;
		$person['familyname'] = $familyname;
		$person['birthfirstname'] = $birthfirstname;
		$person['birthfamilyname'] = $birthfamilyname;
		$person['age'] = $age;
		$person['title'] = $title;
		return $person;
	}
	
	function peopleHtml( $data ) {
		$content = getFileContent("pages/people.html");
		$subcontent = getFileContent("pages/person.html");
		$rows = "";
		for ($i = 0; $i < count($data); $i++) {
			$row = $subcontent;
			$row = str_replace("{firstname}",$data[$i]['firstname'],$row);
			$row = str_replace("{familyname}",$data[$i]['familyname'],$row);
			$row = str_replace("{birthfirstname}",$data[$i]['birthfirstname'],$row);
			$row = str_replace("{birthfamilyname}",$data[$i]['birthfamilyname'],$row);
			$row = str_replace("{age}",$data[$i]['age'],$row);
			$row = str_replace("{title}",$data[$i]['title'],$row);
			$rows .= $row;
		}
		$content = str_replace("{rows}",$rows,$content);
		return $content;
	}
	
	function peopleAdvHtml( $data ) {
		$content = getFileContent("pages/people.html");
		$subcontent = getFileContent("pages/person.html");
		$rows = "";
		// foreach ($data as $index => $value) {
		foreach ($data as $person) {
			$rows .= personAdvHtml($subcontent,$person);
		}
		$content = str_replace("{rows}",$rows,$content);
		return $content;
	}
	
	function personAdvHtml( $content, $data ) {
		$content = str_replace("{firstname}",$data['firstname'],$content);
		$content = str_replace("{familyname}",$data['familyname'],$content);
		$content = str_replace("{birthfirstname}",$data['birthfirstname'],$content);
		$content = str_replace("{birthfamilyname}",$data['birthfamilyname'],$content);
		$content = str_replace("{age}",$data['age'],$content);
		$content = str_replace("{title}",$data['title'],$content);
		return $content;
	}
	
?>
